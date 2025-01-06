<?php
include 'inc/connection.php';

$db_name = mysqli_real_escape_string($con, $_POST['txtname']);
$db_author = mysqli_real_escape_string($con, $_POST['txtauthor']);
$db_category = mysqli_real_escape_string($con, $_POST['txtcategory']);
$db_description = mysqli_real_escape_string($con, $_POST['txtabout']);
$db_price = mysqli_real_escape_string($con, $_POST['txtprice']);

// File upload
$targetDir = "uploads/";
$fileName = basename($_FILES["fileToUpload"]["name"]);
$targetFile = $targetDir . $fileName;

// Check if the book already exists
$query = "SELECT * FROM books WHERE db_name = '$db_name' AND db_author = '$db_author'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('The book is already in the system.'); window.history.back();</script>";
    exit;
}

// Handle file upload
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    $path = $fileName; // Save only the filename to the database
    $insertQuery = "INSERT INTO books (db_name, db_author, db_category, db_description, db_price, db_image) 
                    VALUES ('$db_name', '$db_author', '$db_category', '$db_description', '$db_price', '$path')";

    if (mysqli_query($con, $insertQuery)) {
        echo "<script>alert('Book added successfully!'); window.location.href='newbook.php';</script>";
    } else {
        echo "<script>alert('There was an error adding the book.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Sorry, there was an error uploading your file.'); window.history.back();</script>";
}

mysqli_close($con);
?>
