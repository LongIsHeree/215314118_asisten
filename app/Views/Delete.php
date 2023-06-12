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
            <h1> Penghapusan Asisten Praktikum </h1> <br>
          </div>
          <form action="/AsistenController/hapus" method="post">
             <?= csrf_field() ?>
            <div class="mb-3">
                <br>
                <label for="Kegiatan" class="form-label">NIM : </label>
                <input type="text" class="form-control" id="nim"name="nim"><br>
            </form>   
            <input type="submit" name="" value="Delete" />        
              </div>
            </body>
    </html>