

<?php
$php_id = $_GET['id'];
$php_key = $_GET['key'];
$finale_name = $php_id."_".$php_key.".pdf";
// Store the file name into variable
$file = $finale_name;
$filename = $finale_name;
// Header content type
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');

/*sleep(5);*/
  
// Read the file
@readfile($file);
  
?>

