<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Add your CSS file here -->
    <title>Upload Document</title>
    <style>
        /* Add your additional CSS styles here */

        /* Example styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .upload-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        .h1-u {
            color: black;
            margin-top: 5px;
        }

        .input-group-u {
            margin: 10px 0;
        }

        .input-group-u label {
            float: left;
            margin-left: 2.5%;
            font-weight: bold;
            font-size: 14px;
        }

        .input-group-u input[type="file"] {
            width: 91%;
            padding: 5px;
            margin: 5px 0;
            font-size: 12px;
        }

        .submit-button-u {
            background-color: #7d2ae8;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .submit-button-u:hover {
            background-color: #96c5f5;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h1 class="h1-u">Upload Document</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group-u">
                <label>Select Document:</label>
                <input type="file" name="document" required>
            </div>
            <button type="submit" class="submit-button-u">Upload</button>
        </form>
    </div>
</body>
</html>
