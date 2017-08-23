<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>settings services</title>
  </head>
  <body>
    <?php
    $out = '';
      foreach ($result as $key => $value) {
        $out .= $key . " - " . $value["name_service"] . "<br/>";
      }
      echo $out;
    ?>
  </body>
</html>
