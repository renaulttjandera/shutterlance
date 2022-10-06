<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Info;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index() {
      $services = Service::latest();

      if (request("search")) {
        $services->where("name", "like", "%" . request("search") . "%");
      }
      return view("explore", [
        "services" => $services->get()
      ]);
    }

    public function show(Service $service) {
      $user = User::find($service->user_id);
      return view("service", ["service" => $service, "user" => $user]);
    }

    public function create() {
      return view("create");
    }

    public function store(Request $request) {
      $validatedData = $request->validate([
        "name" => "required",
        "description" => "required|max:10000",
        "sample1" => "required|image|file|mimes:png,jpg,jpeg|max:10240",
        "sample2" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "sample3" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "sample4" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "sample5" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "email" => "required|email",
        "phone" => "required|integer",
        "price" => "required|integer|min:1"
      ]);

      $validatedData += array("user_id" => Auth::user()->id);
      $validatedData["sample1"] = $request->file('sample1')->store('sample1');

      if ($request->file('sample2')) {
        $validatedData["sample2"] = $request->file('sample2')->store('sample2');
      }

      if ($request->file('sample3')) {
        $validatedData["sample3"] = $request->file('sample3')->store('sample3');
      }

      if ($request->file('sample4')) {
        $validatedData["sample4"] = $request->file('sample4')->store('sample4');
      }

      if ($request->file('sample5')) {
        $validatedData["sample5"] = $request->file('sample5')->store('sample5');
      }
      
      Service::create($validatedData);

      return redirect('dashboard')->with('success', 'Service Created!');
    }

    public function destroy(Request $request, Service $service) {
      if ($service->sample1) {
        Storage::delete($service->sample1);
      }
      if ($service->sample2) {
        Storage::delete($service->sample2);
      }
      if ($service->sample3) {
        Storage::delete($service->sample3);
      }
      if ($service->sample4) {
        Storage::delete($service->sample4);
      }
      if ($service->sample5) {
        Storage::delete($service->sample5);
      }
      $service = Service::find($request->id);
      $service->delete();
      return redirect('dashboard')->with('success', 'Service Deleted!');
    }

    public function edit(Service $service) {
      if ($service->user_id != Auth::user()->id) {
        return redirect('dashboard');
      }

      return view("edit", ["service" => $service]);
    }

    public function update(Request $request, Service $service) {
      $validatedData = $request->validate([
        "name" => "required",
        "description" => "required|max:10000",
        "sample1" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "sample2" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "sample3" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "sample4" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "sample5" => "image|file|mimes:png,jpg,jpeg|max:10240",
        "email" => "required|email",
        "phone" => "required|integer",
        "price" => "required|integer|min:1"
      ]);

      if ($request->file('sample1')) {
        if($request->oldsample1) {
          Storage::delete($request->oldsample1);
        }
        $validatedData["sample1"] = $request->file('sample1')->store('sample1');
      }

      if ($request->file('sample2')) {
        if($request->oldsample2) {
          Storage::delete($request->oldsample2);
        }
        $validatedData["sample2"] = $request->file('sample2')->store('sample2');
      }

      if ($request->file('sample3')) {
        if($request->oldsample3) {
          Storage::delete($request->oldsample3);
        }
        $validatedData["sample3"] = $request->file('sample3')->store('sample3');
      }

      if ($request->file('sample4')) {
        if($request->oldsample4) {
          Storage::delete($request->oldsample4);
        }
        $validatedData["sample4"] = $request->file('sample4')->store('sample4');
      }

      if ($request->file('sample5')) {
        if($request->oldsample5) {
          Storage::delete($request->oldsample5);
        }
        $validatedData["sample5"] = $request->file('sample5')->store('sample5');
      }

      $validatedData['user_id'] = Auth::user()->id;
      Service::where('id', $service->id)->update($validatedData);
      return redirect('dashboard')->with('success', 'Service Edited!');
    }
}
