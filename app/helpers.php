<?php


if(! function_exists('alert')) {

    function alert(string $text) {
        session(['alert'=> $text]);
    }

}
if(! function_exists('alertred')) {

    function alertred(string $text) {
        session(['alertred'=> $text]);
    }

if(! function_exists('makeAvatar')) {

        function makeAvatar($fontPath, $dest, $charFirst, $charLast){
            $path = $dest;
            $image = imagecreate(200,200);
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0,255);
            imagecolorallocate($image,$red,$green,$blue);
            $textcolor = imagecolorallocate($image,255,255,255);
            imagettftext($image,90,0,30,150,$textcolor,$fontPath,$charFirst);
            imagettftext($image,90,0,100,150,$textcolor,$fontPath,$charLast);
            imagepng($image,$path);
            imagedestroy($image);
            return $path;
        }
    }          
}