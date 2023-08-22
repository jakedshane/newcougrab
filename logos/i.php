<?php


$directory = './';  // Change this to your folder's path
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];  // Add more extensions if needed

$files = scandir($directory);
$imageNames = [];

foreach ($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    if (in_array(strtolower($extension), $imageExtensions)) {
        $imageNames[] = $file;
    }
}


print_r($imageNames);
foreach ($imageNames as $image) {
    $name = explode(".",$image)[0];
    echo "['$name', '$image'],";
}
