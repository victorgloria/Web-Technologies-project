<?php
echo'<!DOCTYPE html>
<html>
<head>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Welcome</title>
</head>
	<body> 
		<div>
			<div><h1 class="banner">Welcome to my site</h1></div>';
			if (isset($_REQUEST['page']))
				$page=$_REQUEST['page'];
			else
				$page="index";
			include("navigation.php");
switch($page){
		case "index";
			include("home.php");
			break;
		case "hobbies";
			include("hobbies.php");
			break;
		case "movies";
			include("movies.php");
			break;
		case "contact";
			include("contact.php");
			break;
		case "results";
			include("results.php");
			break;
		default;
			include("home.php");
			break;
}
echo'</body>
</html>';
?>