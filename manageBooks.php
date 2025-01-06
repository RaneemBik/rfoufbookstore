<?php
session_start();
if(!isset($_SESSION['user']))
header("location: login.php?error=2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="css/manageBooksStyle.css">
</head>
<body>
<header>
        <nav>
            <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="newbook.php">Add New Book</a></li>
            </ul>
        </nav>
        </header>

      <table id="customers">
      <tr>
        <th>Book Name</th>
        <th>Author</th>
        <th>Category</th>
        <th>About</th>
        <th>Price</th>
        <th>Delete</th>
      </tr>
      <br><br>
      <h1><center>Manage books in Rfouf Book Store</center></h1>
<?php
include "inc/connection.php";

$sql = "SELECT*FROM books";
$return = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($return)){  //this will retrive data
     echo" <tr>
        <td><a href=bookDetails.php?ID=".$row['id'].">".$row['db_name']."</a></td>
        <td>".$row['db_author']."</td>
        <td>".$row['db_category']."</td>
        <td>".$row['db_description']."</td>
        <td>".$row['db_price']."</td>
        <td><a href=delete.php?ID=".$row['id']."><img src='imgs/bin.png' width=30px></a></td>
          </tr>";
}
     ?>
      </table>
</body>
</html>
