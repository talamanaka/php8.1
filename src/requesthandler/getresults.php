<?php
$php_id = $_GET['id'];
$php_key = $_GET['key'];
$finale_name = $php_id."_".$php_key.".pdf";

// checking whether file exists or not
$file_pointer = $finale_name ;
#'/user01/work/gfg.txt';

function redirect($url)
{
    
    header('Location: '.$url);
    exit();
}


function getting_pdf($url)
{
    header('Content-type: application/octet-stream');
    header('Content-Disposition: inline; filename="hat_007.pdf"');
    header('Content-Disposition: inline; filename="' . $url . '"');

    readfile($url); 
    #header('Location: '.$url);
    #exit();
}



  
if (file_exists($file_pointer)) 
{
    getting_pdf($file_pointer);
    redirect($file_pointer); 
    #echo "The file $file_pointer exists";
    #header('Location:"' . $filename . '"');
    exit();
}
else 
{
    #echo "The file $file_pointer does
                           #  not exists";
   header('Location: ../index.html');
   exit();
}
#header('Content-type: application/octet-stream');
#header('Content-Disposition: inline; filename="hat_007.pdf"');
#readfile('hat_007.pdf'); 
?>
