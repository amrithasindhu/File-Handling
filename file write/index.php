<?php

$file_name="data.txt";

$file=fopen($file_name,"a");//if we replace a -> w we are overriding the contents.
if($file)
{
    fwrite($file,"Have a nice day");
    fclose($file);
    echo "file written successfully";

}
else{
    echo "unable to open file";
}