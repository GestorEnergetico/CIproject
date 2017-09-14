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
    $url = "/". $this->uri->uri_string() . "/" .$e["id_edition"];
    $edition .= "<li><a href='".$url."'>".$e["name_service"]."</a></li>";
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
