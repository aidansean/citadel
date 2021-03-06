<?php
$nCol = 37 ;
$nRow = 10 ;
$w = 320 ;
$h = 176 ;
$scale = 2 ;
$title = 'Citadel map poster maker' ;
$js_scripts  = array('functions.js') ;
$stylesheets = array('style.css') ;
include($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
<div class="right">
  <h3>The poster</h3>
  <div class="blurb">Please be patient.  This poster takes a while to be assembled.<br />
    <table id="table_map" style="display:none">
      <tbody>
<?php
for($i=0 ; $i<$nRow ; $i++){
  echo '        <tr>' , PHP_EOL ;
  for($j=0 ; $j<$nCol ; $j++){
    echo '          <td class="map"><img id="img_' , $i , '_' , $j , '" style="border:0px solid black" class="map" src="images/' , $j , ',' , $i , '.png" width="320px" height="176px" alt="' , $i , ',' , $j , '" title="' , $i , ',' , $j , '"/></td>' , PHP_EOL ;
  }
  echo '        </tr>' , PHP_EOL ;
}
?>
      </tbody>
    </table>
  </div>
  <canvas id="canvas_map" width="<?=$scale*15*$w?>" height="<?=$scale*15*$w*sqrt(2)?>"></canvas>
  <div id="div_single"></div>
  <img id="img_title"  style="display:none" src="images/title.png" width="640px" height="512px" />
</div>

<?php foot() ; ?>