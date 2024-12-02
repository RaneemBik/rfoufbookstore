<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
    <style>
        body {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #f3f3f3;
    flex-direction: column;
    margin: 0;
}

.main {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    transition: transform 0.2s;
    width: 500px;
    text-align: center;
}

h1 {
    color: #963f7f;
}

label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: #555;
    font-weight: bold;
}

input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #963f7f;
    width: 100%;
    font-size: 16px;
}

button:hover{
    background-color:plum;
}
.wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}
a{
    text-decoration: none;
    color: white;
}
    </style>
</body>
</html>