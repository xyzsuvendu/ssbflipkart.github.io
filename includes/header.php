<?php
session_start();
$strnew=md5(rand());
$str=substr($strnew,1,6);
$_SESSION['captcha']=$str;
$newimage=imagecreate(100,40);
imagecolorallocate($newimage,100,100,100);
$col=imagecolorallocate($newimage, 50, 40, 10);
imagestring($newimage,50,40,10,$str,$col);
header('content:image/jpeg');
imagejpeg($newimage);
?>