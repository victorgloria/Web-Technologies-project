<?php
echo '<html>';
echo '<head>';
echo '<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">';
echo '<link href="assets/css/style.css" rel="stylesheet" type="text/css">';
echo '<meta charset="utf-8">';
echo '<title>Contact</title>';
echo '</head>';
echo '<body>';
	echo '<div>';
		echo '<div>';
			echo '<div><h1 class="banner">Welcome to Contact</h1></div>';
		echo '</div>';
		echo '<div  class="navBar">';
			echo '<div class="col-md-3 navItem" align="center"><a href="index.php">Home</a></div>';
			echo '<div class="col-md-3 navItem" align="center"><a href="hobbies.php">Hobbies</a></div>';
			echo '<div class="col-md-3 navItem" align="center"><a href="movies.php">Movies</a></div>';
			echo '<div class="col-md-3 navActive" align="center"><a href="contact.php">Contact</a></div>';
		echo '</div>';
		
		if(!(isset($_POST['submit'])))
		{
		echo'<div class="text-center"><h2>Fill out my contact form:</h2></div>';
		echo'<form class="container" method="POST">';
			echo'<div class="form-group">';
				echo'<label for="fname">First name:</label>';
				echo'<input class="form-control" type="text" name="fname" id="fname" onBlur="checkName(this.value,this.id)">';
				echo'<p class="help-block" id="fnameHelp"></p>';
			echo'</div>';
			echo'<div class="form-group">';
				echo'<label for="lname">Last name:</label>';
				echo'<input class="form-control" type="text" name="lname" id="lname" onBlur="checkName(this.value,this.id)">';
				echo'<p class="help-block" id="lnameHelp"></p>';
			echo'</div>';
			echo'<div class="form-group">';
				echo'<label for="email">Email:</label>';
				echo'<input class="form-control" type="text" name="email" id="email" onBlur="checkEmail(this.value,this.id)">';
				echo'<p class="help-block" id="emailHelp"></p>';
			echo'</div>';
			echo'<div class="form-group">';
				echo'<label for="username">Username:</label>';
				echo'<input class="form-control" type="text" name="username" id="username" onBlur="checkUsername(this.value,this.id)">';
				echo'<p class="help-block" id="usernameHelp"></p>';
			echo'</div>';
			echo'<div class="form-group">';
				echo'<label for="comments">Comments:</label>';
				echo'<input class="form-control" type="text" name="comments" id="comments" onBlur="checkComments(this.value,this.id)">';
				echo'<p class="help-block" id="commentsHelp"></p>';
			echo'</div>';
			echo'<button type="submit" name="submit" value="submit">Submit</button>';
		echo'</form>';
		}
		if(isset($_POST['submit']))
		{
			$firstName=$_REQUEST['fname'];
			$lastName=$_REQUEST['lname'];
			$email=$_REQUEST['email'];
			$userName=$_REQUEST['username'];
			$comments=$_REQUEST['comments'];
			echo '<h2>Results</h2>';
			echo '<p>First Name:'.$firstName.'</p>';
			echo '<p>Last Name:'.$lastName.'</p>';
			echo '<p>Email:'.$email.'</p>';
			echo '<p>Username:'.$userName.'</p>';
			echo '<p>Comments:'.$comments.'</p>';
		}
	echo '</div>';
echo '</body>';
echo '<script src="assets/js/validation.js"></script>';
echo '</html>';
?>