<?php
    session_start();
    require '../Includes/dbh.inc.php';

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

    $sql = "SELECT UserID, UserName, UserEmail, UserRole FROM users";
    $result = $conn -> query($sql);
    $Num = 0;
    if ($result -> num_rows > 0){
        echo "<table><tr><th>ID</th><th>UserName</th><th>UserEmail</th><th>Role</th></tr>";
        while($row = $result -> fetch_assoc()){
            $Num++;
            echo "<tr><td>" . $row["UserID"]. "</td><td>" . $row["UserName"]. "</td><td>" . $row["UserEmail"] . "</td><td>" . "<form method='post' action='../Includes/EditUser.inc.php'><select name='UserRole$Num'>";
            if($row["UserRole"] == "Admin"){
                echo "<option value='Admin' id='$Num' selected>Admin</option><option id='$Num' value='User'>User</option></select><td><button type='submit' name='submit'>Save</button></form></td>";
            }
            else if($row["UserRole"] == "User"){
                echo "<option value='Admin' id='$Num'>Admin</option><option value='User' id='$Num' selected>User</option></select><td><button type='submit' name='submit'>Save</button></form></td>";
            }
        }
        
        echo "</tr></table>";
    }
    else{
        "0 results";
    }
?>

<br>
<br>
</body>
</html>