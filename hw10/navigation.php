<?php
$page=$_REQUEST['page'];

switch('page'){
	case 'index';
		echo'<div class="navBar">
			<div class="col-md-3 navActive"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
	case 'hobbies';
		echo'<div class="navBar">
			<div class="col-md-3 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navActive"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
	case 'movies';
		echo'<div class="navBar">
			<div class="col-md-3 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-3 navActive"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
	case 'contact';
		echo'<div class="navBar">
			<div class="col-md-3 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-3 navActive"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
	default;
		echo'<div class="navBar">
			<div class="col-md-3 navActive"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=hobbies">Hobbies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=movies">Movies</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
}
?>