<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>settings editions</title>
  </head>
  <body>
    <?php
    $out = '';
      foreach ($result as $key => $value) {
        $out .= $key . " - " . $value["id_edition"] . "<br/>";
      }
      echo $out;
    ?>
  </body>
</html>
