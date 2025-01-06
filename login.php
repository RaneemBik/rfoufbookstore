<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/loginStyle.css">
</head>

<body>
    <div class="main">
        <h1>Rfouf Book Store</h1>
        <h3>Enter your login credentials</h3>

        <form action="loginAction.php" method="post">
            <label for="email">
                Email:
            </label>
            <input type="email" id="email" name="txtEmail" 
                placeholder="Enter your Email" required>

            <label for="password">
                Password:
            </label>
            <input type="password" id="password" name="txtPassword" 
                placeholder="Enter your Password" required>

            <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
            <div class="wrap">
                <button type="button">
                   <a href="home.php">Go back home</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>