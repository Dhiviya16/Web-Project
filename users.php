<?php
function user_exists($email) {
	$query = ("SELECT COUNT" ('id') FROM 'users' WHERE 'email' = '$email'");
		return (mysqli_result(mysqli_query("SELECT COUNT" ('id') FROM 'users' WHERE 'email' = '$email'"),0) == 1) ? true : false;
}
?>