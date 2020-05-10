<?php
    require '../Includes/dbh.inc.php';
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/Style2.css">
</head>
<body>
    
    <?php
        if(isset($_GET['submit'])){
            $SelectedRole = $_GET['UserRole$Num'];
            $uID = $_GET['Admin_uID$Num'];
            // $sql = "UPDATE users SET UserRole='$SelectedRole' WHERE UserID='$uID'";
            echo '$uID';
            // if (mysqli_query($conn, $sql)) {
            //     echo "Record updated successfully";
            //     header("Location: ../PHP/Admin.php?success=updated");
            //     exit();
    
            //     } else {
            //     echo "Error updating record: " . mysqli_error($conn);
            //     }
        }
    ?>


</body>
</html>