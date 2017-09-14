<?php

$out='';
// print_r($years);
foreach ($years as $year) {
  $out .= "<li>".$year["year_edition"]."</li>";
}

?>
<div class="single_calendar">
  <ul class="anio">
    <?php echo $out; ?>
  </ul>
</div>
