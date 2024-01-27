<?php
 require "config.php";


      
   
	$email = $_POST['user'];
	$pass  = $_POST['pwd'];
	
	
	


if(isset($_POST["LoginBttn"]))
{

	
	
	$select = mysqli_query($conn, "SELECT * FROM voter WHERE Voteremail = '$email' AND VoterPassword = '$pass' ");
	$row = mysqli_fetch_array($select);
	
	if(is_array($row))
	{
		session_start();
		$_SESSION['user'] = $row['Voteremail'];
		$_SESSION['pwd'] = $row['VoterPassword'];
	}
	else
	{
	
echo '<script type = "text/javascript">';
echo ' alert("Invalid Username or Password");';
echo 'window.location.href ="../HTML/Login.html"';
echo '</script>';	
	}
	
	
}
if(isset($_SESSION["user"]))
{
	header("Location:../HTML/user profile.php");
}



?>