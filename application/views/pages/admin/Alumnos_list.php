
<?php
$out = '';
foreach ($result as $key => $value) {
  $out .= $key . " - " . $value["email_users"] . "<br/>";
}
echo $out;
?>
