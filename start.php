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
		$p_id=$_SESSION['p_id'];
		$sql = "SELECT * FROM equipe WHERE p_id='$p_id'";
		$result = mysql_query($sql);
		$data=mysql_fetch_array($result);
		if ($data == 0) 
		{
			if(isset($_POST['submit']))
			{
				$name = mysql_real_escape_string($_POST["name"]);
				$namep = mysql_real_escape_string($_POST["namep"]);
				$np = mysql_real_escape_string($_POST["np"]);
				$Query = "INSERT INTO equipe(p_id, team_name, p_name, n_participants) VALUES ('$p_id', '$name', '$namep', '$np')";
				$Execute = mysql_query($Query);
				if($Execute)
				{
					header('Refresh: 0;url=finish.php');
				}
				else
				{
					echo 'ERREUR';
				} 
			}
				?>
				<div class="container">  
			        <div class="row justify-content-sm-center">  
			            <div id="form" class="col-sm-6">
			                	<form action="start.php" method="post">
			                		<div class="form-group">
									    <label for="pseudo">nom parrain</label>
									    <input name="namep" type="pseudo" class="form-control" id="namep" placeholder="entrer le nom du parrain">
									</div>
								  	<div class="form-group">
									    <label for="pseudo">nom d'equipe</label>
									    <input name="name" type="pseudo" class="form-control" id="name" placeholder="entrer le nom d'equipe">
									</div>
									<div class="form-group">
									    <label for="pseudo">nombre de participants</label>
									    <input name="np" type="pseudo" class="form-control" id="np" placeholder="entrer le nombre de participants">
									</div>
								  	<button type="submit" class="btn btn-success form-control" name="submit">Submit</button>
								</form>
			            </div>
			        </div>      
			    </div><?php
	    }	
	    else
	    { ?>
	    		<div class="container">  
			        <div class="row justify-content-sm-center">  
			            <div id="form" class="col-sm-6">
			                <p>Vous etes deja inscrits aller a <a href="finish.php"> la page de debut </a></p>
			            </div>
			        </div>      
			    </div>
	    <?php }	?>
</body>
</html>
