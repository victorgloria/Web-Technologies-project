<html>
<head>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Contact</title>
</head>
<body>
	<div>
		<div>
			<div><h1 class="banner">Welcome to Contact</h1></div>
		</div>
		<div  class="navBar">
			<div class="col-md-3 navItem" align="center"><a href="index.php">Home</a></div>
			<div class="col-md-3 navItem" align="center"><a href="hobbies.php">Hobbies</a></div>
			<div class="col-md-3 navItem" align="center"><a href="movies.php">Movies</a></div>
			<div class="col-md-3 navActive" align="center"><a href="contact.php">Contact</a></div>
		</div>
		<div class="text-center"><h2>Fill out my contact form:</h2></div>
		<form class="container">
			<div class="form-group">
				<label for="fname">First name:</label>
				<input class="form-control" type="text" id="fname" onBlur="checkName(this.value,this.id)">
				<p class="help-block" id="fnameHelp"></p>
			</div>
			<div class="form-group">
				<label for="lname">Last name:</label>
				<input class="form-control" type="text" id="lname" onBlur="checkName(this.value,this.id)">
				<p class="help-block" id="lnameHelp"></p>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input class="form-control" type="text" id="email" onBlur="checkEmail(this.value,this.id)">
				<p class="help-block" id="emailHelp"></p>
			</div>
			<div class="form-group">
				<label for="username">Username:</label>
				<input class="form-control" type="text" id="username" onBlur="checkUsername(this.value,this.id)">
				<p class="help-block" id="usernameHelp"></p>
			</div>
			<div class="form-group">
				<label for="comments">Comments:</label>
				<input class="form-control" type="text" id="comments" onBlur="checkComments(this.value,this.id)">
				<p class="help-block" id="commentsHelp"></p>
			</div>
		</form>
	</div>
</body>
<script src="assets/js/validation.js"></script>
</html>