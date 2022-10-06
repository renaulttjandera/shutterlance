<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
      if (!isset($_GET["role"])) {
        return redirect('/register?role=0');
      }
      if($_GET["role"] == 0) {
        $role = "a Customer";
      } else if($_GET["role"] == 1) {
        $role = "a Talent";
      } else {
        return redirect('/register?role=0');
      }
      return view('register', ["role" => $role, "rolenum" => $_GET["role"]]);
    }

    public function store(Request $request) {
      $validatedData = $request->validate([
        "name" => "required",
        "email" => "required|email|unique:users",
        "password" => "required|min:8",
        "password2" => "required|min:8|same:password"
      ],
      [
        'password2.required' => 'The password is required',
        'password2.min' => 'The password must be at least 8 characters.',
        'password2.same' => "The passwords must match."
      ]);

      $validatedData["password"] = Hash::make($validatedData['password']);
      $validatedData += array("role" => $_GET["role"]);
      $validatedData += array("info" => 0);
      $validatedData += array("status" => 0);

      User::create($validatedData);

      return redirect('login')->with('success', 'Register successful! Please login.');
    }
}
