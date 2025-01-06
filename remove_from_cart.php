<?php
session_start();

if (isset($_GET['id'])) {
    // Get the book ID
    $book_id = $_GET['id'];

    // Check if the book exists in the cart
    if (isset($_SESSION['cart'][$book_id])) {
        // Remove the book from the cart
        unset($_SESSION['cart'][$book_id]);
    }

    header("Location: cart.php");
    exit();
} else {
    header("Location: cart.php");
    exit();
}
?>
