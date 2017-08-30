<a href="/alumnos/new_alumno">Nuevo Alumno</a>
<?php
// print_r($result);
$table_data = '';
foreach ($result as $user) {
  $table_data .= '
  <tr>
  <td class="hidden">'.$user["modified_at"].'</td>
  <td>'.'<img src="'.profile_image($user["photo_user"]).'" alt="'.$user["photo_user"].'">'.'</td>
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
