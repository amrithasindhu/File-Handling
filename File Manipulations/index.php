 <?php
 
 $file_name = "data.txt";
 $file=fopen($file_name,'r');
 if($file)

{
    $contents=fread($file,filesize( $file_name));
    echo nl2br ($contents);
    fclose( $file);
}


