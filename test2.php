<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "lib");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Record to DB
$book = $_POST['book'];
$author_id = $_POST['author_id'];
$sql = "INSERT INTO books (author_id, book)
VALUES ('$author_id', '$book')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>