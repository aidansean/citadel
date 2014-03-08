<?php
$nCol = 36 ;
$nRow = 10 ;
$w = 320 ;
$h = 176 ;
$title = 'Citadel map' ;
$stylesheets = array('style.css') ;
include($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
<div class="right">
  <h3>The map</h3>
  <div class="blurb">The map is huge!: <br />
    <table id="table_map">
      <tbody>
<?php
for($i=0 ; $i<$nRow ; $i++){
  echo '        <tr>' , PHP_EOL ;
  for($j=0 ; $j<$nCol ; $j++){
    echo '          <td class="map"><img style="border:0px solid black" class="map" src="images/' , $j , ',' , $i , '.png" width="320px" height="176px" alt="' , $i , ',' , $j , '" title="' , $i , ',' , $j , '"/></td>' , PHP_EOL ;
  }
  echo '        </tr>' , PHP_EOL ;
}
?>
      </tbody>
    </table>
  </div>
</div>

<?php foot() ; ?>