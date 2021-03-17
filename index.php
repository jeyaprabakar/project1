<?php session_start(); 

if(isset($_POST['Submit']))
{
$logins = array('Admin' => '1234');

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (isset($logins[$username]) && $logins[$username] == $password)
{
$_SESSION['UserData']['username']=$logins[$username];
header("location:weather.php");
exit;
}
else{

$msg="<span style='color:red'>Invalid Login Details</span>";
}
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Jeyaprabakar</title>
	<link rel="stylesheet" a href="style.css">
  </head>
  <body>
    <div class="bg-img">
				
				<div class="container">
				
								<form action="" method="POST" name="loginform> 
								<h1>Weather Login</h1> <br>

								<label for="user"><b>Username</b></label>
								<input type="text"  name="username" placeholder="Enter Username" required>

								<label for="password"><b>Password</b></label>
								<input type="password" name="password" placeholder="Enter Password"required>

								<button type="submit" class="btn" name="Submit" value= "login">Login</button> <br><br>
								<button type="reset" class="btn" value= "Cancel">Cancel</button>
								
								</form>
								
								
						
</div>						
				</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>