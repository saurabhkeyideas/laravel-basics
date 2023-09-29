

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="align-items: center;">
  <a class="navbar-brand" href="#" style="color: white;">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}" style="color: white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}" style="color: white;">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/customer/view')}}" style="color: white;">Customer</a>
      </li>
      
    </ul>
  </div>
</nav>


      <div class="container">
        <a href="{{route('customer.create')}}"> 
            <!-- another method to define url path -->
        <button class="btn btn-primary d-inline-block m-2 float-right">Add Customer</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                         @if($customer->gender=="M")
                        Male
                        @elseif($customer->gender=="F")
                        Female
                        @else
                        Other  
                        @endif
                    </td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if($customer->status=="1")
                        <button class="btn">
                            <span class="badge badge-success">  Active</span>
                        </button>
                      
                        @else
                        <button class="btn">
                            <span class="badge badge-danger">  Inactive</span>
                        </button>
                        @endif
                    </td>
                    <td>
                    <a href="{{url('/customer/delete/')}}/{{$customer->id}}">   
                    <button class="btn btn-danger">Delete</button></td>
                    </a> 
                    <td>
                    <a href="{{url('/customer/delete/')}}/{{$customer->id}}">   
                    <button class="btn btn-primary">Edit</button></td>
                    </a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
   
  </body>
</html>