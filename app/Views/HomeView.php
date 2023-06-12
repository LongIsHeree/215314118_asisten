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
          style = "background-color : Chartreuse  ;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Data Mahasiswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/AsistenController/home">Home</a>
      </li>
      <li class="nav-item">
      <li><a class="nav-link" href="/AsistenController/login">Login</a></li>
        <li><a class="nav-link" href="/AsistenController/simpan">Tambah Data</a></li>
          <a class="nav-link" href="/AsistenController/ubah">Update Data</a>
          <a class="nav-link" href="/AsistenController/hapus">Delete Data</a>
      </li>
        <form class="d-flex justify-content-center" action = "/AsistenController/HomeView" method ="post">
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button type="button" class="btn btn-warning">Search</button>
    </form>
  </div>
</nav>
</body>
</html>