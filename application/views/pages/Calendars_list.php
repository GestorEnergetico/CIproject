
<?php
echo "<ol>";
foreach ($result as $course) {
  echo "<li>";
  echo "<a href='/aulas/". $course["id_calendar"] ."'>" . $course["name_calendar"] . "</a>";
  echo "</li>";
}
echo "</ol>";
echo $course["name_module"];
