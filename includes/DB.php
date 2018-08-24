<?php 
	$connection = mysql_connect("localhost","root","");
	$connection_DB = mysql_select_db("culture_project",$connection);
	if($connection_DB){
    	echo 'connected';
	}
	else{
    	echo 'not connected';
	}
?>
