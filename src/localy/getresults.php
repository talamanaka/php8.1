<!DOCTYPE html>
<html>
<body>

<h1>Résultats des analyses
</h1>

<?php
echo "ID PATIENT       : ";
echo $php_id = $_GET['id'];
echo "<p></p>";
/*echo $phpVariable = $_GET['key'];*/
/*
?>
<h1>My first PHP page2</h1>


<?php*/
echo "CLÉ RÉSULTATS : ";

/*echo $phpVariable = $_GET['id'];*/
echo $php_key = $_GET['key'];
echo "<p></p>";

$finale_name = $php_id."_".$php_key.".pdf";
echo "PDF_FILE NAME : ";

echo $finale_name;


  
// Store the file name into variable
$file = $finale_name;
$filename = $finale_name;

/*$file = 'Oh_its_working_FTP_TOO_old.pdf';
$filename = 'Oh_its_working_FTP_TOO_old.pdf';*/

  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');

/*sleep(5);*/
  
// Read the file
@readfile($file);
  
?>

</body>
</html>