<?php
include("inc/connection.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$name = $_POST['txtName'];
$email = $_POST['txtemail'];
$password = $_POST['txtaddress'];
$city = $_POST['txtcity'];
$state = $_POST['txtstate'];
$namecard = $_POST['txtCardName'];
$cnumber = $_POST['txtCardNumber'];
$exp = $_POST['txtExpYear'];
$cvv = $_POST['txtCvv'];

// Check if email already exists
$query = "SELECT * FROM buy WHERE db_email = '$email'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Already registered with this email. Thank you, we will send you email when the books are ready to be delivered!'); window.location.href='info.php';</script>";
    exit;
}

// Insert user information
$insertQuery = "INSERT INTO buy (db_name, db_email, db_password, db_city, db_state, db_namecard, db_cnumber, db_exp, db_cvv)
                VALUES ('$name', '$email', '$password', '$city', '$state', '$namecard', '$cnumber', '$exp', '$cvv')";

if (mysqli_query($con, $insertQuery)) {
    // Save purchased books to the `purchased_books` table
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $book) {
            $book_name = $book['name'];
            $price = $book['price'];

            $purchaseQuery = "INSERT INTO purchased_books (email, book_name, price) VALUES ('$email', '$book_name', '$price')";
            mysqli_query($con, $purchaseQuery);
        }
    }

    // Clear the cart
    unset($_SESSION['cart']);

    // Redirect with success message
    echo "<script>alert('Your information has been saved successfully. We will send you an email when the books are ready to be delivered!'); window.location.href='home.php';</script>";
} else {
    echo "<script>alert('An error occurred while saving your information. Please try again later.'); window.location.href='info.php';</script>";
}

mysqli_close($con);
?>

