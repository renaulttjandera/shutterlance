{{-- <!DOCTYPE html>
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
</html> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('stylesheet/style.css')}}" />

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />

    <title>Register as {{$role}} | Lagain.Id</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    /* body {
    background-image: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.5));
    } */

    </style>
  </head>
  <body class="bg-primary">
    
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 bg-light mt-5 login mb-5">
      <h2 class="mt-5 mb-3 text-center">Register as {{$role}}</h2>
      <form class="mb-5 mx-3" method="post" action="{{'/register?role=' . $rolenum}}">
        @csrf
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" />
          @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" />
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

        <div class="form-group">
          <label for="password2">Confirm Password</label>
          <input type="password" class="form-control" id="password2" name="password2" value="{{old('password2')}}" />
          @error('password2')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>

        <div class="form-group">
          <p id="agreeHelp" class="form-text text-center text-muted">By clicking register and continue, you accept our <a href="#" class="underline">Terms and Conditions</a>.</p>
        </div>

        <button type="submit" class="button btn btn-primary btn-block mb-3">Register</button>

        <div class="form-group">
          <p id="loginHelp" class="form-text text-center text-muted">Already have an account? Login <a href="{{url('/login')}}" class="underline">here</a>.</p>
        </div>

        @if($rolenum == 0) 
        <div class="form-group">
          <p id="loginHelp" class="form-text text-center text-muted">Want to create photography services? Register as a talent <a href="{{url('/register?role=1')}}" class="underline">here</a>.</p>
        </div>
        @endif

        @if($rolenum == 1)
        <div class="form-group">
          <p id="loginHelp" class="form-text text-center text-muted">Doesn't have an account yet? Register as a customer <a href="{{url('/register?role=0')}}" class="underline">here</a>.</p>
        </div>
        @endif
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
