<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
header("content-type:image/gif");
require_once ROOT.'/lib/string.func.php';
function verifyImage($width=100,$height=30,$type=1,$length=4,$line=2,$pixel=60){
session_start();

$sess_name="verifyNum";
$image=imagecreatetruecolor($width, $height);
$white=imagecolorallocate($image, 255, 255, 255);
$black=imagecolorallocate($image, 0, 0, 0);
//用填充矩形填充画布
imagefilledrectangle($image, 1, 1, $width-2,$height-2, $white);
$chars=buildRandomString($type,$length);

$_SESSION[$sess_name]=$chars;
//echo $chars;
$fontfiles=array("BuxtonSketch.ttf","TektonPro-Bold.otf","TektonPro-BoldCond.otf","TektonPro-BoldExt.otf","TektonPro-BoldObl.otf","msyh.ttc","msyhbd.ttc","msyhl.ttc","simfang.ttf","simhei.ttf","simkai.ttf");
for($i=0;$i<$length;$i++){
    $size=mt_rand(14, 18);
    $angle=mt_rand(-15, 15);
    $x=2+$i*$size;
    $y=mt_rand(22, 25);
    $fontfile="../fonts/".$fontfiles[mt_rand(0, count($fontfiles)-1)];
    $color=imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(90, 180));
    $text=substr($chars, $i,1);
    imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
}

if($pixel){
for($i=0;$i<$pixel;$i++){
    imagesetpixel($image, mt_rand(0,$width-1), mt_rand(0, $height-1),$black);
}
}
if($line){
    for($i=0;$i<$line;$i++){
        $color=imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(90, 180));
        imageline($image, mt_rand(0, $width-1),  mt_rand(0, $height-1), mt_rand(0, $width-1),  mt_rand(0, $height-1), $color);
    }
}

imagegif($image);
imagedestroy($image);
}


