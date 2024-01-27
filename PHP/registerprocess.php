<?php  
require '../PHP/config.php';
require 'registerValidations.php';



$FNAME =  $_POST['fname'];
	$LNAME =  $_POST['lname'];
	$VEMAIL = $_POST['mail'];
	$PSWD   = $_POST['pswd'];
	$RPSWD   = $_POST['rpswd'];
	$TP =  $_POST['tp'];




if(isset($_POST["register-bttn"]))
{
	
	
	
	if(inputEmptyRegister($FNAME,$LNAME,$VEMAIL,$PSWD,$RPSWD,$TP))
	{
		header("location: ../HTML/register.HTML?err=empty_inputs");
	}
	
	else if (nameInvalid($FNAME,$LNAME))
			{
				header("location: ../HTML/register.HTML?err=invalid_nametype");
			}

	     else if (emailInvalid($VEMAIL))
			{
			  header("location: ../HTML/register.HTML?err=invalid_emailtype");
			}			 
	
	
			else if(passNotMatch($PSWD,$RPSWD))
				{
					header("location: ../HTML/register.HTML?err=password_notmatch");
				}
				
		
				else
				{
					registerNewUser($conn,$FNAME,$LNAME,$VEMAIL,$PSWD,$TP);
				}
		
		 
	
	
	
	
	
}
else {
	header("location: ../HTML/register.html");
}



function registerNewUser($conn,$FNAME,$LNAME,$VEMAIL,$PSWD,$TP)
{
	$sql1 = "INSERT INTO voter(Voteremail,VoterFname,VoterLname,VoterPassword,VoterTelephone) Values('$VEMAIL','$FNAME','$LNAME','$PSWD','$TP');";
	if($conn->query($sql1))
	{
		echo '<script type = "text/javascript">';
				echo ' alert("You have successfully create an account");';
				echo 'window.location.href ="../HTML/Login.html"';
				echo '</script>';	
	}
	else{
		echo "error :".conn->error;
		
	}
	
	$conn->close();
}












?>