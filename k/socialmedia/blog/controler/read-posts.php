<?php 
	require_once(__DIR__ . "/../model/config.php");

	$time = new DateTime('America/Los_Angeles');//time varriable
	$date = new DateTime('today');//date varriable
	$query = "SELECT * FROM posts ORDER BY DateTime DESC";
	$result = $_SESSION["connection"]->query($query);

	if($result){
		while ($row = mysqli_fetch_array($result)) {
			# code...
			//echo "<div id='image'>";
				echo "<div class='post' id='colors'>";
					echo "<div id='index_title'>" .  $row['title'] . "</div>";//makes title show up on index
					//echo "<br />";
					echo "<article id='index_post'>" . $row['post'] . "</article>";//makes post show up on index
					//echo "<br/>";
					// echo "<div> <a class='open'>Read more</a> <a href='#'>Close</a></div>";
					echo "<div id='datetime_id'> Posted on: " . $row['DateTime'] . "</div>";//this hsows when I posted the post
				echo "<div id='copyright'> &copy Linda Khalaf</div>";//THIS IS MINE NO TOUCHY
				echo "<div>&#771;</div>";//this is like an enter space that shows up on your screen
				echo "</div>";
			//echo "</div>";
		}

	}
 ?>