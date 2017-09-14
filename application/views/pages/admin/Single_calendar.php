<?php

// by default year
$anio='';
foreach ($years as $year) {
  $anio .= "<li><a href='#'>".$year["year_edition"]."</a></li>";
}



?>
<div class="row single_calendar ">
  <div class="col-sm-3">
    <ul class="anio">
      <li>
        <h3>Años</h3>
      </li>
      <?php echo $anio; ?>
    </ul>
  </div>

  <div class="col-sm-4">
    <ul class="edition">
      <li>
        <h3>Edicion</h3>
      </li>
      <?php echo $editions; ?>
    </ul>
  </div>

  <div class="col-sm-4">
    <ul class="course">
      <li>
        <h3>Aula</h3>
      </li>
      <?php echo $courses; ?>
    </ul>
  </div>
</div>
