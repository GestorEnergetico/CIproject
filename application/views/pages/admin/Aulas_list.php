<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aulas</title>
  </head>
  <body>
    <?php
    $out = '';
      foreach ($result as $key => $value) {
        $out .= $key . " - " . $value["id_aula"] . "<br/>";
      }
      echo $out;
    ?>
  </body>
</html>
