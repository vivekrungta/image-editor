<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$data = substr($_POST['imageData'], 22);
$decodedData = base64_decode($data);

$fp = fopen("pool.jpg", 'wb');
fwrite($fp, $decodedData);
fclose();
//echo "/canvas.png";
	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript" src="draw.js"></script>
	<script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="draws.js"></script>
	<script src="jquery.Jcrop.js"></script>
		<link rel="stylesheet" href="jquery.Jcrop.css" type="text/css" />
		<link rel="stylesheet" href="demos.css" type="text/css" />
    <meta charset="utf-8">
    <title>Canvas Paint - Example 2</title>
    <style type="text/css"><!--
      #container { position: relative; }
      #imageView { border: 2px solid #000; }
    --></style>
  </head>
    <body>
    <div class="jcExample">
	<div class="article">
	<div id="container">
    <canvas id="imageView" width="500" height="370">
	<img id="imageput" src="pool.jpg" width="500" height="400" style="display:none;" />
	</canvas>
	</div>
	<input name="save" type="button" value="save" onclick="upload();">
	</div>
    </div>
	
	</body>
	</html>

