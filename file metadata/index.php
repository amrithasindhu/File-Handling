<?php

$file_name="data.txt";

if(file_exists($file_name))
{
    echo "File Size" . filesize($file_name) ."bytes\n";
    echo "Las Modified" . date("F d Y H:i:s.",filemtime($file_name)."\n");
}
else{
    echo "File doesnt exist";
}