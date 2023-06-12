<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
      rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <?= $this->section('content');?>
      <body>
        <div class="container mt-3"> 
          <div class="mt-4 p-5 "
          style = "background-color : burlywood  ;">
     <center><h1 >Cari Asisten Praktikum</h1></center>
</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
    <form action = "/AsistenController/search" method = "post">
        <?= csrf_field()?>
        <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input class="form-control" id="key" name = "key" >
  </div>
        <button type="submit" class="btn btn-primary">Cari</button>
</form>
<?php 
if(!empty($hasil)){
    echo"<h2> Hasil Pencarian</h2>";
    echo"Nama : ". $hasil['nama'];
    echo"<br> Praktikum : " . $hasil['praktikum'];
    echo"<br>IPK : " . $hasil['ipk'];
}
?>
</div>

<?= $this->endSection();?>