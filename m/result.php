<?php

// get variables
$twitter = str_replace( '@','', strtolower( $_POST['twitter'] ) );
$name = urlencode( $_POST['name'] );
$phone = urlencode( $_POST['phone'] );
$email = urlencode( $_POST['email'] );
$url = urlencode( 'http://twitter.com/' . $twitter );
$color = $_POST['color'];

// config
$screen_width = 640;
$screen_height = 960;
$font_size = 40;

// get background
$img = './img/' . $color . '.png';
$original = imagecreatefrompng($img);
$size = getimagesize($img);

// resize image
$im = ImageCreateTrueColor($screen_width, $screen_height);
ImageCopyResampled($im, $original, 0, 0, 0, 0, $screen_width, $screen_height, $size[0], $size[1]);

// calculate text align center
$text = "@" . $twitter;
$font = './verdana.ttf';
$box = @imageTTFBbox($font_size,0,$font,$text);
$start_x = ( 640 - abs($box[4] - $box[0]) ) / 2;

// write twitter username
$start_y = 390; 
$black = ImageColorAllocate($im, 255, 255, 255); 
Imagettftext($im, $font_size, 0, $start_x, $start_y, $black, $font, $text); 

// add qr code
$imagestring = file_get_contents(sprintf('http://chart.apis.google.com/chart?cht=qr&chs=200x200&chl=MECARD:N:%s;TEL:%s;EMAIL:%s;URL:%s;;',$name,$phone,$email,$url));
$image2 = imagecreatefromstring($imagestring);
$start_x = ( 640 - 200 ) / 2;
$start_y = 450; 
imagecopy($im, $image2, $start_x, $start_y, 0, 0, imagesx($image2), imagesy($image2));

// foce donwload?
if( $_POST['download'] ){
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=wall.png");
    header("Content-Transfer-Encoding: binary");
}

// show image    
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);