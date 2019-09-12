<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>{{ $nama }}</h1>
    <h2>
      <ul>
        <?php foreach ($jodoh as $a): ?>
          <li>{{ $a }}</li>
        <?php endforeach; ?>
      </ul>
    </h2>
  </body>
</html>
