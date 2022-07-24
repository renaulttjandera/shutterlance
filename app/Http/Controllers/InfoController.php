<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Info;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function store(Request $request) {
      $validatedData = $request->validate([
        "description" => "required|max:1000",
        "cv" => "required|file|mimes:pdf|max:10240",
        "portfolio" => "required|file|mimes:pdf|max:10240",
        "mou" => "required|file|mimes:pdf|max:10240",
        "school" => "required",
        "birthdate" => "required|date"
      ],
      [
        "mou.file" => "The Memorandum of Understanding (MoU) must be a file.",
        "mou.mimes" => "The Memorandum of Understanding (MoU) must be a PDF.",
        "mou.max" => "The size of Memorandum of Understanding (MoU) is maximum 10 MB."
      ]);

      $validatedData += array("user_id" => Auth::user()->id);
      $validatedData["cv"] = $request->file('cv')->store('cv');
      $validatedData["portfolio"] = $request->file('portfolio')->store('portfolio');
      $validatedData["mou"] = $request->file('mou')->store('mou');
      Info::create($validatedData);

      $user = User::find(Auth::user()->id);
      $user->info = 1;
      $user->save();

      return redirect('dashboard')->with('success', 'Info sent! Please wait 1-2 days (24-48 hours) for approval!');
    }

    public function accept(Request $request) {
      $user = User::find($request->id);
      $user->status = 2;
      $user->save();
      
      return redirect('admin')->with('success', 'Berhasil diacc!');
    }

    public function reject(Request $request) {
      $info = Info::find($request->info_id);
      $info->delete();
      $user = User::find($request->id);
      $user->status = 1;
      $user->info = 0;
      $user->save();
      return redirect('admin')->with('success', 'Berhasil direject!');
    }
}
