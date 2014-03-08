<?php

$source = imagecreatefrompng('map.png') ;

$w = imagesx($source) ;
$h = imagesy($source) ;

$rw = 320 ;
$rh = 176 ;

$offset_x = 18 ;
$offset_y =  6 ;
$n_x = 36 ;
$n_y = 10 ;
for($i=0 ; $i<$n_x ; $i++){
  for($j=0 ; $j<$n_y ; $j++){
    $x = $i*$rw ;
    $y = $j*$rh ;
    $AA = $i-$x_offset ;
    $BB = $j-$y_offset ;
    $image = imagecreatetruecolor($rw,$rh) ;
    imagecopy($image,$source,0,0,$x,$y,$rw,$rh) ;
    $filename = 'images/' . $AA . ',' . $BB . '.png' ;
    imagepng($image,$filename) ;
    imagedestroy($image) ;
    echo '<p>Made ' . $filename . '</p>' , PHP_EOL ;
  }
}
echo '<p>All done.</p>' ;
  
?>