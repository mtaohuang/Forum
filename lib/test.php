<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
require 'image.func.php';
verifyImage();
//header('Content-Type: image/gif');
//$im = imagecreatetruecolor(400, 30);
//$white = imagecolorallocate($im, 255, 255, 255);
//$grey = imagecolorallocate($im, 128, 128, 128);
//$black = imagecolorallocate($im, 0, 0, 0);
//imagefilledrectangle($im, 0, 0, 399, 29, $white);
//$text = 'Testing234...';
//$font = 'BuxtonSketch.ttf';
//imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);
//imagegif($im);
//imagedestroy($im);

//$im=  imagecreatetruecolor(300, 200);
//$red=  imagecolorallocate($im, 255, 0, 0);
//$str="hello world";
//imagestring($im,5,30,60,$str,$red);
//header("content-type:image/png");
//imagepng($im);
//imagedestroy($im);
//
//$im=  imagecreatetruecolor(300, 200);
//$red= imagecolorallocate($im, 255, 0, 0);
//$str="hello";
//imagettftext($im, 12, rand(0,20), 20, 100, $red, "simhei.ttf", $str);
//header("content-type:image/png");
//imagepng($im);
//imagedestroy($im);