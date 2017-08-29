
<?php
echo "<ol>";
foreach ($result as $course) {
  echo "<li>";
  echo "<a href='/calendar/". $course["id_calendar"] ."'>" . $course["name_calendar"] . "</a>";
  echo "</li>";
}
echo "</ol>";
