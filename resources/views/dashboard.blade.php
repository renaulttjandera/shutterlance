<!DOCTYPE html>
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
</html>