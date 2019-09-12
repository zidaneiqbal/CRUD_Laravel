<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/form/isi" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

      Nama      : <input type="text" name="nama" value=""> <br>
      Kelas     : <input type="text" name="kelas" value=""> <br>
      Angkatan  : <input type="number" name="angkatan" value=""> <br>
      <input type="submit" name="" value="SUBMIT">
    </form>
  </body>
</html>
