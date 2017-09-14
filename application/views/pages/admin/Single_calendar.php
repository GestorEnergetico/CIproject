<?php

$out='';
print_r($years);
foreach ($years as $year) {
$out .= "<li>".$year."</li>";
}
?>
<ul>
  <?php echo $out; ?>
</ul>
