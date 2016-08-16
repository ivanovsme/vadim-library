<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "lib");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Record to DB
$author = $_POST['author'];
$sql = "INSERT INTO author (author_name) VALUES ('$author')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>