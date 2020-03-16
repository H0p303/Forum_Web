<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Style.css">
    <title>Document</title>
</head>
<body>
    
<div class="Main-Container">
    <aside>
        <nav>
            <a href="#"><img src="../Resources/Images/Home_64x64.png" alt=""></a>
            <a href="#"><img src="../Resources/Images/Bell_64x64.png" alt=""></a>
            <a href="#"><img src="../Resources/Images/User_64x64.png" alt=""></a>
        </nav>
    </aside>
    <header>
        <button class="open-button" onclick="OpenCloseForm()">Login</button>
    </header>
    <section onclick="FirstSection()" id="Card1">
        <h2 class="TitleCard" id="TitleCard1">Title Goes Here1</h2>
        <p class="PCard">Lorem Ipsum is simply dummy 
text of the printing and 
typesetting industry. Lorem Ipsum is simply dummy 
text of the printing and 
typesetting industry. </p>
    </section>
    <section onclick="SecondSection()" id="Card2">
        <h2 class="TitleCard" id="TitleCard2">Title Goes Here2</h2>
        <p class="PCard">Lorem Ipsum is simply dummy 
text of the printing and 
typesetting industry. Lorem Ipsum is simply dummy 
text of the printing and 
typesetting industry. </p>
    </section>
    <section onclick="ThirdSection()" id="Card3">
        <h2 class="TitleCard" id="TitleCard3">Title Goes Here3</h2>
        <p class="PCard">Lorem Ipsum is simply dummy 
text of the printing and 
typesetting industry. Lorem Ipsum is simply dummy 
text of the printing and 
typesetting industry. </p>
    </section>
    <main>

    

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
            <input type="text" placeholder="Username" name="uid" required>
            <input type="text" placeholder="Email" name="mail" required>
            <input type="password" placeholder="Password" name="pwd" required>
            <input type="password" placeholder="Re-type Password" name="pwd-verify" required>
            <button type="submit" name="singup-submit" class="btn">Sign Up</button>
            <button type="button" class="btn" onclick="OpenFormType()">Login</button>
        </form>
    </div>

    </main>
</div>
    

    <script>

    var activeForm = 0;
    var activeFormType = 0;
    var firstSectionBG = 0;
    var secondSectionBG = 0;
    var thirdSectionBG = 0;
    


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

      //======\\
     //Sections\\
    //==========\\

    function FirstSection(){
        if  (firstSectionBG == 0){
            firstSectionBG = 1;

            document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.5)";

        }

        else{
            firstSectionBG = 0;

            document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.18)";
        }
    }
    
    function SecondSection(){
        if  (secondSectionBG == 0){
            secondSectionBG = 1;

            document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.5)";

        }

        else{
            secondSectionBG = 0;

            document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.18)";
        }
    }

    function ThirdSection(){
        if  (thirdSectionBG == 0){
            thirdSectionBG = 1;

            document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.5)";

        }

        else{
            thirdSectionBG = 0;

            document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.18)";
        }
    }
    </script>

</body>
</html>