<?php

$out='';
print_r($years);
foreach ($years as $year) {
$out .= "<li>".$year["year_edition"]."</li>";
}
?>
<ul>
  <?php echo $out; ?>
</ul>
