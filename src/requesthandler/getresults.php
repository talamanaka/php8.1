<?php
header('Content-type: application/octet-stream');
header('Content-Disposition: inline; filename="hat_007.pdf"');
readfile('hat_007.pdf'); 
?>
