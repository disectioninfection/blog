<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="../css/stylesheets/main.css">
	<link rel="stylesheet" href="css/stylesheets/bootstrap.css">
	<link rel="stylesheet" href="css/stylesheets/bootstrap.min.css">
	<link rel="stylesheet" href="css/stylesheets/bootstap-theme.css">
	<link rel="stylesheet" href="css/stylesheets/bootstrap-theme.min.css">
<?php 
	require_once (__DIR__ . "/../model/config.php");

	$connection = new mysqli($host, $username, $password, $database); //calls the fucntions host, username, password and database


	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //calls the class title from form.php
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //calls the class post from the file form.php
	$date = new DateTime('today');//date varriable
	//$date = filter_input(INPUT_POST, "today", FILTER_SANITIZE_STRING);
	$time = new DateTime('America/Los_Angeles');//time varriable
	//$time = filter_input(INPUT_POST, "America/Los_Angeles", FILTER_SANITIZE_STRING);

	// echo "<p>Title: $title</p>"; //calls the function title
	// echo "<p>Post: $post</p>"; //calls the function post
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title' , post = '$post'");//posts the post

	if($query){
		echo "<p>Posted on: " . $date->format("D M" . " " . "d Y") . " at " . $time->format(" h:s ") . "</p>";
		echo "<div class='row'>
						<div class='col-xs-6 .col-sm-3'>
							<div class='clearfix visible-xs-block'></div>
							<div id='title_text' align='left'>
								<p>Title: $title</p>
							</div>
						</div>
					</div>";//this lets me know that post is posted
		echo "<div id='post_text'>
						<p>Post: $post</p>
					</div";
	//	echo "$date->format('D-d-m-y')";//echos date
		//echo "$time->format('G:i')";//echos time
	} else{
			echo "<p>". $query = $_SESSION["connection"]->error . "</p>";//if there is an error, this will echo it
		}

	//$connection->close();

 ?>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 	<script type="text/JavaScript" src="../javascript/bootstrap.min.js"> </script>
 	<script type="text/JavaScript" src="../javascript/bootstrap.js"> </script>
 	<script type="text/JavaScript" src="../javascript/npm.js"> </script>
 </html>
