<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

list($width, $height, $type, $attr) = getimagesize("pool.jpg");
	$targ_w =$width; 
	$targ_h = $height;
	$jpeg_quality = 90;

	$src = 'pool.jpg';
	$img_r = imagecreatefromjpeg($src);
	$dst_r = imageCreateTrueColor( $targ_w, $targ_h );

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x1'],$_POST['y1'],$targ_w,$targ_h,$_POST['w'],$_POST['h']);

//	header('Content-type: image/jpeg');
header("location:".$_SERVER["PHP_SELF"]);
	imagejpeg($dst_r,"pool.jpg",$jpeg_quality);

	exit;
}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<script src="jquery.min.js"></script>
		<script src="jquery.Jcrop.js"></script>
		<script src="crop.js"></script>
		<link rel="stylesheet" href="jquery.Jcrop.css" type="text/css" />
		<link rel="stylesheet" href="demos.css" type="text/css" />
	 	</head>

	<body>
	<div class="jcExample">
	<div class="article">
	
		<img src="pool.jpg" id="cropbox" width="500" height="400" border="5"/>
		
		<form action="crop.php" method="post" onsubmit="return checkCoords();">
			<input type="hidden" id="x1" name="x1" />
			<input type="hidden" id="y1" name="y1" />
			<input type="hidden" id="x2" name="x2" />
			<input type="hidden" id="y2" name="y2" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
	      	<input type="submit" value="Crop Image" />
		</form>
		</div>
	</div>
	
	</body>
</html>