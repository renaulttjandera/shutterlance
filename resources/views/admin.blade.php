<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin - Shutterlance</title>
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
  <h1>Admin Dashboard</h1>
  @if (session('success'))
       <p style="color: green;">{{ session('success') }}</p>
@endif
  <h2>User Info</h2>
  <table>
    <tr>
      <th>No</th>
      <th>Full Name</th>
      <th>Email Address</th>
      <th>Description</th>
      <th>School/University/Institute</th>
      <th>Birthdate</th>
      <th>CV</th>
      <th>Portfolio</th>
      <th>MoU</th>
      <th>Action</th>
    </tr>
    @foreach($infos as $info)
    @if ($info->user->status != 2 && $info->user->info == 1)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$info->user->name}}</td>
      <td>{{$info->user->email}}</td>
      <td>{{$info->description}}</td>
      <td>{{$info->school}}</td>
      <td>{{$info->birthdate}}</td>
      <td><a href="{{asset('storage/' . $info->cv)}}">CV</a></td>
      <td><a href="{{asset('storage/' . $info->portfolio)}}">Portfolio</a></td>
      <td><a href="{{asset('storage/' . $info->mou)}}">MoU</a></td>
      <td>
        <form action="/accept" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$info->user_id}}">
        <button type="submit">Accept</button>
        </form><br>
        <form action="/reject" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$info->user_id}}">
          <input type="hidden" name="info_id" value="{{$info->id}}">
          <button type="submit">Reject</button>
          </form>
      </td>
    </tr>
    @endif
    @endforeach
  </table>

  <h2>Service Info</h2>
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
    </tr>
    @endforeach
  </table>

  <h2>Order Info</h2>
  <table>
    <tr>
      <th>No</th>
      <th>Service Name</th>
      <th>Freelancer Name</th>
      <th>Freelancer Email</th>
      <th>Customer Name</th>
      <th>Customer Email Address</th>
      <th>Order Time</th>
      <th>Status</th>
    </tr>
    @foreach ($orders as $order)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$order->service_name}}</td>
      <td>{{$order->freelancer_name}}</td>
      <td>{{$order->freelancer_email}}</td>
      <td>{{$order->customer_name}}</td>
      <td>{{$order->customer_email}}</td>
      <td>{{$order->created_at}}</td>
      <td>@if($order->status == 0)Running @endif @if($order->status == 1)Finished @endif</td>
    </tr>
    @endforeach
  </table>

  <br><br>
<form action="/logout" method="post">
  @csrf
  <button type="submit">Logout</button>
</form>
</body>
</html>