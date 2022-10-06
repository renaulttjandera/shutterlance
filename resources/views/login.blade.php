{{-- <!DOCTYPE html>
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
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="{{asset('stylesheet/css/main.css')}}"> --}}


    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('stylesheet/style.css')}}" />

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />

    <title>Login - Shutterlance</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      /* body {
      background-image: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.5));
      min-height: 100vh;
      } */
  
      </style>
  </head>
  <body class="bg-primary">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 bg-light mt-5 login mb-5 rounded">
      <h2 class="mt-5 mb-3 text-center">Login</h2>
      <form class="mb-5 mx-3" method="post" action="{{url('login')}}">
        @csrf
        @if (session('fail'))
        <div class="alert alert-danger" role="alert">
          {{session('fail')}}
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success" role="alert">
          {{session('success')}}
        </div>
        @endif
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}"  />
          @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
         @enderror
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{old('password')}}" />
          @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
        </div>

        <button type="submit" class="button btn btn-primary btn-block mb-3">Login</button>

        <div class="form-group">
          <p id="loginHelp" class="form-text text-center text-muted">Doesn't have an account yet? Register as a customer <a href="{{url('/register?role=0')}}" class="underline">here</a>.</p>
        </div>

        <div class="form-group">
          <p id="loginHelp" class="form-text text-center text-muted">Want to create photography services? Register as a talent <a href="{{url('/register?role=1')}}" class="underline">here</a>.</p>
        </div>
      </form>
    </div>
  </div>
</div>
    <!-- JQuery, Popper, Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>