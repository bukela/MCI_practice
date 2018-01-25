<?php
$dir = 'images';
$scan = scandir($dir);
$scan = array_diff ($scan, array('.','..'));
foreach($scan as $key=>$value) {
    echo "<img src = 'images/$value' style='width:200px;height:200px;'>".'<br>';
}

?>
