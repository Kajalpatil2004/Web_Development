<?php
    session_start();
    include("php/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <title>Student Sign-in</title>
    <style>
        /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    background-color: blue;
    font-family: "Poppins", sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container styles */
.signup-container {
    max-width: 400px;
    background-color: brown;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    height: 600px;
}

/* Header styles */
.h1 {
    font-size: 24px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

/* Form styles */
.input-group {
    margin-bottom: 15px;
}

.input-group label {
    font-size: 16px;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

.input-group input[type="text"],
.input-group input[type="email"],
.input-group input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 2px solid #ccc;
    border-radius: 5px;
    outline: none;
}

/* Button styles */
.signup-button,
.signin-button {
    background-color: green;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    margin-top: -8px;
    margin-right: 40px;
}

.signup-button:hover,
.signin-button:hover {
    background-color: #5b13b9;
}

/* Link button styles */
.link-button,
.link-button-f {
    text-decoration: none;
    color: #7d2ae8;
    margin-left: 10px;
    font-size: 16px;
}

.link-button:hover,
.link-button-f:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>

    <?php
        
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $password = mysqli_real_escape_string($con,$_POST['password']);

            $result = mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password'") or die("error");
            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)){
                $_SESSION['valid']=$row['username'];
                $_SESSION['email']=$row['email'];
                $_SESSION['id']=$row['id'];
            }
            else{
                echo"<p class=para-w>Wrong Username or Password</p>";
                echo"<a href = 'signin.php'><button class=link-button>Go Back</button>";
            }
            if(isset($_SESSION['valid'])){
                header("Location:registration.php");
                exit();
            }
        }
        else{
    ?>

    <div class="signin-container">
        <h1 class="h1">Student Sign-in</h1>
        <form action = "" method="post">
            <div class="input-group">
                <label>Username:</label>
                <input type="text" placeholder="Username" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label>Password:</label>
                <input type="password" placeholder="Password" name="password" id="password" required>
            </div>
            <div class="link-button-f">
                <a href="forgetpass.php" >Forgot Password</a>
            </div>
            <br>
            <div>
                <button type="submit" class="signin-button" name="submit" id="submit">Sign In</button>
            </div>
        </form>
        <p>Don't have an account?<a href="registration.php" class="link-button">Sign Up</a></p>
    </div>
    <?php } ?>
</body>
</html>