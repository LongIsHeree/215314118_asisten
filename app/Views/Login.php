<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
      rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
      <body>
        <div class="container mt-3"> 
          <div class="mt-4 p-5 "
          style = "background-color : burlywood  ;">  
<center>  <h1 >Silahkan Login Terlebih Dahulu </h1></center>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
<form action="/AsistenController/check" method = "post">
    <?= csrf_field()?>
    <div class="mb-3">
    <label for="usr" class="form-label">User :</label>
    <input class="form-control" id="username" name = "username" >
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password :</label>
    <input class="form-control" id="password" name = "password" >
  </div>
  <button type="submit" class="btn btn-primary" name = "submit" value = "login">Submit</button>
</form>
</div>