<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - Shutterlance</title>
</head>
<body>
  <h1>Login</h1>
  @if (session('success'))
       <p style="color: green;">{{ session('success') }}</p>
@endif
  <form action="/login" method="post">
    @csrf
    <label for="">Email Address</label><br>
    <input type="email" name="email" id="email" placeholder="Ex: johnsmith@gmail.com" required value="{{old("email")}}">
    @error("email")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>

    <label for="">Password</label><br>
    <input type="password" name="password" id="password" required>
    @error("password")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>
    
    <button type="submit">Login</button>
    @if (session('fail'))
    <p style="color: red;">{{ session('fail') }}</p>
@endif
  </form><br>
  <a href="/register?role=0">Register as Customer</a><br>
  <a href="/register?role=1">Register as Freelancer</a>
</body>
</html>