<?php

$Return = array();
$Return['status'] = 0;
$Return['message'] = 'Access Denied';

if(isset($_POST['join_name'])){

    $Name = $_POST['join_name'];
    $image = $_FILES['join_image'];
    $fake = $image['tmp_name'];

    if(!file_exists('../Nigeria_One')){
        mkdir('../Nigeria_One');
    }

    header('Content-Type: image/png');

    $backimg = imagecreatefrompng('../img/dp.png');
    $upimg = imagecreatefromstring(file_get_contents($fake));
    $text_color = imagecolorallocate($backimg, 0, 0, 0);
    imagestring($backimg, 900, 570, 280, $Name, $text_color);

    imagecopymerge($backimg, $upimg, 93, 330, 0, 0, 356, 453, 90);

    imagepng($backimg, '../Nigeria_One/new_one_'.$Name.'_'.time().'.png');

    imagepng($backimg);

}
