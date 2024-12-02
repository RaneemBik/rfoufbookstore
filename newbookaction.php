<?php
include 'inc/connection.php'; 

$db_name = $_POST['txtname'];
$db_author = $_POST['txtauthor'];
$db_category = $_POST['txtcategory'];
$db_about = $_POST['txtabout'];
$db_price = $_POST['txtprice'];

$query = "SELECT * FROM books WHERE db_name = '$db_name' AND db_author = '$db_author'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) { // if the book is requested to been added (mysqli to count the rows)
    echo "<script>alert('The book is already requested to be added.'); window.history.back();</script>";
    exit;
}

// If the book doesn't exist, insert the new book into the database
$insertQuery = "INSERT INTO books (db_name, db_author, db_category, db_about, db_price) 
                VALUES ('$db_name', '$db_author', '$db_category', '$db_about', '$db_price')";

// Perform the insertion
if (mysqli_query($con, $insertQuery)) {
    // book has been added
    echo "<script>alert('Book added successfully!'); window.location.href='newbook.php';</script>";
} else {
    // Does not added
    echo "<script>alert('The book already has been requested to be added'); window.history.back();</script>";
}
mysqli_close($con); // when complete then close 
?>
