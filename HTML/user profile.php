<html>
<head>
<title>Home </title>
<link rel="stylesheet"  href="../CSS/hdandft.css">
<link rel="stylesheet"  href="../CSS/userprof.css">

</head>




<body>

<header>
 <a href="home.html">
 <img src="../images/logo.jpg" width="150" , height="90">
	</a>
 <a href="Login.html">
 <img src="../images/login icon.png" width="100" , height="90" align="right">
 
 <hr>
 
 
</a>
 <div class="menubar">
	<ul class="menu">
	<li class="menu"><a href="home.html">Home</a></li>
	<li class="menu"><a href="contestant.html">Contestants</a></li>
	<li class="menu"><a href="Login.html">Vote</a></li>
	<li class="menu"><a href="contactus.html">Contact us</a></li>
	<li class="menu"><a href="about-us.html">About us</a></li>
	</ul>
 </div>
 
 <hr>
</header>

<br>
<br>
<br>
                    <center><h3 style="font-size:40"> User account </h3></center>
<?php 

 require "../PHP/config.php";
 
 
 session_start();
 
 
	$query =  "SELECT * FROM voter WHERE Voteremail = '{$_SESSION['user']}'";
 	

 
	$displaydetails = mysqli_query($conn,$query);	
 
	if($displaydetails)
	{
		$details = mysqli_fetch_assoc($displaydetails);
		
		echo'<ul>';
		echo'<br><br> <li style="font-size:20"> Email:' .($details['Voteremail']) .'</li>';
		echo'<br><br> <li style="font-size:20">First Name: '.($details['VoterFname']) .'</li>';
		echo'<br><br> <li style="font-size:20">Last Name: ' .($details['VoterLname']) .'</li>';

		echo'<br><br> <li style="font-size:20">Phonenumber: ' .($details['VoterTelephone']) .'</li>';
		echo'</ul>';
	}




?>
<br>
<br>

<a href="vote.html">
<input type="submit" class="btt1" name="vote-bttn" value="Vote" id="votee"><br>
</a>
<br>


<a href="login.html">
<input type="submit" class="btt1" name="vote-bttn" value="Log out" id="votee"><br>
</a>
<br>




<form method='POST' action ="../PHP/userprofileprocess.php">
<input type="submit" class="btt1" name="delete-bttn" value ="Delete Account" id="delee"><br>
</form>





<br>
<br>
<br>





<footer>
<h4> Main sponsor</h4>
<div id="main">
 <a href="#"> 
 <img src="../images/main sponsor.png" width="100" , height="50" >
<a></div>

<h4> Co-sponsors</h4>
<div id="c1">
 <a href="#"> 
 <img src="../images/co sponsors1.png" width="100" , height="50" >
<a></div>



<div id="c2">
 <a href="#"> 
 <img src="../images/cosponsor2.png" width="100" , height="50" >
<a></div>


<div id="c3">
 <a href="#"> 
 <img src="../images/co sponsor3.png" width="100" , height="50" >
<a></div>


<div id="terms">
 <a href="terms.html"> Terms & conditions<br> </a>
 <a href="privacy.html"> Privacy & policy<br></a>
 <a href="../HTML/help.html"> Help<br> </a>
 
 
</div>




<center><p> Follow us</p></center>
<div id="fb">
 <a href="https://www.facebook.com/" target="_blank"> 
 <img src="../images/facebook.png" width="20" , height="30" >
<a></div>

<div id= "twitter" >
 <a href="https://twitter.com/i/flow/login" target="_blank"> 
 <img src="../images/twitter.png" width="20" , height="30" >
<a></div>

<div id="insta" >
 <a href="https://www.instagram.com/accounts/login/" target="_blank"> 
 <img src="../images/instagram.png" width="20" , height="30" >
<a></div>

<div id="youtube" >
 <a href="https://www.youtube.com/" target="_blank"> 
 <img src="../images/youtube.png" width="20" , height="30" >
<a></div>
</footer>
</body>








</html>