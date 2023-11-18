<?php
      if(isset($_POST['submit'])){

        // Change these settings to match your database configuration
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student_registration";

// Create a database connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


        $fullname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $enrollement_number = $_POST['enrollment_number'];
        $age = $_POST['age'];
        $mobile_number = $_POST['mobile_number'];
        $id = $_POST['unique'];
        $query = "UPDATE students SET 
            first_name='$fullname', 
            last_name='$lastname', 
            enrollment_number='$enrollement_number', 
            age='$age',
            mobile_number='$mobile_number'
        WHERE 
            student_id='$id'";

                      if(mysqli_query($con, $query))
                      {
                        echo "<script>
                        alert('sucessfully updated');
                        </script>";
                      }
                      else{
                        echo "<script>
                        alert('unsucessfully updated');
                        </script>";
                      }
                    // $result = mysqli_query($con, $query) or die(mysqli_error($con));
      }
      else{
        echo "<script>
                        alert('unsucessfully other updated');
                        </script>";
      }
?>