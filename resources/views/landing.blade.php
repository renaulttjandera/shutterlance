{{-- <!DOCTYPE html>
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

    <title>Home - Snapshot Corporation</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark transparent">
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

    <!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">
      <span>Prosper</span> Your<br>Polaroid <span>Reminiscences</span>
    </h1>
    <a href="/explore" class="button btn btn-primary">Explore</a>
  </div>
</div>

<div class="container mb-5">
  <h1>About us</h1>
  <div class="row">
    <div class="col-lg-4">
      <img src="{{asset("img/register.jpg")}}" alt="" class="img-fluid">
    </div>
    <div class="col-lg-8">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis eius ipsam, optio necessitatibus aspernatur pariatur voluptates sit mollitia eaque porro. Impedit, porro. Aliquid, tempora numquam. Adipisci officiis ipsam aspernatur saepe, distinctio cum, molestias quisquam rerum expedita totam ipsum autem impedit quas repellendus atque, nostrum nulla? Placeat vero, fugiat voluptate cum mollitia laboriosam pariatur ad eligendi culpa perspiciatis rem maxime unde minus blanditiis, fugit sunt ipsam sint delectus laborum nam provident architecto. Corporis temporibus exercitationem quod?</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae sapiente eius molestiae exercitationem mollitia delectus, maiores deserunt magni porro, quibusdam aperiam perspiciatis nulla odio dicta, accusamus eligendi voluptatem architecto libero assumenda magnam maxime soluta doloremque blanditiis amet? Eos quia saepe provident amet perferendis ratione vitae dicta harum non quidem distinctio praesentium, ut modi laboriosam, omnis maiores nihil voluptatibus eaque! Accusantium expedita cumque officia laborum sit reiciendis alias, esse, sunt, explicabo eos sed sapiente minus quod.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, obcaecati accusantium officiis consectetur dicta amet dignissimos quisquam sed iste earum eligendi nemo aliquid nam non atque placeat dolorum tempore enim repellendus dolorem dolores fugiat, ipsam vitae quasi. Excepturi illo necessitatibus saepe commodi nihil odit nostrum natus quis beatae cumque modi vero illum ipsa labore neque non sapiente optio, consequuntur numquam tenetur suscipit doloribus? Vero debitis dolorem repellendus ex rerum, maxime quo optio dolore tempore facere ab nobis consequuntur iusto, ipsa mollitia maiores. Facilis laborum, hic nobis aspernatur iste alias assumenda, saepe eveniet molestiae voluptatum magni tempora labore quasi beatae ipsam?</p>
    </div>
  </div>
</div>




    {{-- @if (Auth::user() && Auth::user()->api_key === null)
    <div class="container text-center mb-5">
      <form action="/dashboard/member" method="post">
        @csrf
        <button type="submit" class="btn btn-primary button">Switch to Developer <i class="fas fa-user-cog"></i></button>
      </form>
    </div>
    @endif --}}

    <footer class="bg-dark py-3 text-center text-light">
      Copyright &copy; 2022 Snapshot Corporation. All rights reserved.
    </footer>
    <!-- JQuery, Popper, Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
