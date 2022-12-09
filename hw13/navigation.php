<?php
switch($page){
	case "index";
		echo'<div class="navBar">
			<div class="col-md-2 navActive"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=results">Results</a></div>
		</div>';
		break;
	case "hobbies";
		echo'<div class="navBar">
			<div class="col-md-2 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-2 navActive"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=results">Results</a></div>
		</div>';
		break;
	case "movies";
		echo'<div class="navBar">
			<div class="col-md-2 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-2 navActive"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=results">Results</a></div>
		</div>';
		break;
	case "contact";
		echo'<div class="navBar">
			<div class="col-md-2 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-2 navActive"><a href="index.php?page=contact">Contact</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=results">Results</a></div>
		</div>';
		break;
	case "results";
		echo'<div class="navBar">
			<div class="col-md-2 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="col-md-2 navActive"><a href="index.php?page=results">Results</a></div>
		</div>';
		break;
	default;
		echo'<div class="navBar">
			<div class="col-md-2 navActive"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=contact">Contact</a></div>
			<div class="col-md-2 navItem"><a href="index.php?page=results">Results</a></div>
		</div>';
		break;
}
?>