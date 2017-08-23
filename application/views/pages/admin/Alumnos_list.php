
<?php
$out = '';
foreach ($result as $key => $value) {
  $out .= $key . " - " . $value["username_users"] . "<br/>";
}
echo $out;
?>
