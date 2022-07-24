<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
      return view('login');
    }

    public function auth(Request $request) {
      $credentials = $request->validate([
        "email" => "required|email",
        "password" => "required",
      ]);
      if(Auth::attempt($credentials)) {
        $request->session()->regenerate();
        if(Auth::user()->role == 2) {
          return redirect()->intended("admin")->with('success', 'Login successful!');
        }
        return redirect()->intended("dashboard")->with('success', 'Login successful!');
      }
      return back()->with('fail', 'The email address or password is incorrect.');
    }

    public function logout(Request $request) {
      Auth::logout();
 
      $request->session()->invalidate();
  
      $request->session()->regenerateToken();
  
      return redirect('/login');
    }
}
