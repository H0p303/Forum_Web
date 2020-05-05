<?php

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

    if ($result -> num_rows > 0){
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr><td>" . $row["UserID"]. "</td><td>" . $row["UserName"]. " " . $row["UserEmail"] . " " . $row["UserRole"] . "</td></tr>";
        }
        echo '</table>';
    }
    else{
        "0 results";
    }
?>


</body>
</html>