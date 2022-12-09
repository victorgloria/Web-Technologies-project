<?php
include("functions.php");
		if(!(isset($_POST['submit'])))
		{
		echo'<div class="content"><h2>Fill out my contact form:</h2></div>';
		if (isset($_REQUEST['msg']) && $_REQUEST['msg']=="success"){
			echo'<div>Data entered succesfully!</div>';
		}
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
		echo'</div>';
		}
		if(isset($_POST['submit']))
		{
			$dblink=db_connect("contactData");
			$firstName=$_REQUEST['fname'];
			$lastName=$_REQUEST['lname'];
			$email=$_REQUEST['email'];
			$userName=$_REQUEST['username'];
			$comments=$_REQUEST['comments'];
			$sql="Insert into `user_input` (`first_name`, `last_name`, `email`, `username`, `comments`) values ('$firstName','$lastName','$email','$userName','$comments')";
			$dblink->query($sql) or
				die("Something went wrong with $sql".$dblink->error);
			redirect("index.php?page=contact&msg=success");
		}
?>
<script src="assets/js/validation.js"></script>