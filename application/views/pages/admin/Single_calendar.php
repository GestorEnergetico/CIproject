<?php

// by default year
$anio='';
foreach ($years as $year) {
  $url = "/". $this->uri->uri_string() . "/" .$year["year_edition"];
  $anio .= "<li><a href='".$url."'>".$year["year_edition"]."</a></li>";
}

//editions when year exists
$edition = '';
if($editions){
  foreach ($editions as $e) {
    $v_url = "/". $this->uri->uri_string() . "/" .$e["id_edition"];
    $v_name = $e["year_edition"] ."-". $e["month_edition"] ." ". $e["name_service"];
    $edition .= "<li><a href='".$v_url."'>".$v_name."</a></li>";
  }
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
      <?php echo $edition; ?>
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
