<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include your stylesheet links -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <title>Student Registration</title>
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
        .register-container {
            max-width: 400px;
            background-color: brown;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Header styles */
        .h1-r {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
            color: #333;
        }

        /* Form styles */
        .input-group-r {
            margin-bottom: 15px;
        }

        .input-group-r label {
            font-size: 16px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .input-group-r input[type="text"],
        .input-group-r input[type="email"],
        .input-group-r input[type="number"],
        .input-group-r input[type="tel"],
        .input-group-r input[type="date"],
        .input-group-r select,
        .input-group-r textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        /* Button styles */
        .register-button {
            background-color: green;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .register-button:hover {
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
        .para-w {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        /* Success message styles */
        .success-para {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    include("php/connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $enrollment_number = $_POST["enrollment_number"];
        $birth_date = $_POST["birth_date"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $mobile_number = $_POST["mobile_number"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];

        // Insert data into the database
        $sql = "INSERT INTO students (first_name, last_name, enrollment_number, birth_date, age, email, mobile_number, gender, address)
                VALUES ('$first_name',  '$last_name', '$enrollment_number', '$birth_date', $age, '$email', '$mobile_number', '$gender', '$address')";

        if (mysqli_query($con, $sql)) {
            echo "<p class='success-para'>Registration successful!</p>";
        } else {
            echo "<p class='para-w'>Error: " . mysqli_error($con) . "</p>";
        }
    }
    ?>

    <div class="register-container">
        <h1 class="h1-r">Student Registration</h1>
        <form action="" method="post">
            <div class="input-group-r">
                <label>First Name:</label>
                <input type="text" placeholder="First Name" name="first_name" required>
            </div>
            <div class="input-group-r">
                <label>Last Name:</label>
                <input type="text" placeholder="Last Name" name="last_name" required>
            </div>
            <div class="input-group-r">
                <label>Enrollment Number:</label>
                <input type="text" placeholder="Enrollment Number" name="enrollment_number" required>
            </div>
            <div class="input-group-r">
                <label>Birth Date:</label>
                <input type="date" name="birth_date" required>
            </div>
            <div class="input-group-r">
                <label>Age:</label>
                <input type="number" placeholder="Age" name="age" required>
            </div>
            <div class="input-group-r">
                <label>Email:</label>
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group-r">
                <label>Mobile Number:</label>
                <input type="tel" placeholder="Mobile Number" name="mobile_number" required>
            </div>
            <div class="input-group-r">
                <label>Gender:</label>
                <select name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-group-r">
                <label>Address:</label>
                <textarea placeholder="Address" rows="2" name="address" required></textarea>
            </div>
            <a href="signin.php">Already registered? Sign in here</a>
            <button type="submit" class="register-button">Register</button>
        </form>
    </div>
</body>
</html>