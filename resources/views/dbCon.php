<?php 
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","111");
define("DATABASE","safarkhosh");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to Connect DB");

?>
