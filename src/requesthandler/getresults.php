

<?php
$php_id = $_GET['id'];
$php_key = $_GET['key'];
$finale_name = $php_id."_".$php_key.".pdf";
// Store the file name into variable
$file = $finale_name;
$filename = $finale_name;
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');

/*sleep(5);*/
  
// Read the file
@readfile($file);
  
?>

