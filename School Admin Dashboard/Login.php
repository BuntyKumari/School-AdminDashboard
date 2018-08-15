<?php
 include('connection.php');
 error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script src="js/index.js"></script>
</head>
<body >
	<div class="container-fluid">

		<div class="container" style="width: 35%; margin: 140px auto;padding:60px; box-shadow:3px 6px 12px rgba(157, 119, 248, 0.90);">
			<h3 class="text-center text-primary" style="padding: 10px auto;"><b>Admin Login</b></h3>
			<div class="row">
				
				<form action="" method="POST">
					
					<div class="col-md-12">
					<input type="text" name="username" class="txtStyle" placeholder="Enter Username">
					</div></div><br>
					<div class="row">
						<div class="col-md-12">
				<input type="password" name="password" class="txtStyle" placeholder="Enter Password">
					</div>	</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" name="submit" value="Login" class="btn btn-success btn-style">

							
						</div>
					</div>
				</form>

							<?php
							if(isset($_POST['submit']))
							{
							 $uname = $_POST['username'];
							 $pwd = $_POST['password'];
							$sqlquerry = "select * from login where username='$uname' and password='$pwd'";
							$data = mysqli_query($con, $sqlquerry);
						
							$total = mysqli_num_rows($data);
							//echo $total;
							if($total==1)
							{
								session_start();
								$_SESSION['username']=$uname;
								//echo $_SESSION['username'];
								//header('location:index.php');
								header('location:index.php');
							}
							else
							{
								echo "<p class='text-danger text-center'>Invalid login details</p>";
							}
							}	
							?>
			</table>
		</div>
	</div>
</body>
</html>