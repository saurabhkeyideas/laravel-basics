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
  <form action="{{url('/')}}/customer" method="post">
    @csrf
   <div class="container">
  <h2 class="text-center text-primary">Customer Registration</h2>
  <div class="row ">
   <div class="form-group">
     <label for="">Name</label>
     <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <!-- <small id="helpId" class="text-muted">Help text</small> -->
   </div>
   <div class="form-group">
     <label for="">Email</label>
     <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <!-- <small id="helpId" class="text-muted">Help text</small> -->
   </div>
   </div>
   <div class="row">
   <div class="form-group">
     <label for="">Password</label>
     <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <!-- <small id="helpId" class="text-muted">Help text</small> -->
   </div>
   <div class="form-group">
     <label for="">Country</label>
     <input type="text" name="country" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <!-- <small id="helpId" class="text-muted">Help text</small> -->
   </div>
</div>
<div class="row">
   <div class="form-group">
     <label for="">State</label>
     <input type="text" name="state" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <!-- <small id="helpId" class="text-muted">Help text</small> -->
   </div>
   <div class="form-group">
     <label for="">Address</label>
     <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <!-- <small id="helpId" class="text-muted">Help text</small> -->
   </div>
</div>
<div class="row">
   <div class="form-group">
     <label for="">Gender</label>
     <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<!-- <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Other
  </label>
</div> -->
   </div>
   </div>

   <div class="row">
   <div class="form-group">
     <label for="">Date of birth</label>
     <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <!-- <small id="helpId" class="text-muted">Help text</small> -->
   </div>
   </div>

   <button class="btn btn-primary">
    Submit
   </button>
   </div>

</form>
    
  </body>
</html>