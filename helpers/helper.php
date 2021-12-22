<?php

function loadView (string $path ,array $data =[])
{
    $partsPath = explode('.', $path);
    $baseViewPath = BASEPATH . 'views/';
    $fileName = end($partsPath);

    foreach ($partsPath as $path) {
        if($fileName == $path) {
            $baseViewPath .= $path . '.php';
        }else {
            $baseViewPath .=  $path .'/' ;
        }
    }

    include $baseViewPath;
}