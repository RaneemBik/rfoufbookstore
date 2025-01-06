<?php 
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

include "inc/connection.php";

$categoryQuery = "SELECT DISTINCT db_category FROM books";
$categoryResult = $con->query($categoryQuery);

$categoryFilter = isset($_POST['category']) ? $_POST['category'] : '';

$sql = "SELECT id, db_name, db_price, db_image, db_category , db_description FROM books";
if ($categoryFilter) {
    $sql .= " WHERE db_category = '$categoryFilter'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
<header>
    <div class="h1">
        <h1>Rfouf</h1>
    </div>
    <nav>
        <ul>
            <li><a href="category.php">Categories</a></li>   
            <li><a href="cart.php">Your Cart</a></li>   
            <li>
                <form method="POST" action="">
                    <select name="category" class="category-dropdown" onchange="this.form.submit()">
                        <option value="">All Categories</option>
                        <?php
                        if ($categoryResult->num_rows > 0) {
                            while ($category = $categoryResult->fetch_assoc()) {
                                $selected = ($category['db_category'] == $categoryFilter) ? 'selected' : '';
                                echo "<option value='{$category['db_category']}' $selected>{$category['db_category']}</option>";
                            }
                        }
                        ?>
                    </select>
                </form>
            </li>  
        </ul>
    </nav>
</header>

<section class="book-list">
    <h2>Books</h2>
    <div class="book-cards">
    <?php
    if ($result->num_rows > 0) {
        // Iterate through the fetched books
        while ($book = $result->fetch_assoc()) {
            $bookName = $book['db_name'];
            $bookPrice = $book['db_price'];
            $bookImage = $book['db_image'];
            $bookDescription = $book['db_description']; 

            echo "
                <div class='book-card' title='Description: $bookDescription'>
                <img src='http://localhost/halawebpro2/1/bassel/hala/uploads/$bookImage'>
                    <h3 name='title'>$bookName</h3>
                    <p class='price' name='txtPrice'>$bookPrice</p>
                    <form method='POST' action='add_to_cart.php'>
                        <input type='hidden' name='book_name' value='$bookName'>
                        <input type='hidden' name='book_price' value='$bookPrice'>
                        <button type='submit' class='thebttn'>
                            <img src='imgs/carts3.png'>Add to Cart
                        </button>
                    </form>
                </div>
            ";
        }
    } else {
        echo "<p>No books available</p>";
    }
    ?>
    </div>
</section>
</body>
</html>
