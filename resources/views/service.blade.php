{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>"{{$service->name}}" - Shutterlance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<body>
  <h1>{{$service->name}}</h1>
  <h2>By: {{$user->name}}</h2>
  <p>{{$service->description}}</p>
  <h2>Price</h2>
  <p>Rp{{$service->price}}</p>
  <h2>Photo Samples</h2>
  <img src="{{asset("storage/" . $service->sample1)}}" alt="" width="300">
  @if($service->sample2 != null)
  <img src="{{asset("storage/" . $service->sample2)}}" alt="" width="300">
  @endif
  @if($service->sample2 != null)
  <img src="{{asset("storage/" . $service->sample3)}}" alt="" width="300">
  @endif
  @if($service->sample2 != null)
  <img src="{{asset("storage/" . $service->sample4)}}" alt="" width="300">
  @endif
  @if($service->sample2 != null)
  <img src="{{asset("storage/" . $service->sample5)}}" alt="" width="300">
  @endif
  <h2>Contacts</h2>
  <p>Email: {{$service->email}}</p>
  <p>Phone Number: {{$service->phone}}</p>
  @if (!isset(Auth::user()->role)||Auth::user()->role == 0)
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Buy This Service
  </button>
  @endif
  <br>
  <br>
  <a href="/explore">Back</a>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Halo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          yakin beli dek?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="/buy" method="post">
            @csrf
            <input type="hidden" name="service_id" value="{{$service->id}}">
            <input type="hidden" name="freelancer_id" value="{{$user->id}}">
            <input type="hidden" name="freelancer_email" value="{{$service->email}}">
            <input type="hidden" name="service_name" value="{{$service->name}}">
            <input type="hidden" name="customer_name" value="{{Auth::user()->name}}">
            <input type="hidden" name="freelancer_name" value="{{$user->name}}">
          <button type="submit" class="btn btn-primary">Buy</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html> --}}

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

    <title>{{$service->name}} - Snapshot Corporation</title>
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

    <div class="details mt-5 mb-5 page">
      <div class="container">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('status')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            @endif
        <div class="row">
          <div class="col-md-5">
            <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @if($service->sample2)
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                @endif
                @if($service->sample3)
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                @endif
                @if($service->sample4)
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                @endif
                @if($service->sample5)
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                @endif
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('/storage/' . $service->sample1)}}" alt="First slide">
                </div>
                @if($service->sample2)
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/storage/' . $service->sample2)}}" alt="Second slide">
                </div>
                @endif
                @if($service->sample3)
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/storage/' . $service->sample3)}}" alt="Third slide">
                </div>
                @endif
                @if($service->sample4)
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/storage/' . $service->sample4)}}" alt="Third slide">
                </div>
                @endif
                @if($service->sample5)
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/storage/' . $service->sample5)}}" alt="Third slide">
                </div>
                @endif
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-md-7">
            
              <h1>{{$service->name}}</h1>
              <h3 class="text-primary mb-3">Rp{{$service->price}},-</h3>
              <h2>Contacts</h2>
              <p class="lead">Email: {{$service->email}}</p>
              <p class="lead">Phone Number: {{$service->phone}}</p>
              @if(Auth::user() && Auth::user()->role==0)
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Buy
              </button>
              @endif
              @if (!isset(Auth::user()->role))
  <a href="/login" class="btn btn-primary">Buy</a>
  @endif
          </div>
        </div>
        <h5 class="mt-3">Service Description</h5>
              <p class="description">
                <?= nl2br($service->description); ?>
              </p>
      </div>
    </div>

    @if(Auth::user())

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">judul</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            yakin beli deck?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="/buy" method="post">
              @csrf
              <input type="hidden" name="service_id" value="{{$service->id}}">
              <input type="hidden" name="freelancer_id" value="{{$user->id}}">
              <input type="hidden" name="freelancer_email" value="{{$service->email}}">
              <input type="hidden" name="service_name" value="{{$service->name}}">
              <input type="hidden" name="customer_name" value="{{Auth::user()->name}}">
              <input type="hidden" name="freelancer_name" value="{{$user->name}}">
            <button type="submit" class="btn btn-primary">Buy</button>
          </form>
          </div>
        </div>
      </div>
    </div>

    @endif
    <footer class="bg-dark py-3 text-center text-light">
      Copyright &copy; 2022 Snapshot Corporation. All rights reserved.
    </footer>
    

<!-- JQuery, Popper, Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

