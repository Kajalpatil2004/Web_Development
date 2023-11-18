<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <title>Student Signup</title>
    <style>
        /* Reset some default styles */
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    background-color: gray;
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
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
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
.signup-button {
    background-color: #7d2ae8;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
}

.signup-button:hover {
    background-color: #5b13b9;
}

/* Link button styles */
.link-button {
    text-decoration: none;
    color: #7d2ae8;
    margin-left: 10px;
}

.link-button:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <?php
        include("php/connection.php");
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Verifying unique email
            $verify_query = mysqli_query($con,"SELECT email FROM users WHERE email ='$email'");
            if(mysqli_num_rows($verify_query) != 0){
                echo "<p class='para'>This email is already in use. Please try another email.</p>";
                echo "<a href='javascript:self.history.back()'><button class='link-button'>Go Back</button></a>";
            }
            else {
                mysqli_query($con,"INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')") or die("Error");
                echo "<p class='para'>Signup Successful!</p>";
                echo "<a href='signin.php'><button class='link-button'>Login Now</button></a>";
            }
        }
        else {
    ?>
    <div class="signup-container">
        <h1 class="h1">Student Signup</h1>
        <form action="" method="post">
            <div class="input-group">
                <label>Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <label>Username:</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <label>Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="signup-button" name="submit" id="submit">Signup</button>
        </form>
        <p>Already have an account? <a href="signin.php" class="link-button">Sign In</a></p>
    </div>
    <?php } ?>
</body>
</html>
