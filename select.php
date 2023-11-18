<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Event</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .select-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 500px;
            height: 285px;
            text-align: center;
        }

        .select-button {
            display: block;
            background-color: white;
            text-align: center;
            justify-content: center;
            color: black;
            border: solid 1px black;
            border-radius: 10px;
            height: 180px;
            width: 135px;
            padding: 7px;
            cursor: pointer;
            float: left;
            margin: 8px;
        }

        .select-button a {
            text-decoration: none;
            color: black;
            text-align: center;
            font-size: 18px;
        }

        h1 {
            color: black;
        }
    </style>
</head>
<body>
    <div class="select-container">
        <h1>Student Portal</h1>
        <div class="select-button">
            <a href="registration.php">Register Form</a>
        </div>
        <div class="select-button">
            <a href="editform.php">Edit Form</a>
        </div>
        <div class="select-button">
            <a href="upload.php">Upload Document</a>
        </div>
    </div>
</body>
</html>
