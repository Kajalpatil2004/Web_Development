<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .register {
            font-family: Arial, sans-serif;
            background-color: gray;
            margin: auto;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 800px;
            width: 400px;
        }

        .registration-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        .h1-r {
            color: black;
            margin-top: 5px;
        }

        .input-group-r {
            margin: 10px 0;
        }

        .input-group-r label {
            float: left;
            margin-left: 2.5%;
            font-weight: bold;
            font-size: 14px;
        }

        .input-group-r input {
            width: 91%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }

        .input-group-r select {
            width: 94%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }

        .input-group-r textarea {
            box-sizing: border-box;
        }

        .submit-button-r {
            background-color: #7d2ae8;
            color: #000000;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .submit-button-r:hover {
            background-color: #96c5f5;
        }
    </style>
    <title>Student Registration</title>
</head>
<body class="register">
    <div class="registration-container">
        <h1 class="h1-r">Edit Form</h1>
        <form action="edit_profile.php" method="post">
        <!-- <input type="hidden" name="student_id" value="<?php echo $student_id; ?>"> -->
            <div class="input-group-r">
                <label>First Name:</label>
                <input type="text" placeholder="First Name" name="first_name">
            </div>
            <div class="input-group-r">
                <label>Last Name:</label>
                <input type="text" placeholder="Last Name" name="last_name">
            </div>
            <div class="input-group-r">
                <label>Enrollment Number:</label>
                <input type="text" placeholder="Enrollment Number" name="enrollment_number">
            </div>
            <div class="input-group-r">
                <label>Age:</label>
                <input type="number" placeholder="Age" name="age">
            </div>
            <div class="input-group-r">
                <label>Email:</label>
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="input-group-r">
                <label>Mobile Number:</label>
                <input type="tel" placeholder="Mobile Number" name="mobile_number">
            </div>
            <div class="input-group-r">
                <label>Gender:</label>
                <input type="text" placeholder="Student_ID" name="unique">
            </div>
            <div class="input-group-r">
                <label>Address:</label>
                <textarea placeholder="Address" rows="2" name="address" ></textarea>
            </div>
            <input type="submit" class="submit-button-r" name="submit">
        </form>
    </div>
</body>
</html>
