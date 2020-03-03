<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Document</title>
</head>
<body>
    
    <aside>
        <nav>
            <a href="#"><img src="../Resources/Images/Home_64x64.png" alt=""></a>
            <a href="#"><img src="../Resources/Images/Bell_64x64.png" alt=""></a>
            <a href="#"><img src="../Resources/Images/User_64x64.png" alt=""></a>
        </nav>
    </aside>
    <header>

    

    </header>
    <section></section>
    <section></section>
    <section></section>
    <main>

    <button class="open-button" onclick="OpenCloseForm()">Login</button>

    <div class="form-popup" id="myForm">
      <form action="../Includes/Login.inc.php" class="form-container" method="post">
        <h1>Login</h1>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="mailuid" required/>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required/>
        <button type="submit" class="btn" name="Login-Submit">Login</button>
        <button type="button" class="btn"><a href="#">Sign Up</a></button>
        <!-- <button type="button" class="btn cancel" onclick="OpenCloseForm()">Close</button> -->
      </form>
    </div>

    </main>

    <script>

    var active = 0;

    function OpenCloseForm() {

    if (active==0){
        document.getElementById("myForm").style.display = "block";
        active=1;
    }
    else{
        document.getElementById("myForm").style.display = "none";
        active=0;
    }

    }

    //   function openForm() {
    //     document.getElementById("myForm").style.display = "block";
    //   }

    //   function closeForm() {
    //     document.getElementById("myForm").style.display = "none";
    //   }
    </script>

</body>
</html>