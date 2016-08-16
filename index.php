<?php

	// Create connection
	$connect = mysqli_connect("localhost", "root", "", "lib");
	// Check connection
	if (!$connect) {
	    die("Connection failed: " . mysqli_connect_error());
	}
		$sql = "SELECT author_id,author_name FROM author";
		$result = mysqli_query($connect,$sql);

		$authors = array();
		while($row = mysqli_fetch_array($result)) {
			$authors[] = $row;
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
 <!-- Add author form -->
    	 <form action="test.php" method="POST">
		  Add book author:<br>
		  <input type="text" name="author">
		  <br>
		  <input type="submit" value="Add Author" class="btn btn-default">
		</form><br>

<!-- Add book form -->
		<form action="test2.php" method="POST">
			Select author and add book:<br>
			<select name="author_id" onChange="">
				<?php foreach ($authors as $row) { ?>
					<option value="<?=$row["author_id"]?>"><?=$row["author_name"]?></option>
				<?php } ?>
			</select><br>			
			<input type="text" name="book"><br>
			<input type="submit" value="Add Book" class="btn btn-default">
		</form>
			
	</body>
<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>