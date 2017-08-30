<a href="/alumnos/new_alumno">Nuevo Alumno</a>
<?php
print_r($result);
$table_data = '';
foreach ($result as $course) {
  $table_data .= '
  <tr>
  <td>'.$course["id_user"].'</td>
  <td><%= reg.email %></td>
  <td><%= reg.name %></td>
  </tr>';
  echo "<a href='/aulas/". $course["id_user"] ."'>" . $course["email_user"] . "</a>";
}

?>
<table id="basic-table">
  <thead>
    <tr>
      <th> Modified </th>
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
