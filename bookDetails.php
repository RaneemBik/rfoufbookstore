<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="css/bookDetails.css">
</head>
<body>
<header>
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="newbook.php">Add New Book</a></li>
            <li><a href="manageBooks.php">Manage New Books</a></li>
            </ul>
        </nav>
    </header>
<?php
include "inc/connection.php";

$artID = $_GET['ID'];

$sql = "SELECT*FROM books WHERE id='$artID'";
$return = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($return)){
     echo"
      <h2>Book Name: ".$row['db_name']."</h2><br>
      Authour:  ".$row['db_author']."<br><br>
      Price of the book:  ".$row['db_price']."<br><br>
      Category:  ".$row['db_category']."<br><br>
      About the book:  ".$row['db_description']."<br><br>
        <a href=delete.php?ID=".$row['id']."><img src='imgs/bin.png' width=30px></a>
          ";
}
     ?>
     <a href="manageBooks.php"><img src="imgs/arrow.png" width=30px></a>
</body>
</html>
