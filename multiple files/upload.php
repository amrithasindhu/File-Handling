<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    $files=$_FILES['files'];

    for($i=0;$i<count($files['name']); $i++)
    {
        $fileName=$files['name'][$i];
        $fileTmpname=$files['tmp_name'][$i];
        $fileSize=$files['size'][$i];
        $fileError=$files['error'][$i];
        $fileType=$files['type'][$i];

        $fileExt=explode('.',$fileName);
        $fileActualExt=strtolower(end($fileExt));

        $allowed=array("jpg","jpeg","png","pdf");
        echo "File Name: $fileName, File Type: $fileType, File Extension: $fileActualExt<br>";

        if(in_array( $fileActualExt,$allowed))
        {
            if( $fileError==0)
            {
                if( $fileSize<100000)
                {
                    $fileNewName=uniqid('',true).".".$fileActualExt;
                    $fileDestination= './uploads/'. $fileNewName;
                    move_uploaded_file($fileTmpname,$fileDestination);
                }
                else{
                    echo "Your file is too big";
                }
            }
            else{
                echo "There was an error";
            }
        }
        else{
            echo "You cannot upload file of this type !";
        }
       


    }
    header("Location:index.php ?uploadsuccess");
    
}

