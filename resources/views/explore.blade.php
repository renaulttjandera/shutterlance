{{-- <!DOCTYPE html>
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
</html> --}}
<!DOCTYPE html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{url('stylesheet/style.css')}}" />

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Explore - Snapshot Corporation</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Snapshot Corporation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto text-center">
            <a class="nav-item nav-link" href="/">Home</a>
            <a class="nav-item nav-link" href="/explore">Explore</a>
            @if(Auth::user())
            <a class="nav-item nav-link" href="/dashboard">Dashboard</a>
            <a href="/logout" class="nav-item button btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="/logout" method="POST">
              @csrf
            </form>
            @endif
            @if(!Auth::user())
            <a href="/login" class="nav-item nav-link">Login</a>
            <a href="/register?role=0" class="nav-item button btn btn-primary">Register</a>
            @endif
            
          </div>
        </div>
      </div>
    </nav>

<div class="products mb-5 pt-3 page" id="products">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 mb-3">Explore Services</h1>
        @if(Auth::user())
        <a href="{{url('/dashboard')}}" class="button btn btn-primary mb-3">Dashboard <i class="fas fa-tachometer-alt"></i></a>
        @endif
        <form method="get" action="/explore">
          <div class="form-row align-items-center mb-3">
            <div class="search mr-3">
              <input type="text" class="form-control" id="search" name="search" placeholder="Search here...">
            </div>
            <div>
              <button type="submit" class="button btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
        {{-- <form action="/explore">
          @csrf
        <input type="text" name="search" id="search" placeholder="Search...">
        <button type="submit">Search</button><br><br> --}}
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('status')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
      </div>
    </div>
    <div class="row justify-content-center">
      @foreach ($services as $product)
      <div class="col-md-3 mb-5">
        <div class="card shadow-lg">
          <img class="card-img-top" height="300" width="300" src="{{asset("storage/" . $product->sample1)}}" />
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">Rp{{$product->price}},-</p>
            <a href="/services/{{$product->id}}" class="button btn btn-primary">See Details <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<footer class="bg-dark py-3 text-center text-light">
  Copyright &copy; 2022 Snapshot Corporation. All rights reserved.
</footer>

<!-- JQuery, Popper, Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>