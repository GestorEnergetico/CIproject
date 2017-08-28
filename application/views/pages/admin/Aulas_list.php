
<?php
echo "<ol>";
foreach ($result as $course) {
  echo "<li>";
  echo "<a href='/aulas/.$course["id_aula"]'>".$course["name_module"]."</a>";
  echo "</li>";
}
echo "</ol>";
?>
