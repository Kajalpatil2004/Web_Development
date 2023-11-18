<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
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
        .pass-container {
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
        .pass-button {
            background-color: #7d2ae8;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .pass-button:hover {
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

        /* Error message styles */
        .para {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php
    include("php/connection.php");
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $npassword = $_POST['npassword'];
        $cpassword = $_POST['cpassword'];

        // Verifying email
        $verify_query = mysqli_query($con, "SELECT email FROM user WHERE email = '$email'");
        if (mysqli_num_rows($verify_query) != 0) {
            if ($npassword == $cpassword) {
                // Use UPDATE to change the password
                mysqli_query($con, "UPDATE user SET password = '$cpassword' WHERE email = '$email'") or die("Error");
                echo "<p class='para'>Password Change Successful!</p>";
                echo "<a href='signin.php'><button class='link-button'>Login Now</button></a>";
            } else {
                echo "<p class='para'>New password and Confirm password must be the same</p>";
                echo "<a href='javascript:self.history.back()'><button class='link-button'>Go Back</button></a>";
            }
        } else {
            echo "<p class='para'>Email is not valid</p>";
            echo "<a href='javascript:self.history.back()'><button class='link-button'>Go Back</button></a>";
        }
    } else {
    ?>
        <div class="pass-container">
            <h1 class="h1">Forget Password</h1>
            <form method="post">
                <div class="input-group">
                    <label>Email:</label>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label>Enter New Password:</label>
                    <input type="password" placeholder="New Password" name="npassword" id="npassword" required>
                </div>
                <div class="input-group">
                    <label>Confirm Password:</label>
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required>
                </div>
                <button type="submit" class="pass-button" name="submit" id="submit">Reset Password</button>
            </form>
        </div>
    <?php } ?>
</body>

</html>
