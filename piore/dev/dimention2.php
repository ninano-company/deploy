<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<title>A simple example</title>
<link rel="stylesheet" href="https://cdn.pannellum.org/2.3/pannellum.css"/>
<script type="text/javascript" src="https://cdn.pannellum.org/2.3/pannellum.js"></script>
</head>
<body>

<div id="panorama1" style="width:400px;height:200px"></div>
<br>
<div id="panorama2" style="width:400px;height:200px"></div>

<script>

// 아래 코드의 01.jpg 만 원하는 이미지로 교체한 후 URL 을 적어주면 됩니다

var sImageFileName1 = "../assets/images/dimention/1.jpg";
pannellum.viewer('panorama1', {
"type": "equirectangular",
"panorama": sImageFileName1
});

var sImageFileName2 = "../assets/images/dimention/2.jpg";
pannellum.viewer('panorama2', {
"type": "equirectangular",
"panorama": sImageFileName2
});

</script>

</body>
</html>
