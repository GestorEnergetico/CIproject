<?php
$out = '';
foreach ($result as $key => $value) {
  $out .= "<a href='/profesores/'".$value["id_user"] . "> ".$value["id_user"] ."  - " . $value["email_user"] . "</a><br/>";
}
echo $out;
?>
