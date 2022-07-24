<!DOCTYPE html>
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
</html>