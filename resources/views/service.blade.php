<!DOCTYPE html>
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
</html>