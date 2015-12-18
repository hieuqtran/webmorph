<?php
	header('Content-type: image/svg+xml');
	
	$hue = is_numeric($_GET['h']) ? $_GET['h']%361 : 0;
	if ($_GET['h'] == 362) $hue = 200;
?>

<svg version="1.1"
     baseProfile="full"
     width="130" height="160"
     xmlns="http://www.w3.org/2000/svg">

  <g fill="none" stroke="hsl(<?= $hue ?>,<?= $hue ? 80 : 0 ?>%,30%)" stroke-width="6" stroke-linecap="round" stroke-linejoin="round">
  	<polygon points="4,4 126,4 126,156 4,156 4,4" fill="rgba(255,255,255,.75)" />
  	
    <circle cx="65" cy="75" r="40" />
    <circle cx="53" cy="67" r="2" />
    <circle cx="77" cy="67" r="2" />
    <path d="M51,89 C55,100 75,100 79,89" />
  </g>
</svg>