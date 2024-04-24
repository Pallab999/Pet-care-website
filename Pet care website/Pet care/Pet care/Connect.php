<?php

$con = new mysqli('localhost','root','','pet_care');

if(!$con){
	die(mysqli_error($con)); 
}

?>