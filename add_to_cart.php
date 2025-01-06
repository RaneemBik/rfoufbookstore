<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $book_name = isset($_POST['book_name']) ? $_POST['book_name'] : null;
    $book_price = isset($_POST['book_price']) ? $_POST['book_price'] : null;

    if ($book_name && $book_price) {
        $_SESSION['cart'][] = [
            'name' => $book_name,
            'price' => $book_price
        ];

        echo "<script>
                alert('Book \"$book_name\" successfully added to the cart!');
                window.location.href = 'home.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Book details are missing.');
                window.location.href = 'home.php';
              </script>";
    }
}
?>



