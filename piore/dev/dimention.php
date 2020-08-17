<!DOCTYPE HTML> <html> <head> <meta http-equiv="Content-Type" content="text/html; charset=euc-kr"> <meta name="viewport" content="width=device-width"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <title>A simple example</title> <link rel="stylesheet" href="https://cdn.pannellum.org/2.3/pannellum.css"/> <script type="text/javascript" src="https://cdn.pannellum.org/2.3/pannellum.js"></script> <style> #panorama { width: 600px; height: 400px; position: relative; z-index: 1000; display: table; -moz-transform-origin: top left; -webkit-transform-origin: top left; -ms-transform-origin: top left; transform-origin: top left; } </style> <script language = "javascript">




  function initScale(){ var ress = navigator.userAgent; if (ress.indexOf("Android 1.", 0) > -1 ){ //안드로이드2. 이하만 설정 if (ress.indexOf("480", 0) > -1 ) { // 480x800 var per = 0.5226824457593688; } else if(ress.indexOf("600", 0) > -1 ) { // 600 x 1024 var per = 0.681 } else if(ress.indexOf("1280", 0) > -1 ) { // 800 x 1280 var per = 0.631 } } else { var dh = window.innerHeight; var dw = window.innerWidth; var cw = parseInt( $('#panorama').css('width') ); var ch = parseInt( $('#panorama').css('height') ); var per = dw/cw; var per2 =dh/ch; if(per > per2 ){ per = per2; } var gapH = ( dh - (ch*per) )/2; var gapW = ( dw - (cw*per) )/2 } $("#panorama").css('transform', 'scale('+per+','+per+')'); $('body').css('margin-top', gapH ); $('body').css('margin-left', gapW ); curScale = per; } window.onresize = function(){ initScale(); } window.onload = function() { initScale(); } </script> </head> <body>
    <div id="panorama"></div>
    <div class="">
      <input type="button" name="Helo" value="Change" onclick="setAnotherImage();">
    </div>



     <script>

    // 아래 코드의 01.jpg 만 원하는 이미지로 교체한 후 URL 을 적어주면 됩니다
    var selector = 1;

    var sImageFileName = "../assets/images/dimention/1.jpg"; pannellum.viewer('panorama', { "type": "equirectangular", "panorama": sImageFileName });

    function setAnotherImage() {
      if ( selector == 1) {
        simagefilename = "../assets/images/dimention/2.jpg"; pannellum.viewer('panorama', { "type": "equirectangular", "panorama": simagefilename });
        selector = 2;
      } else {
        simagefilename = "../assets/images/dimention/1.jpg"; pannellum.viewer('panorama', { "type": "equirectangular", "panorama": simagefilename });
        selector = 1;
      }
    }



     </script>
  </body> </html>
