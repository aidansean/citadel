<?php
$nCol = 37 ;
$nRow = 10 ;
$w = 320 ;
$h = 176 ;
$scale = 2 ;
$title = 'Citadel map' ;
$fb_image = 'img_8_3' ;
$stylesheets = array('style.css') ;
include($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
<div class="right">
  <h3>The map</h3>
  <div class="blurb">
    <div class="image_wrapper_right">
      <a href="images/title.png"><img src="images/title.png" style="right" width="320px" height="256px" alt="Title image"/></a>
      <p class="center">Citadel, Citadel, Citadel, Citadel.<br />Superior Software presents Citadel.</p>
    </div>
    
    <p>This page shows a map for the old BBC Micro video game, <a href="http://en.wikipedia.org/wiki/Citadel_(video_game)">Citadel<a>.  The map itself is huge, so scroll around to see it!  See also the <a href="images/poster.png">poster</a> made from the map.</p>
  </div>
  
  <div class="blurb">
    <table id="table_map">
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
</div>

<?php foot() ; ?>