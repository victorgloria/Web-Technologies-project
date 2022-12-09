<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<h3 class="content">Contact Form Data Results</h3>';
echo'<table border="1px" width="100%" class="container"><tr><th>Contact #</th><th>First Name</th><th>Last name</th><th>Email</th><th>Username</th><th>Comments</th></tr>';
echo'<tbody id="results">';
echo'</tbody>';
echo'</table>';
?>
<script>
function refresh_div(){
	$.ajax({
		type: 'post',
		url: 'https://ec2-18-221-79-52.us-east-2.compute.amazonaws.com/hw13/query.php',
		success: function(data) {
			$('#results').html(data);
		}
	});
};
setInterval(function(){ refresh_div(); }, 500);
</script>