<a href="/alumnos/create">Nuevo Alumno</a>
<?php
$out = '';
foreach ($result as $key => $value) {
  $out .= $key . " - " . $value["email_user"] . "<br/>";
}
echo $out;
?>
