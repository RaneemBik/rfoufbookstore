<?php
// Ensure session is started only once
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/cartStyle.css">
</head>
<body>
    <h1>Cart</h1>
    <?php 
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<table>
                <tr>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>';
        $total_price = 0;
        foreach ($_SESSION['cart'] as $book_id => $item) {
            // Ensure 'price' is valid and calculate the total
            $item_price = isset($item['price']) ? (float)$item['price'] : 0;
            $total_price += $item_price;

            // Display cart item details
            echo '<tr>
                    <td>' . htmlspecialchars($item['name']) . '</td>
                    <td>' . number_format($item_price, 2) . '$</td>
                    <td><a href="remove_from_cart.php?id=' . $book_id . '" class="remove-link">Remove</a></td>
                </tr>';
        }
        echo '</table>';

        // Display total price
        echo '<p style="text-align: center; font-weight: bold; margin-top: 20px;">Total Price: $' . number_format($total_price, 2) . '</p>';
    } else {
        // Handle empty cart
        echo '<p class="empty-cart">Your cart is empty!</p>';
    }
    ?>
    <div class="btn-container">
        <a href="home.php" class="btn">Back to Store</a>
        <a href="info.php" 
           onclick="return checkCart(<?php echo empty($_SESSION['cart']) ? 'true' : 'false'; ?>)" class="btn">Buy</a>
    </div>

    <script>
        function checkCart(isCartEmpty) {
            if (isCartEmpty) {
                alert("Sorry, your cart is empty");
                return false; 
            }
            return true;
        }
    </script>
</body>
</html>

