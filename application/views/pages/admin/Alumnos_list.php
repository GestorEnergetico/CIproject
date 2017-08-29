<a href="/alumnos/new_alumno">Nuevo Alumno</a>

<?php
echo "<ol>";
foreach ($result as $course) {
  echo "<li>";
  echo "<a href='/aulas/". $course["id_user"] ."'>" . $course["email_user"] . "</a>";
  echo "</li>";
}
echo "</ol>";
