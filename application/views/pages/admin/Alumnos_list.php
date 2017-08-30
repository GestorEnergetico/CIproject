<a href="/alumnos/new_alumno">Nuevo Alumno</a>
<?php
print_r($result);
$table_data = '';
foreach ($result as $course) {
  $table_data .= '
  <tr>
  <td class="hidden">'.$course["modified_at"].'</td>
  <td>'.'-'.'</td>
  <td>'.'-'.'</td>
  <td>'.'-'.'</td>
  <td>'.'-'.'</td>
  <td>'.'-'.'</td>
  <td>'.'-'.'</td>
  <td>'.'-'.'</td>
  </tr>';
}

?>
<table id="basic-table">
  <thead>
    <tr>
      <th class="hidden"> Modified </th>
      <th> Imagen </th>
      <th> Nombre </th>
      <th> Correo Electrónico </th>
      <th> Notas </th>
      <th> Contacto </th>
      <th> Pais </th>
      <th> Opciones </th>
    </tr>
  </thead>
  <tbody>
    <?php echo $table_data; ?>
  </tbody>
</table>
