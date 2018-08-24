<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/Publicstyles.css">
</head>

<body>
	<?php
		include("includes/DB.php");
		global $connection_DB;
		$id=$_SESSION['id'];
		$sql = "SELECT * FROM parrains WHERE id='$id'";
		$result = mysql_query($sql);
		$data=mysql_fetch_array($result);
		if($data['test']==0)
		{
	?>
	<div class="container">  
        <div class="row justify-content-sm-center">  
            <div id="form" class="col-sm-6">
                <p class="title">Wait For The Signal</p>
                
                <a class="form-control btn btn-success" href="formulaire.php">start</a>    
            </div>
        </div>      
    </div>
    <?php
    	}
    	else
    	{
    ?>
	<div class="container">  
        <div class="row justify-content-sm-center">  
            <div id="form" class="col-sm-6">
                <p class="title">sorry you're out</p>   
            </div>
        </div>      
    </div>
    <?php
    	}
    ?>
</body>
</html>