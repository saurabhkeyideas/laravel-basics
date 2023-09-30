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
  <a class="navbar-brand" href="{{url('/')}}" style="color: white;">AccessWithLogin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/upload')}}" style="color: white;">File Upload <span class="sr-only">(current)</span></a>
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


      <form method="post" enctype="multipart/form-data" action="{{url('/upload')}}">
        @csrf
    <div class="container">
        <div class="form-group mt-2">
      <label for="">File</label>
      <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
      <!-- <small id="fileHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <button class="btn btn-primary">Upload</button>
    </div>
    </form>
  </body>
</html>