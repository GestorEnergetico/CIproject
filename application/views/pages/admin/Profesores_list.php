<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profes</title>
  </head>
  <body>
    <?php
    $out = '';
      foreach ($result as $key => $value) {
        $out .= $key . " - " . $value["fk_id_people_profile"] . "<br/>";
      }
      echo $out;
    ?>
  </body>
</html>
