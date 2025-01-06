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
    <title>Admin Dashboard - Bookstore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: #fff;
            position: fixed;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            padding: 15px 20px;
            display: block;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .main {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            margin: 0;
        }

        .header .profile {
            display: flex;
            align-items: center;
        }

        .header .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .dashboard {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            flex: 1 1 calc(25% - 20px);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h3 {
            margin: 10px 0;
        }

        .card i {
            font-size: 30px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Bookstore Admin</h2>
        <a href="admin.php"><i class="fas fa-home"></i> Dashboard</a>
        <a href="manageBooks.php"><i class="fas fa-book"></i> Manage Books</a>
        <a href="newbook.php"><i class="fas fa-book"></i> Add Books</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        
    </div>

    <div class="main">
        <div class="header">
            <h1>Admin Dashboard</h1>
          
        </div>

        <div class="dashboard">
            <div class="card">
                <i class="fas fa-book"></i>
               <a href="manageBooks.php"> <h3>Total Books</h3></a>
            </div>

            <div class="card">
            <i class="fas fa-shopping-cart"></i>
                <a href="orders.php"><h3>Orders</h3></a>
            </div>
    </div>
</body>
</html>
