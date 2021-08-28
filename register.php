<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/header.php');
include_once ($filepath.'/classes/User.php');
	$usr = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$userregi = $usr->userRegistration($name,$username,$password,$email);
}











?>


<h1>Online Exam System - User Registration</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/regi.png"/>
	</div>
	<div class="segment">
	<form action="" method="post">
		<table>
		<tr>
           <td>Name</td>
           <td><input type="text" name="name" id="name"></td>
         </tr>
		<tr>
           <td>Username</td>
           <td><input name="username" type="text" id="username"></td>
         </tr>
         <tr>
           <td>Password</td>
           <td><input type="password" name="password" id="password"></td>
         </tr>
         
         <tr>
           <td>E-mail</td>
           <td><input name="email" type="text" id="email" ></td>
         </tr>
         <tr>
           <td></td>
           <td><input type="submit" id="regsubmit" value="Signup">
           </td>
         </tr>
       </table>
	   </form>
	   <p>Already Registered ? <a href="shubham.php">Login</a> Here</p>
     
     <span id="state"></span>
	</div>


	
</div>

<?php include 'inc/footer.php'; ?>








