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
/*echo "PDF_FILE NAME : ";*/




  
// Store the file name into variable
$file = $finale_name;
$filename = $finale_name;

/*$file = 'Oh_its_working_FTP_TOO_old.pdf';
$filename = 'Oh_its_working_FTP_TOO_old.pdf';*/

  
// Header content type
/*header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');


  
// Read the file
@readfile($file);*/
  


// Connect to FTP server

// Use a correct ftp server
$ftp_server = "files.000webhost.com";

// Use correct ftp username
$ftp_username="sihati-test";

// Use correct ftp password corresponding
// to the ftp username
$ftp_userpass="12pass12";

// Establishing ftp connection
$ftp_connection = ftp_connect($ftp_server)
	or die("Could not connect to $ftp_server");

if( $ftp_connection ) {
	echo "successfully connected to the ftp server!";
	
	// Logging in to established connection
	// with ftp username password
	$login = ftp_login($ftp_connection,
			$ftp_username, $ftp_userpass);
	
	if($login) {
		
		// Checking whether logged in successfully
		// or not
		echo "<br>logged in successfully!";
		
		// Name or path of the localfile to
		// where the file to be downloaded
		$local_file = "/tmp/". $file;
		
		// Name or path of the server file to
		// be downloaded
		$server_file = $file;
		
		// Downloading the specified server file
		if (ftp_get($ftp_connection, $local_file,
				$server_file, FTP_BINARY)) {
			echo "<br>Successfully downloaded "
			. "from $server_file to $local_file.";
			read_result($local_file);
		}
		else {
			echo "<br>Error while downloading from "
				. "$server_file to $local_file.";
		}
		
	}
	else {
		echo "<br>login failed!";
	}
	
	// echo ftp_get_option($ftp_connection, 1);
	// Closing connection

	if(ftp_close($ftp_connection)) {
		echo "<br>Connection closed Successfully!";
	}
}


/*$file = $finale_name;
$filename = $finale_name;
*/
/*$file = 'Oh_its_working_FTP_TOO_old.pdf';
$filename = 'Oh_its_working_FTP_TOO_old.pdf';*/

function checkfile($filename) {

	if (file_exists($filename)) {
    $message = "The file $filename exists";}
    else {
    $message = "The file $filename does not exist";};
    echo $message;
}


/*$filename = 'readme.txt';

if (file_exists($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;*/
  
// Header content type


function read_result($local_file){

header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $local_file . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');

@readfile($local_file);
}

?>

</body>
</html>