<?php 
	$my_con = mysqli_connect("localhost", "root", "") or die("Could not connect!");
	mysqli_select_db($my_con,"search_test") or die("Could not find database!");
	
	$output = '';

	if(isset($_POST['search'])) {
		$searchq = $_POST['search'];
		//$search = preg_replace("#[^0-9a-z]#i","", $searchq);

		$query = mysqli_query($my_con,"SELECT * FROM books WHERE Book_Name LIKE '%$searchq%' OR Author LIKE '%$searchq%' ") or die("Could not search!");
		$count = mysqli_num_rows($query);
		if($count == 0) {
			$output = 'There was no search result';
		}
		else {
			while($row = mysqli_fetch_array($query)) {
				$bookN = $row['Book_Name'];
				$bookA = $row['Author'];
				$id = $row['Id'];

				//$output .= '<div>'.$id.'. '.$bookN.' '.$bookA.'</div>';
				$output .= '<div>' <table><td><tr>home</tr></th></table> '</div>';
			}
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
	<!--<form action="search.php" method="post">
		<input type="text" name="search" placeholder="Search for a member......">
		<input type="submit" name="find" value=">>">
		
	
	</form> -->

	<?php print("$output"); ?>
</body>
</html>


