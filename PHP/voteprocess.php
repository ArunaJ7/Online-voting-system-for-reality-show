<?php
require '../PHP/config.php';



session_start();



  
		
		$CN1 = $_POST['CN1'];
		$CN2 = $_POST['CN2'];
		$CN3 = $_POST['CN3'];
		$CN4 = $_POST['CN4'];
		
		$TVote = $CN1 + $CN2 + $CN3 +$CN4;

	if(isset($_POST["vote-bttn"]))
	{
		
		
		
		
		
		if($TVote > 5)
		{
			header("location: ../HTML/Login.HTML?pickmorethan");
		}
		
		else 
		{
			
			
				$votesforc1 = "INSERT INTO votes(Voteremail,ContestantID,count) Values('{$_SESSION['user']}','1','$CN1');";
				$votesforc2 = "INSERT INTO votes(Voteremail,ContestantID,count) Values('{$_SESSION['user']}','2','$CN2');";
				$votesforc3 = "INSERT INTO votes(Voteremail,ContestantID,count) Values('{$_SESSION['user']}','3','$CN3');";
				$votesforc4 = "INSERT INTO votes(Voteremail,ContestantID,count) Values('{$_SESSION['user']}','4','$CN4');";
				
		if($conn->query($votesforc1))
				{
					echo "";
				}
			else{
					echo "error :".conn->error;
		
		}
		
		
		if($conn->query($votesforc2))
				{
					echo "";
				}
			else{
					echo "error :".conn->error;
		
		}
		
		if($conn->query($votesforc3))
				{
					echo "";
				}
			else{
					echo "error :".conn->error;
		
		}
		
		if($conn->query($votesforc4))
				{
					
					echo 'Vote recieved successfully';
			
						echo '<script type = "text/javascript">';
				echo ' alert("Successfully voted");';
				echo 'window.location.href ="../HTML/user profile.php"';
				echo '</script>';	
					
				}
			else{
					echo "error :".conn->error;
		
				
		
		
		}
	
				$conn->close();
		}
		
		
		
	}
	else {
		header("location: ../HTML/Login.HTML?pickmorethan");
	}




?>