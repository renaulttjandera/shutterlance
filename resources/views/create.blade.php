{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Service - Shutterlance</title>
</head>
<body>
  <h1>Create</h1>
  <form action="/create" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Service Name</label><br>
    <input type="text" name="name" id="name" required value="{{old("name")}}">
    @error("name")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>

    <label for="">Service Description</label><br>
    <textarea type="text" name="description" id="description" required>{{old("description")}}</textarea>
    @error("password")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>

    <label for="">Service Price</label><br>
    Rp
    <input type="text" name="price" id="price" required value="{{old("price")}}">
    @error("price")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>

    <label for="">Photo Samples (Maximum: 5)</label><br>
    <img class="sample1-preview">
    <input type="file" name="sample1" id="sample1" required value="{{old("sample1")}}" onchange="previewImage1()">
    @error("sample1")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>
    <img class="sample2-preview">
    <input type="file" name="sample2" id="sample2" value="{{old("sample2")}}" onchange="previewImage2()">
    @error("sample2")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>
    <img class="sample3-preview">
    <input type="file" name="sample3" id="sample3" value="{{old("sample3")}}" onchange="previewImage3()">
    @error("sample3")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>
    <img class="sample4-preview">
    <input type="file" name="sample4" id="sample4" value="{{old("sample4")}}" onchange="previewImage4()">
    @error("sample4")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>
    <img class="sample5-preview">
    <input type="file" name="sample5" id="sample5" value="{{old("sample5")}}" onchange="previewImage5()">
    @error("sample5")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br>
    <br>

    <label for="">Email Address (Contact)</label><br>
    <input type="email" name="email" id="email" required value="{{old("email")}}">
    @error("email")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>

    <label for="">Phone Number (Contact)</label><br>
    <input type="text" name="phone" id="phone" required value="{{old("phone")}}">
    @error("phone")
    <p style="color: red; display: inline">{{$message}}</p>
    @enderror
    <br><br>
    
    <button type="submit">Create</button><br><br>
    <a href="/dashboard">Back</a>
  </form><br>

  <script>
    function previewImage1() {
      const sample = document.querySelector("#sample1");
      const samplePreview = document.querySelector(".sample1-preview");

      samplePreview.style.display = "block";
      samplePreview.style.width = "300px";
      const ofReader = new FileReader();
      ofReader.readAsDataURL(sample.files[0]);
      ofReader.onload = function(oFREvent) {
        samplePreview.src = oFREvent.target.result;
      }
    }

    function previewImage2() {
      const sample = document.querySelector("#sample2");
      const samplePreview = document.querySelector(".sample2-preview");

      samplePreview.style.display = "block";
      samplePreview.style.width = "300px";
      const ofReader = new FileReader();
      ofReader.readAsDataURL(sample.files[0]);
      ofReader.onload = function(oFREvent) {
        samplePreview.src = oFREvent.target.result;
      }
    }

    function previewImage3() {
      const sample = document.querySelector("#sample3");
      const samplePreview = document.querySelector(".sample3-preview");

      samplePreview.style.display = "block";
      samplePreview.style.width = "300px";
      const ofReader = new FileReader();
      ofReader.readAsDataURL(sample.files[0]);
      ofReader.onload = function(oFREvent) {
        samplePreview.src = oFREvent.target.result;
      }
    }

    function previewImage4() {
      const sample = document.querySelector("#sample4");
      const samplePreview = document.querySelector(".sample4-preview");

      samplePreview.style.display = "block";
      samplePreview.style.width = "300px";
      const ofReader = new FileReader();
      ofReader.readAsDataURL(sample.files[0]);
      ofReader.onload = function(oFREvent) {
        samplePreview.src = oFREvent.target.result;
      }
    }

    function previewImage5() {
      const sample = document.querySelector("#sample5");
      const samplePreview = document.querySelector(".sample5-preview");

      samplePreview.style.display = "block";
      samplePreview.style.width = "300px";
      const ofReader = new FileReader();
      ofReader.readAsDataURL(sample.files[0]);
      ofReader.onload = function(oFREvent) {
        samplePreview.src = oFREvent.target.result;
      }
    }
  </script>
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

    <title>Create Service - Snapshot Corporation</title>
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
<div class="create mt-3 mb-5 page">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mb-3">Create Service</h1>
        <form method="post" action="/create" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Service Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="description">Service Description <span class="text-danger">*</span></label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="validationDefaultUsername">Price <span class="text-danger">*</span></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
              </div>
              <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
              @error('price')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="sample1">Photo Sample #1 <span class="text-danger">*</span></label>
            <img class="sample1-preview">
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('sample1') is-invalid @enderror" id="sample1" name="sample1" onchange="previewImage1()">
              <label class="custom-file-label" for="customFile">Choose file</label>
              @error('sample1')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="sample2">Photo Sample #2</label>
            <img class="sample2-preview">
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('sample2') is-invalid @enderror" id="sample2" name="sample2" onchange="previewImage2()">
              <label class="custom-file-label" for="customFile">Choose file</label>
              @error('sample2')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="sample3">Photo Sample #3</label>
            <img class="sample3-preview">
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('sample3') is-invalid @enderror" id="sample3" name="sample3" onchange="previewImage3()">
              <label class="custom-file-label" for="customFile">Choose file</label>
              @error('sample3')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="sample4">Photo Sample #4</label>
            <img class="sample4-preview">
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('sample4') is-invalid @enderror" id="sample4" name="sample4" onchange="previewImage4()">
              <label class="custom-file-label" for="customFile">Choose file</label>
              @error('sample4')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="sample5">Photo Sample #5</label>
            <img class="sample5-preview">
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('sample5') is-invalid @enderror" id="sample5" name="sample5" onchange="previewImage5()">
              <label class="custom-file-label" for="customFile">Choose file</label>
              @error('sample5')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address (Contact) <span class="text-">*</span></label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="phone">Phone Number (Contact) <span class="text-">*</span></label>
            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{old('phone')}}">
            @error('phone')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          
          
          <button type="submit" class="btn btn-primary">Create Service <i class="fas fa-plus"></i></button>
        </form>
        </div>
      </div>
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

<script>
  $(document).on('change', '.custom-file-input', function (event) {
$(this).next('.custom-file-label').html(event.target.files[0].name);
})
</script>

<script>
  function previewImage1() {
    const sample = document.querySelector("#sample1");
    const samplePreview = document.querySelector(".sample1-preview");

    samplePreview.style.display = "block";
    samplePreview.style.width = "300px";
    const ofReader = new FileReader();
    ofReader.readAsDataURL(sample.files[0]);
    ofReader.onload = function(oFREvent) {
      samplePreview.src = oFREvent.target.result;
    }
  }

  function previewImage2() {
    const sample = document.querySelector("#sample2");
    const samplePreview = document.querySelector(".sample2-preview");

    samplePreview.style.display = "block";
    samplePreview.style.width = "300px";
    const ofReader = new FileReader();
    ofReader.readAsDataURL(sample.files[0]);
    ofReader.onload = function(oFREvent) {
      samplePreview.src = oFREvent.target.result;
    }
  }

  function previewImage3() {
    const sample = document.querySelector("#sample3");
    const samplePreview = document.querySelector(".sample3-preview");

    samplePreview.style.display = "block";
    samplePreview.style.width = "300px";
    const ofReader = new FileReader();
    ofReader.readAsDataURL(sample.files[0]);
    ofReader.onload = function(oFREvent) {
      samplePreview.src = oFREvent.target.result;
    }
  }

  function previewImage4() {
    const sample = document.querySelector("#sample4");
    const samplePreview = document.querySelector(".sample4-preview");

    samplePreview.style.display = "block";
    samplePreview.style.width = "300px";
    const ofReader = new FileReader();
    ofReader.readAsDataURL(sample.files[0]);
    ofReader.onload = function(oFREvent) {
      samplePreview.src = oFREvent.target.result;
    }
  }

  function previewImage5() {
    const sample = document.querySelector("#sample5");
    const samplePreview = document.querySelector(".sample5-preview");

    samplePreview.style.display = "block";
    samplePreview.style.width = "300px";
    const ofReader = new FileReader();
    ofReader.readAsDataURL(sample.files[0]);
    ofReader.onload = function(oFREvent) {
      samplePreview.src = oFREvent.target.result;
    }
  }
</script>
</body>
</html>
