<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Explore - Shutterlance</title>
<body>
  <h1>Explore Services</h1>
  <form action="/explore">
    @csrf
  <input type="text" name="search" id="search" placeholder="Search...">
  <button type="submit">Search</button><br><br>
</form>
  @foreach ($services as $service)
  <div>
    <img src="{{asset("storage/" . $service->sample1)}}" alt="" width="300">
    <h3>{{$service->name}}</h3>
    <a href="/services/{{$service->id}}">See Details</a>
    <br><br>
  </div>
  @endforeach
  <br>
  <form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
  </form>
</body>
</html>