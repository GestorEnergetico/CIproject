
    <?php
    $out = '';
      foreach ($result as $key => $value) {
        $out .= $key . " - " . $value["id_edition"] . "<br/>";
      }
      echo $out;
    ?>
