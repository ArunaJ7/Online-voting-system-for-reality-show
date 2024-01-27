<?php 

 require "config.php";
 
 
    session_start();
 
 
 if(isset($_POST["delete-bttn"]))
		{
				$query2 = "DELETE FROM votes WHERE Voteremail = '{$_SESSION['user']}'";
				 $query3 ="DELETE FROM voter WHERE  Voteremail = '{$_SESSION['user']}'; ";
				
				$deletevotes = mysqli_query($conn, $query2);
				$deleteacc = mysqli_query($conn, $query3);
				
				
				
				
				
				
				
				
				
				if($deleteacc)
				{
					echo  "Account succesfully deleted";
				
					echo '<script type = "text/javascript">';
				echo ' alert("Account Delete Successfully");';
				echo 'window.location.href ="../HTML/Login.html"';
				echo '</script>';	
				}
				else
				{
					echo "Deletation failed";
				}

		}
		else {
			header("Location:../HTML/user profile.php");
		}
		
?>