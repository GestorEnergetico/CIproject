
<?php
$out = '';
foreach ($result as $key => $value) {
  $out .= $key . " - " . $value["name_service"] . "<br/>";
}
echo $out;
?>
