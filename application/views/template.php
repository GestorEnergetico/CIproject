<?php
  $this->load->view('includes/header');
  $this->load->view('includes/sidebar');
?>
<!-- main -->
<main class="col-md-9">
  <?php
  print_r($sesion);
  $this->load->view($middle);
  ?>
</main>
<!-- /main -->
<?php
$this->load->view('includes/footer');
?>
