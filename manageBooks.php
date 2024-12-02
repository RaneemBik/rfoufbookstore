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
</head>
<body>
<header>
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="newbook.php">Add New Book</a></li>
            </ul>
        </nav>
        <div class="actions">
        <a href="logout.php" class="btn-logout">Logout</a>
          </div>
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
      <h1><center>In this selection you can manage books that are added to Rfouf Book Store</center></h1>
<?php
include "inc/connection.php";

$sql = "SELECT*FROM books";
$return = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($return)){  //this will retrive data
     echo" <tr>
        <td><a href=bookDetails.php?ID=".$row['id'].">".$row['db_name']."</a></td>
        <td>".$row['db_author']."</td>
        <td>".$row['db_category']."</td>
        <td>".$row['db_about']."</td>
        <td>".$row['db_price']."</td>
        <td><a href=delete.php?ID=".$row['id']."><img src='imgs/bin.png' width=30px></a></td>
          </tr>";
}
     ?>
      </table>

      <style>
       #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #963f7f;
  color: white;
}
header {
  display: flex;
  justify-content: space-between; 
  align-items: center;
  padding: 10px 20px;
  background-color: #963f7f;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 15px;
}
nav {
  flex-grow: 1;
  display: flex; 
  justify-content: center; 
}

nav ul {
  display: flex; 
  gap: 15px;
  list-style: none;
}

nav ul li a {
  text-decoration: none;
  color: white;
  font-weight: bold;
}

nav ul li a:hover {
  color: #4d4d4e;
  text-decoration: underline;
}
.btn-logout {
  padding: 10px 20px;
  color: white;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s;
}

.book-list {
  padding: 20px;
  background-color: #f8f8f8;
  text-align: center;
}

.book-list h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #4d4d4e;
}


.book-cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
  justify-items: center;
}
.book-card img {
  width: 200px; 
  height: 300px;
  object-fit: cover; 
}

.book-card {
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: center;
  width: 100%;
}

.book-card img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
}

.book-card h3 {
  font-size: 1.2rem;
  margin: 10px 0;
}

.book-card .author {
  font-size: 1rem;
  color: #555;
  margin: 5px 0;
}

.book-card .price {
  font-size: 1.2rem;
  color: #963f7f;
  font-weight: bold;
  margin: 10px 0;
}

.book-card button {
  background-color: #454545;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s ease;
}

.book-card button:hover {
  background-color: #525354;
}

.book-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}
.btn2{
  background-color: #963f7f;
  color: #f8f8f8;
  margin-left: 1000px;
  height: 50px;
  width: 150px;
  cursor: pointer;
  border-color: #525354;
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  border-radius: 5px;
}

.btn2 a {
  text-decoration: none;
  color: #f8f8f8;
}
.btn2:hover{
  background-color: #525354;
}
.btns{
display:block;
background-color: #963f7f;
height: 50px;
width: 150px;
cursor: pointer;
border-color: #525354;
font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
border-radius: 5px;
}
.btns a{
text-decoration: none;
color: #f8f8f8;
}
.btns:hover{
background-color: #716868;
}
.btn-container {
margin-top: 20px;
display: flex;
justify-content: center;
gap: 20px;
margin-left: 100px;
}
      </style>
</body>
</html>
