<?php


// checking whether file exists or not
$file_pointer = '/user01/work/gfg.txt';
  
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
