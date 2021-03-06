<?php

	// Create connection
	$connect = mysqli_connect("localhost", "root", "", "lib");
	// Check connection
	if (!$connect) {
	    die("Connection failed: " . mysqli_connect_error());
	}
		$author = $_GET['author'];
		$sql = "SELECT `book` FROM `books` WHERE `author_id` = $author";
		$result = mysqli_query($connect,$sql);
		
		$books = array();
		while($row = mysqli_fetch_array($result)) {
			$books[] = $row;
		}

		$sql = "SELECT `author_name` FROM `author` WHERE `author_id` = $author";
		$result = mysqli_query($connect,$sql);
		$author_name = "";
		while($row = mysqli_fetch_array($result)) {
			$author_name = $row["author_name"];
		}
?>

<!DOCTYPE html>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Library</title>
<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style type="text/css">
    body {
    	text-align: center;
    }
    </style>
    <script type="text/javascript">
    </script>
  </head>
  <body>
  		<h1>
  			<?=$author_name?>
  		</h1>
  		<ol>
			<?php foreach ($books as $row) { ?>
				<li><?=$row["book"]?></li>
			<?php } ?>
		</ol>
	</body>
<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>