<?php
$filepath = realpath(dirname(__FILE__));

include_once ($filepath.'/header.php');

?>

<!doctype html>
<html>
<head>
	<title>Online Exam System</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>


	<?php 
	if (isset($_GET['action']) && $_GET['action'] == 'logout') {
		Session::destroy();
		header("Location:anand.php");
		exit();
	}
	 ?>

<h1>Online Exam System - User Login</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/test.png"/>
	</div>
	<div class="segment">
	<form action="" method="post">
		<table class="tbl">    
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" id="email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id="password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td><input type="submit" id="loginsubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p>New User ? <a href="register.php">Signup</a> Free</p>
	   <span class="empty" style="display: none;">Field must not be empty !</span>
	   <span class="error" style="display: none;">Email or Password not matched !</span>
	   <span class="disable" style="display: none;">User Id disabled !</span>
	</div>


	
</div>
<?php include 'inc/footer.php'; ?>