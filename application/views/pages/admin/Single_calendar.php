<?php

$out='';
// print_r($years);
foreach ($years as $year) {
  $out .= "<li>".$year["year_edition"]."</li>";
}

?>
<div class="row single_calendar ">
  <div class="col-sm-4">
    <ul class="anio">
      <li>
        <h3>Años</h3>
      </li>
      <?php echo $out; ?>
    </ul>
  </div>
</div>
