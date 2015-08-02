var w = 320 ;
var h = 176 ;
var scale = 2 ;

function image_wrapper(img, x, y){
  this.img = img ;
  this.x = x ;
  this.y = y ;
  
  this.drawBorder = function(context){
    var margin = 5 ;
    context.fillStyle = 'rgb(0,0,0)' ;
    context.fillRect(this.x-margin, this.y-margin, scale*w+2*margin, scale*h+2*margin) ;
  }
  this.drawImage = function(context){
    context.drawImage(this.img, 0, 0, w, h, this.x, this.y, scale*w, scale*h) ;
  }
}

function start(){
  var canvas  = document.getElementById('canvas_map') ;
  var context = canvas.getContext('2d') ;
  
  context.fillStyle = 'rgb(0,0,255)' ;
  var cw = canvas.width  ;
  var ch = canvas.height ;
  context.fillRect(0, 0, cw, ch) ;
  
  var y0 = 1684*scale ;
  var dCol0 =  2 ; var dRow0 = -3.5 ;
  var dCol1 = 11 ; var dRow1 = 13.0 ;
  var dCol2 = 23 ; var dRow2 = 21.5 ;
  
  var img_title = document.getElementById('img_title') ;
  context.drawImage(img_title, 0, 0, 640, 512, 0, -250*scale, 640*7.5*scale, 512*7.5*scale) ;
  
  var image_list = [] ;
  
  var blackimage = document.getElementById('img_0_0') ;
  var imgs = document.getElementsByTagName('img') ;
  for(var i=0 ; i<imgs.length ; ++i){
    var title = imgs[i].title ;
    var col = parseInt(title.split(',')[1]) ;
    var row = parseInt(title.split(',')[0]) ;
    if((col>=32 && col<=36 && row>=2 && row<=3)){
      var xTmp =    (col-dCol2-0.5)*scale*w ;
      var yTmp = y0+(row+dRow2)*scale*h ;
      if(col>32) image_list.push(new image_wrapper(blackimage, xTmp, yTmp)) ;
      col = col - dCol2 + 0.5 ;
      row += 2 ;
    }
    else if(col>dCol2){
      if(row<2) continue ;
      if(row>6) continue ;
      if(col>35) continue ;
      col = col - dCol2 + 0.5 ;
      row += dRow2 ;
    }
    else if(col>dCol1){
      col = col - dCol1 + 0.5 ;
      row += dRow1 ;
    }
    else{
      if(row<3) continue ;
      if(row>8) continue ;
      col += dCol0 - 0.5 ;
      row -= dRow0 ;
    }
    image_list.push(new image_wrapper(imgs[i], col*scale*w, y0+row*scale*h)) ;
  }
  
  for(var i=0 ; i<image_list.length ; i++){
    image_list[i].drawBorder(context) ;
  }
  for(var i=0 ; i<image_list.length ; i++){
    image_list[i].drawImage(context) ;
  }
  
  return ;
  
  var img = document.getElementById('img_5_3') ;
  var canvas_single = document.createElement('canvas') ;
  canvas_single.width  = w ;
  canvas_single.height = h ;
  var context_single = canvas_single.getContext('2d') ;
  
  context_single.fillStyle = 'rgb(255,0,0)' ;
  context_single.fillRect(0, 0, w, h) ;
  
  for(var i=0 ; i<16 ; i++){
    for(var j=0 ; j<11 ; j++){
      context_single.drawImage(img, 0, 0, w/16, h/11, i*w/16, j*h/11, w/16, h/11) ;
    }
  }
  document.getElementById('div_single').appendChild(canvas_single) ;
}

