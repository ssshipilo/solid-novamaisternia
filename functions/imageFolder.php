<?php 

function getFolder($folderName) {
    $images = array();
    $files = scandir($folderName);
    foreach ($files as $filename) {
        $filepath = $folderName . '/' . $filename;
        if (is_file($filepath) && in_array(pathinfo($filename, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif', 'webp'))) {
            $images[] = $filepath;
        }
    }
    return $images;
}

function get_delay_duration($iteration) {
    $delay = 0.1 + $iteration * 0.2;
    $duration = 1;
    return array(round($delay, 1) . "s", $duration . "s");
  }

?>