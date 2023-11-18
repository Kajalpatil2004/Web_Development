<?php
session_start();
include("php/connection.php");

if(isset($_POST['upload']))
    {
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp_loc = $_FILES['file']['tmp_name'];
        $file_store = "uploads/" .$file_name;

        move_uploaded_file($file_tmp_loc, $file_store);

        echo "<script>
        alert('your Document is  upload suceessfully');
        </script>";
    }

    else{
        echo "<script>
        alert('your Document is not upload');
        </script>";
    }
?>

<!-- HTML form for document upload -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your CSS styles here -->
    <style>
        /* Add your custom CSS styles here */
        /* You can include your external stylesheet links if needed */
        /* Example: <link rel="stylesheet" href="your-stylesheet.css"> */

        .input-group {
            margin: 10px 0;
        }

        .input-group label {
            float: left;
            margin-left: 2.5%;
            font-weight: bold;
            font-size: 14px;
        }

        .input-group input[type="text"],
        .input-group input[type="file"] {
            width: 91%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
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
</head>
<body>
    <!-- Add your document upload form here -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <label>Document Name:</label>
            <input type="text" name="document_name" required>
        </div>
        <div class="input-group">
            <label>Choose File:</label>
            <input type="file" name="file" required>
        </div>
        <input type="submit" class="submit-button-r" name="upload">Upload Document</button>
    </form>
</body>
</html>
