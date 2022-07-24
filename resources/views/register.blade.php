<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register - Shutterlance</title>
</head>
<body>
  <h1>Register as {{$role}}</h1>
  <form action="/register?role={{$rolenum}}" method="post">
    @csrf
    <label for="name">Full Name</label><br>
    <input type="text" name="name" id="name" placeholder="Ex: John Smith" required value="{{old("name")}}">
    @error("name")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
    <label for="email">Email Address</label><br>
    <input type="email" name="email" id="email" placeholder="Ex: johnsmith@gmail.com" required value="{{old("email")}}">
    @error("email")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" required>
    @error("password")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>

    <label for="password2">Confirm Password</label><br>
    <input type="password" name="password2" id="password2" required >@error("password2")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
    
    <button type="submit">Register</button>
  </form><br>
  @if ($rolenum == 0)
  <a href="/register?role=1">Register as Freelancer</a><br>
  @endif

  @if ($rolenum == 1)
  <a href="/register?role=0">Register as Customer</a><br>
  @endif

  <a href="/login">Login</a>
</body>
</html>