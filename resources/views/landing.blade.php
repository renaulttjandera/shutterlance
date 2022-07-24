<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home - Shutterlance</title>
</head>
<body>
  <h1>Shutterlance</h1>
  @guest
  <a href="/login">Login</a><br>
  <a href="/register?role=0">Register as Customer</a><br>
  <a href="/register?role=1">Register as Freelancer</a>
  @endguest
  @auth
  <form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
  </form>
  @endauth
</body>
</html>