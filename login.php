	<?php
		include("includes/DB.php");
		global $connection_DB;
	?>
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

		<div class="container">  
        <div class="row justify-content-sm-center">  
            <div id="form" class="col-sm-6">
		<?php if(isset($_POST['submit']))
		{
			$pseudo = $_POST['pseudo'];
			$sql = "SELECT * FROM parrains WHERE pseudo='$pseudo'";
			$result = mysql_query($sql);
			$data=mysql_fetch_array($result);
			if ($data) 
			{
				if($data['password'] == $_POST['password'])
				{
					$_SESSION['id'] = $data['id'];
					header('Refresh: 0;url=start.php');
				}
				else
				{
					?><div class="alert alert-danger" role="alert">
  							Le mot de passe est incorrecte!
							</div><?php
				}
			}
			else
			{
				?><div class="alert alert-danger" role="alert">
  						Le nom d'utilisateur est incorrecte!
						</div><?php
			}
		}

	?>



				<form action="login.php" method="post">
				  	<div class="form-group">
					    <label for="pseudo">username</label>
					    <input name="pseudo" type="pseudo" class="form-control" id="pseudo" placeholder="entrer username">
				  	</div>
				  	<div class="form-group">
					    <label for="password">Password</label>
					    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  	</div>
				  	<button type="submit" class="btn btn-success form-control" name="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
