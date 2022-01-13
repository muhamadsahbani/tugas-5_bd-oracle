<?php
$user="bani_898";
$pass="898";
$database="LOCALHOST/XE";

$con = oci_connect($user, $pass, $database);
if($con){
	echo "";

}
else{ 
	$err = oci_error();
echo "Gagal". $err['text'];
}
?>
