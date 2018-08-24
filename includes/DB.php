<?php 
$connection = mysql_connect("localhost","root","");
$conection_DB = mysql_select_db("culrural_project",$connection);
if($connection_DB){
    echo 'connected';
}
else{
    echo 'not connected'
}

?>
