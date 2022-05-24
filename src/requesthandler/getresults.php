

<?php
$php_id = $_GET['id'];
$php_key = $_GET['key'];

 #cho "ID PATIENT       : ";
#cho $php_id = $_GET['id'];
#cho "<p></p>";
/*echo $phpVariable = $_GET['key'];*/
/*
?>
<h1>My first PHP test</h1>
<?php*/
#cho "CLÉ RÉSULTATS : ";

/*echo $phpVariable = $_GET['id'];*/
#cho $php_key = $_GET['key'];
echo "<p></p>";

$finale_name = $php_id."_".$php_key.".pdf";
echo "PDF_FILE NAME : ";

echo $finale_name;


  
// Store the file name into variable
$file = $finale_name;
$filename = $finale_name;

/*$file = 'Oh_its_working_FTP_TOO_old.pdf';
$filename = 'Oh_its_working_FTP_TOO_old.pdf';*/
?>
<?php
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');

/*sleep(5);*/
  
// Read the file
@readfile($file);
  
?>

