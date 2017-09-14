<?php

// by default year
$o_anio='';
foreach ($years as $e) {
  $v_url = "/". $this->uri->uri_string();
  if($this->uri->total_segments()<2){
    $v_url = "/". $this->uri->uri_string() . "/" .$e["year_edition"];
  }
  $o_anio .= "<li><a href='".$v_url."'>".$e["year_edition"]."</a></li>";
}

//editions when year exists
$o_edition = '';
if($editions){
  foreach ($editions as $e) {
    $v_url = "/". $this->uri->segment(1)."/". $this->uri->segment(2)."/". $this->uri->segment(3);
    if($this->uri->total_segments()<3){
      $v_url = "/". $this->uri->segment(1) . "/" .$e["id_edition"];
    }
    $v_name = $e["year_edition"] ."-". $e["month_edition"] ." ". $e["name_service"];
    $o_edition .= "<li><a href='".$v_url."'>".$v_name."</a></li>";
  }
}

//courses when editions exists
$o_course = '';
if($courses){
  foreach ($courses as $e) {
    $v_url = "/". $this->uri->uri_string();
    if($this->uri->total_segments()<4){
      $v_url = "/". $v_url . "/" .$e["id_edition"];
    }
    $v_name = 'course';
    $o_course .= "<li><a href='".$v_url."'>".$v_name."</a></li>";
  }
}


?>
<div class="row single_calendar ">
  <div class="col-sm-3">
    <ul class="anio">
      <li>
        <h3>Años</h3>
      </li>
      <?php echo $o_anio; ?>
    </ul>
  </div>

  <div class="col-sm-4">
    <ul class="edition">
      <li>
        <h3>Edicion</h3>
      </li>
      <?php echo $o_edition; ?>
    </ul>
  </div>

  <div class="col-sm-4">
    <ul class="course">
      <li>
        <h3>Aula</h3>
      </li>
      <?php echo $o_course; ?>
    </ul>
  </div>
</div>
