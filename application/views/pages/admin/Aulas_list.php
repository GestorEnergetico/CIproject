
<?php
$out = '';
foreach ($result as $key => $value) {
  $out .= $key . " - " . $value["id_aula"] . "<br/>";
}
echo $out;
?>
