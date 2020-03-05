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

    <div class="form-popup" id="myLoginForm">
      <form action="../Includes/Login.inc.php" class="form-container" method="post">
        <h1>Login</h1>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="mailuid" required/>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required/>
        <button type="submit" class="btn" name="Login-Submit">Login</button>
        <button type="button" class="btn" onclick="OpenFormType()">Sign Up</button>
      </form>
    </div>

    <div class="form-popup" id="mySignupForm">
        <form method="post" class="form-container" action="../Includes/Signup.inc.php">
            <h1>Sign Up</h1>
            <input type="text" placeholder="Username" name="uid">
            <input type="text" placeholder="Email" name="mail">
            <input type="password" placeholder="Password" name="pwd">
            <input type="password" placeholder="Re-type Password" name="pwd-verify">
            <button type="submit" name="singup-submit" class="btn">Sign Up</button>
            <button type="button" class="btn" onclick="OpenFormType()">Login</button>
        </form>
    </div>

    </main>

    <script>

    var activeForm = 0;
    var activeFormType = 0;

    function OpenCloseForm() {

        if (activeForm == 0){
            document.getElementById("myLoginForm").style.display = "block";
            activeForm = 1;
        }
        else{
            document.getElementById("myLoginForm").style.display = "none";
            document.getElementById("mySignupForm").style.display = "none";
            activeFormType = 0;
            activeForm = 0;
        }
    }

    function OpenFormType(){
        if(activeFormType == 0){
            document.getElementById("mySignupForm").style.display = "block";
            document.getElementById("myLoginForm").style.display = "none";
            activeFormType = 1;
        }
        else{
            document.getElementById("mySignupForm").style.display = "none";
            document.getElementById("myLoginForm").style.display = "block";
            activeFormType = 0;
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