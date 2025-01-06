<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM purchased_books";
$result = $conn->query($sql);


if (!$result) {
    die("Error executing query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
<link rel="stylesheet" href="css/orderStyle.css">
</head>
<body>
    <h1>Ordered Books</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Book Name</th>
            <th>Price</th>
            <th>Purchase Date</th>
        </tr>
        <?php
include "inc/connection.php"; 

$sql = "SELECT * FROM purchased_books";
$return = mysqli_query($con, $sql); 

while ($row = mysqli_fetch_assoc($return)) { 
    echo "
    <tr>
        <td>".$row['id']."</td>
        <td>".$row['email']."</td>
        <td>". $row['book_name']."</td>
        <td>". $row['price']."$</td>
        <td>". $row['purchase_date']."</td>
    </tr>";
}
?>

    </table>

    <a href="admin.php" class="back-btn">Back to Dashboard</a>
</body>
</html>
