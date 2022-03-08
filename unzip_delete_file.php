<!-- <?php
 

    session_start();
    $zip = new ZipArchive;
    $var_name = $_SESSION['file_name'];
   $path='files/';
   $location=$path.$var_name;
//    Zip File Name
    if ($zip->open($location) === TRUE) {
      
        // Unzip Path
        $zip->extractTo('files/unzipped/');
        $zip->close();
        echo 'Unzipped Process Successful!';
echo      ' <br>';
 
} else {
echo      ' <br>';

        echo 'Unzipped Process failed';

    }
echo '<br> <br>';

    if(unlink($location)){

         echo "deleting file sucessfully";

 
    }
    else
    echo "cant delete file sucessfully";
echo      ' <br>';



 print($var_name);
   
?>
 -->
