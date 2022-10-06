{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard - Shutterlance</title>
  <style>
    th, td {
      padding: 15px;
    }

    table, th, td {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <h1>Dashboard</h1>
  <h2>Welcome, {{Auth::user()->name}}</h2>

  @if (Auth::user()->role == 1 && Auth::user()->status == 1) 
<p>Mampus acc mu direject!!!</p>
  @endif
  
  @if (session('success'))
       <p style="color: green;">{{ session('success') }}</p>
@endif

@if(Auth::user()->role == 1 && Auth::user()->info == 0)
<form action="/info" method="post" enctype="multipart/form-data">
  @csrf
  <label for="">Freelancer's Description (Max: 1000 characters)</label><br>
  <textarea type="text" name="description" id="description" required  value="{{old("description")}}"></textarea>
  @error("description")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
  <label for="">School/University/Institute</label><br>
  <input type="text" name="school" id="school" required value="{{old("school")}}">
  @error("school")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
<br><br>
    <label for="">Birthdate</label><br>
  <input type="date" name="birthdate" id="birthdate" required value="{{old("birthdate")}}">
  @error("birthdate")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
  <label for="">CV (PDF Version, Max: 10 MB)</label><br>
  <input type="file" name="cv" id="cv" required value="{{old("cv")}}">
  @error("cv")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
  <label for="">Portfolio (PDF Version, Max: 10 MB)</label><br>
  <input type="file" name="portfolio" id="portfolio" required  value="{{old("portfolio")}}">
  @error("portfolio")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
  <label for="">Letter (PDF Version, Max: 10 MB)</label><br>
  <a href="">Download Letter and Sign</a><br><br>
  <input type="file" name="mou" id="mou" required  value="{{old("mou")}}">
  @error("mou")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
  <button type="submit">Save</button><br><br>
</form>

@endif

@if(Auth::user()->role == 1 && Auth::user()->status == 1)

<a href="/create">Create Service</a><br>

@endif
<h1>Order List</h1>
@if (Auth::user()->role == 1)
<table>
  <tr>
    <th>No</th>
    <th>Service Name</th>
    <th>Customer Name</th>
    <th>Customer Email Address</th>
    <th>Order Time</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  @foreach ($orders as $order)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$order->service_name}}</td>
    <td>{{$order->customer_name}}</td>
    <td>{{$order->customer_email}}</td>
    <td>{{$order->created_at}}</td>
    <td>@if($order->status == 0)Running @endif @if($order->status == 1)Finished @endif</td>
    <td>
      @if ($order->status == 0)
      <form action="/finishorder" method="post">
        @csrf
        <input type="hidden" name="order_id" value="{{$order->id}}">
        <button type="submit">Finish Order</button>
      </form>
      @endif
    </td>
  </tr>
  @endforeach
</table>

<h1>Services List</h1>
<table>
  <tr>
    <th>No</th>
    <th>Service Name</th>
    <th>Service Price</th>
    <th>Photo Sample #1</th>
    <th>Photo Sample #2</th>
    <th>Photo Sample #3</th>
    <th>Photo Sample #4</th>
    <th>Photo Sample #5</th>
    <th>Actions</th>
  </tr>
  @foreach ($services as $service)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$service->name}}</td>
    <td>Rp{{$service->price}}</td>
    <td><img src="{{asset("storage/" . $service->sample1)}}" alt="" width="100"></td>
    <td><img src="{{asset("storage/" . $service->sample2)}}" alt="" width="100"></td>
    <td><img src="{{asset("storage/" . $service->sample3)}}" alt="" width="100"></td>
    <td><img src="{{asset("storage/" . $service->sample4)}}" alt="" width="100"></td>
    <td><img src="{{asset("storage/" . $service->sample5)}}" alt="" width="100"></td>
    <td>
      <a href="/services/{{$service->id}}">Details</a><br><br>
      <a href="/services/edit/{{$service->id}}">Edit</a><br><br>
      <form action="/services" method="post">
        @method('delete')
        @csrf
        <input type="hidden" name="id" value="{{$service->id}}">
        <button type="submit" onClick="return confirm('yakin deck?')">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endif

@if (Auth::user()->role == 0)
<table>
  <tr>
    <th>No</th>
    <th>Service Name</th>
    <th>Freelancer Name</th>
    <th>Freelancer Email Address</th>
    <th>Order Time</th>
    <th>Status</th>
  </tr>
  @foreach ($orders as $order)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$order->service_name}}</td>
    <td>{{$order->freelancer_name}}</td>
    <td>{{$order->freelancer_email}}</td>
    <td>{{$order->created_at}}</td>
    <td>@if($order->status == 0)Running @endif @if($order->status == 1)Finished @endif</td>
  </tr>
  @endforeach
</table>
@endif

<br><br>
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

    <title>Dashboard - Snapshot Corporation</title>
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

    <div class="create mt-3 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <h1>Dashboard</h1>
            <h1 class="display-4 mb-3">Welcome, {{Auth::user()->name}}!</h1>
            
            @if(Auth::user()->role==1 && Auth::user()->info == 1 && Auth::user()->status == 2)
            <a href="/create" class="btn btn-primary mb-3">Create Service <i class="fas fa-plus"></i></a>
            @endif
            @if(Auth::user()->role== 1 && Auth::user()->info == 0)
            
            
            @endif
          {{-- </div> --}}
          </div>
        </div>
        @if (Auth::user()->role == 1 && Auth::user()->status == 1) 
            <div class="alert alert-danger" role="alert">
              Mampussy! Acc mu direject!!
            </div>
  @endif
            @if (session('success'))
        <div class="alert alert-success" role="alert">
          {{session('success')}}
        </div>
        @endif
        <div class="row">
          <div class="col">
            <form method="post" action="/info" enctype="multipart/form-data">
              @csrf
              {{-- </div> --}}
              <div class="form-group">
                <label for="description">Talent's Description <span class="text-danger">*</span></label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              
              <div class="form-group">
                <label for="school">School/University/Institute <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('school') is-invalid @enderror" id="school" name="school" value="{{old('school')}}">
                @error('school')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
    
              <div class="form-group">
                <label for="birthdate">Birthdate <span class="text-danger">*</span></label>
                <input type="date" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate" name="birthdate" value="{{old('birthdate')}}">
                @error('birthdate')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
    
              <div class="form-group">
                <label for="cv">CV (PDF Version, Max: 10 MB) <span class="text-danger">*</span></label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input @error('cv') is-invalid @enderror" id="customFile" name="cv">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  @error('cv')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="portfolio">Portfolio (PDF Version, Max: 10 MB) <span class="text-danger">*</span></label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input @error('portfolio') is-invalid @enderror" id="customFile" name="portfolio">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  @error('portfolio')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="mou">Memorandum of Understanding (PDF Version, Max: 10 MB) <span class="text-danger">*</span></label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input @error('mou') is-invalid @enderror" id="customFile" name="mou">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  @error('mou')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Save Information</button>
              {{-- <form action="/info" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Freelancer's Description (Max: 1000 characters)</label><br>
                <textarea type="text" name="description" id="description" required  value="{{old("description")}}"></textarea>
                @error("description")
                  <p style="color: red; display: inline">{{$message}}</p>
                  @enderror
                  <br><br>
                <label for="">School/University/Institute</label><br>
                <input type="text" name="school" id="school" required value="{{old("school")}}">
                @error("school")
                  <p style="color: red; display: inline">{{$message}}</p>
                  @enderror
              <br><br>
                  <label for="">Birthdate</label><br>
                <input type="date" name="birthdate" id="birthdate" required value="{{old("birthdate")}}">
                @error("birthdate")
                  <p style="color: red; display: inline">{{$message}}</p>
                  @enderror
                  <br><br>
                <label for="">CV (PDF Version, Max: 10 MB)</label><br>
                <input type="file" name="cv" id="cv" required value="{{old("cv")}}">
                @error("cv")
                  <p style="color: red; display: inline">{{$message}}</p>
                  @enderror
                  <br><br>
                <label for="">Portfolio (PDF Version, Max: 10 MB)</label><br>
                <input type="file" name="portfolio" id="portfolio" required  value="{{old("portfolio")}}">
                @error("portfolio")
                  <p style="color: red; display: inline">{{$message}}</p>
                  @enderror
                  <br><br>
                <label for="">Letter (PDF Version, Max: 10 MB)</label><br>
                <a href="">Download Letter and Sign</a><br><br>
                <input type="file" name="mou" id="mou" required  value="{{old("mou")}}">
                @error("mou")
                  <p style="color: red; display: inline">{{$message}}</p>
                  @enderror
                  <br><br>
                <button type="submit">Save</button><br><br>
              </form> --}}
              
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      
      <h1>Orders List</h1>
      @if (Auth::user()->role == 1)
<table class="table table-hover mb-5">
  <thead class="thead-primary">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Service Name</th>
    <th scope="col">Customer Name</th>
    <th scope="col">Customer Email Address</th>
    <th scope="col">Order Time</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
  @foreach ($orders as $order)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$order->service_name}}</td>
    <td>{{$order->customer_name}}</td>
    <td>{{$order->customer_email}}</td>
    <td>{{$order->created_at}}</td>
    <td>@if($order->status == 0)Running @endif @if($order->status == 1)Finished @endif</td>
    <td>
      @if ($order->status == 0)
      <form action="/finishorder" method="post">
        @csrf
        <input type="hidden" name="order_id" value="{{$order->id}}">
        <button type="submit" class="btn btn-primary">Finish Order</button>
      </form>
      @endif
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

<h1>Services List</h1>
<table class="table table-hover mb-5">
  <thead class="thead-primary">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Service Name</th>
    <th scope="col">Service Price</th>
    <th scope="col">Sample #1</th>
    <th scope="col">Sample #2</th>
    <th scope="col">Sample #3</th>
    <th scope="col">Sample #4</th>
    <th scope="col">Sample #5</th>
    <th scope="col">Actions</th>
  </tr>
</thead>
<tbody>
  @foreach ($services as $service)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$service->name}}</td>
    <td>Rp{{$service->price}}</td>
    <td>@if($service->sample1)<img src="{{asset("storage/" . $service->sample1)}}" alt="" width="100">@endif</td>
    <td>@if($service->sample2)<img src="{{asset("storage/" . $service->sample2)}}" alt="" width="100">@endif</td>
    <td>@if($service->sample3)<img src="{{asset("storage/" . $service->sample3)}}" alt="" width="100">@endif</td>
    <td>@if($service->sample4)<img src="{{asset("storage/" . $service->sample4)}}" alt="" width="100">@endif</td>
    <td>@if($service->sample5)<img src="{{asset("storage/" . $service->sample5)}}" alt="" width="100">@endif</td>
    <td>
      <a href="/services/{{$service->id}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a><br><br>
      <a href="/services/edit/{{$service->id}}" class="btn btn-warning"><i class="fas fa-edit"></i></a><br><br>
      <form action="/services" method="post">
        @method('delete')
        @csrf
        <input type="hidden" name="id" value="{{$service->id}}">
        <button type="submit" onClick="return confirm('yakin deck?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endif

@if (Auth::user()->role == 0)
<table class="table table-hover mb-5">
  <thead class="thead-primary">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Service Name</th>
    <th scope="col">Freelancer Name</th>
    <th scope="col">Freelancer Email Address</th>
    <th scope="col">Order Time</th>
    <th scope="col">Status</th>
  </tr>
</thead>
<tbody>
  @foreach ($orders as $order)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$order->service_name}}</td>
    <td>{{$order->freelancer_name}}</td>
    <td>{{$order->freelancer_email}}</td>
    <td>{{$order->created_at}}</td>
    <td>@if($order->status == 0)Running @endif @if($order->status == 1)Finished @endif</td>
  </tr>
  @endforeach
</tbody>
</table>
@endif
    </div>

    <footer class="bg-dark py-3 text-center text-light">
      Copyright &copy; 2022 Snapshot Corporation. All rights reserved.
    </footer>
    
    <!-- JQuery, Popper, Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
      $(document).on('change', '.custom-file-input', function (event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
})
  </script>
  </body>
</html>
