<?php

$old_name="data.txt";

$new_name="new_data.txt";


if(file_exists($old_name))
{
    rename($old_name,$new_name);
    echo "File Renamed";
}
else{
    echo "File not found";
}

// if(file_exists($new_name))
// {
//     unlink($new_name);
//     echo "File Deleted";
// }
// else{
//     echo "File not Deleted";
// }

