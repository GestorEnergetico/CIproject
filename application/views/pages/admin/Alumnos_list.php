<a href="/alumnos/new_alumno">Nuevo Alumno</a>
<?php
$out = '';
foreach ($result as $key => $value) {
  $out .= $value["id_user"] . " - " . $value["email_user"] . "<br/>";
}
echo $out;
?>
