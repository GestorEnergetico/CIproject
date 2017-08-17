<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alumnos</title>
  </head>
  <body>
    <?php
    $out = '';
      foreach ($result as $key => $value) {
        $out .= $key . " - " . $value["username_users"] . "<br/>";
      }
      echo $out;
    ?>
  </body>
</html>
