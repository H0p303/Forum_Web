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
        echo "<table><tr><th>ID</th><th>UserName</th><th>Name</th><th>Role</th><th></th></tr>";
        while($row = $result -> fetch_assoc()){
            $Num++;
            echo "<tr><td>" . $row["UserID"]. "</td><td>" . $row["UserName"]. "</td><td>" . $row["UserEmail"] . "</td><td>";
            if($row["UserRole"] == "Admin"){
                echo "<form action='../Includes/UserRole.inc.php' method='post'>
    
                <input type='radio' name='UserRole$Num' id='Admin' checked>
                <label for='Admin'>Admin</label>
                <input type='radio' name='UserRole$Num' id='User'>
                <label for='User'>User</label>";
            }
            else if($row["UserRole"] == "User"){
                echo "<form action='../Includes/UserRole.inc.php' method='post'>
    
                <input type='radio' name='UserRole$Num' id='Admin'>
                <label for='Admin'>Admin</label>
                <input type='radio' name='UserRole$Num' id='User' checked>
                <label for='User'>User</label>";
            }
        }
        
        echo '<td><button>Save</button></td></form></tr></table>';
    }
    else{
        "0 results";
    }
?>

<br>
<br>
</body>
</html>