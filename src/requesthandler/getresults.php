<?php
$php_id = $_GET['id'];
$php_key = $_GET['key'];
$finale_name = $php_id."_".$php_key.".pdf";

// checking whether file exists or not
$file_pointer = $finale_name ;
#'/user01/work/gfg.txt';
  
if (file_exists($file_pointer)) 
{
    echo "The file $file_pointer exists";
}
else 
{
    echo "The file $file_pointer does
                             not exists";
}
header('Content-type: application/octet-stream');
header('Content-Disposition: inline; filename="hat_007.pdf"');
readfile('hat_007.pdf'); 
?>
