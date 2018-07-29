<?php
$cBytes = $_FILES['userfile']['size'];
$nBytes = ($cBytes / 1048576);
echo $nBytes; 
//echo $cBytes; 
?>


