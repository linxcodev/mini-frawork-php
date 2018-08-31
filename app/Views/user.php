<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Daftar User</h1>
    <ul>
      <?php foreach ($data['users'] as $user): ?>
        <li><?= $user["nama"] ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
