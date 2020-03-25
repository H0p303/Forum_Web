<?php
    session_start();
?>


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
        <p class="PCard">
        Lorem Ipsum is simply dummy 
        text of the printing and 
        typesetting industry. Lorem Ipsum is simply dummy 
        text of the printing and 
        typesetting industry.
        </p>
    </section>
    <section onclick="SecondSection()" id="Card2">
        <h2 class="TitleCard" id="TitleCard2">Title Goes Here2</h2>
        <p class="PCard">
        Lorem Ipsum is simply dummy 
        text of the printing and 
        typesetting industry. Lorem Ipsum is simply dummy 
        text of the printing and 
        typesetting industry.
        </p>
    </section>
    <section onclick="ThirdSection()" id="Card3">
        <h2 class="TitleCard" id="TitleCard3">Title Goes Here3</h2>
        <p class="PCard">
        Lorem Ipsum is simply dummy 
        text of the printing and 
        typesetting industry. Lorem Ipsum is simply dummy 
        text of the printing and 
        typesetting industry.
        </p>
    </section>
    <main>



<?php

    // if(isset($_SESSION['userID'])){
    //     echo'<div class="form-popup" id="myLoginForm">
    //     <form action="../Includes/Login.inc.php" class="form-container" method="post">
    //       <h1>Login</h1>
    //       <label for="email"><b>Email</b></label>
    //       <input type="text" placeholder="Enter Email" name="mailuid" required/>
    //       <label for="psw"><b>Password</b></label>
    //       <input type="password" placeholder="Enter Password" name="pwd" required/>
    //       <button type="submit" class="btn" name="Login-Submit">Login</button>
    //       <button type="button" class="btn" onclick="OpenFormType()">Sign Up</button>
    //     </form>
    //   </div>
  
    //   <div class="form-popup" id="mySignupForm">
    //       <form method="post" class="form-container" action="../Includes/Signup.inc.php">
    //           <h1>Sign Up</h1>
    //           <input type="text" placeholder="Username" name="uid" required>
    //           <input type="text" placeholder="Email" name="mail" required>
    //           <input type="password" placeholder="Password" name="pwd" required>
    //           <input type="password" placeholder="Re-type Password" name="pwd-verify" required>
    //           <button type="submit" name="singup-submit" class="btn">Sign Up</button>
    //           <button type="button" class="btn" onclick="OpenFormType()">Login</button>
    //       </form>
    //   </div>';
    // }
    // else{
    //     echo'<div class="form-popup" id="myLougoutForm">
    //     <form action="../Includes/Logout.inc.php" method="post">
    //         <button type="submit">Logout</button>
    //     </form>
    // </div>';
    // }

?>

    <!-- <div class="form-popup" id="myLoginForm">
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
    </div> -->

    <div class="form-popup" id="myLougoutForm">
        <form action="../Includes/Logout.inc.php" method="post">
            <button type="submit">Logout</button>
        </form>
    </div>

    <Div class="MainContent" id="Content1">
        <h1>Lorem 1 dolor</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae natus facilis quasi sunt nemo blanditiis atque maxime cumque dolorem! Et, aspernatur dignissimos sit optio voluptate neque quo alias ducimus unde, facilis iusto! Non dolor id eum velit ratione quasi fugiat dolorum necessitatibus quis. Nam sit doloremque odio repellat rerum quia illo molestias praesentium consequatur eum, suscipit vel ipsam voluptate deleniti, reiciendis repudiandae autem iusto earum consectetur. Perspiciatis autem aspernatur tenetur vel iusto numquam soluta, nihil non ratione, possimus fuga placeat dolores, exercitationem quod eum officiis nesciunt explicabo sequi minima dignissimos necessitatibus dolore? Maxime repudiandae quidem delectus incidunt numquam, officia error, veritatis amet dolore, eveniet cumque consequuntur! Adipisci temporibus impedit fugiat quidem ad eveniet, tenetur soluta possimus fuga deserunt error eos odit doloribus. Blanditiis minus vero exercitationem perspiciatis mollitia minima voluptate beatae, amet earum! Odio amet asperiores nostrum inventore itaque impedit maiores ipsa, deserunt, aut quas, libero eligendi quae in? Est alias voluptate ex nesciunt quae numquam commodi dignissimos voluptates repudiandae recusandae eum perspiciatis exercitationem quis doloremque aliquam aspernatur, expedita architecto hic accusamus? Aperiam, tenetur nam harum asperiores fuga a. Sed quas dolores accusantium soluta hic quaerat reiciendis officia vel nulla consequatur itaque fuga nobis repellendus asperiores incidunt sint voluptates, minus, iste ipsam? Mollitia ad, dolorum impedit molestias sunt tempore nostrum rerum facere, deleniti aliquid illum qui ab doloribus labore laborum ullam obcaecati earum placeat pariatur, iusto aperiam. Tempore repudiandae ratione praesentium ut at libero est deleniti explicabo amet. Pariatur vitae quibusdam vero nam minima ea aliquam libero totam id.</p>
    </Div>
    <Div class="MainContent" id="Content2">
        <h1>Lorem 2 dolor</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae natus facilis quasi sunt nemo blanditiis atque maxime cumque dolorem! Et, aspernatur dignissimos sit optio voluptate neque quo alias ducimus unde, facilis iusto! Non dolor id eum velit ratione quasi fugiat dolorum necessitatibus quis. Nam sit doloremque odio repellat rerum quia illo molestias praesentium consequatur eum, suscipit vel ipsam voluptate deleniti, reiciendis repudiandae autem iusto earum consectetur. Perspiciatis autem aspernatur tenetur vel iusto numquam soluta, nihil non ratione, possimus fuga placeat dolores, exercitationem quod eum officiis nesciunt explicabo sequi minima dignissimos necessitatibus dolore? Maxime repudiandae quidem delectus incidunt numquam, officia error, veritatis amet dolore, eveniet cumque consequuntur! Adipisci temporibus impedit fugiat quidem ad eveniet, tenetur soluta possimus fuga deserunt error eos odit doloribus. Blanditiis minus vero exercitationem perspiciatis mollitia minima voluptate beatae, amet earum! Odio amet asperiores nostrum inventore itaque impedit maiores ipsa, deserunt, aut quas, libero eligendi quae in? Est alias voluptate ex nesciunt quae numquam commodi dignissimos voluptates repudiandae recusandae eum perspiciatis exercitationem quis doloremque aliquam aspernatur, expedita architecto hic accusamus? Aperiam, tenetur nam harum asperiores fuga a. Sed quas dolores accusantium soluta hic quaerat reiciendis officia vel nulla consequatur itaque fuga nobis repellendus asperiores incidunt sint voluptates, minus, iste ipsam? Mollitia ad, dolorum impedit molestias sunt tempore nostrum rerum facere, deleniti aliquid illum qui ab doloribus labore laborum ullam obcaecati earum placeat pariatur, iusto aperiam. Tempore repudiandae ratione praesentium ut at libero est deleniti explicabo amet. Pariatur vitae quibusdam vero nam minima ea aliquam libero totam id.</p>
    </Div>
    <Div class="MainContent" id="Content3">
        <h1>Lorem 3 dolor</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae natus facilis quasi sunt nemo blanditiis atque maxime cumque dolorem! Et, aspernatur dignissimos sit optio voluptate neque quo alias ducimus unde, facilis iusto! Non dolor id eum velit ratione quasi fugiat dolorum necessitatibus quis. Nam sit doloremque odio repellat rerum quia illo molestias praesentium consequatur eum, suscipit vel ipsam voluptate deleniti, reiciendis repudiandae autem iusto earum consectetur. Perspiciatis autem aspernatur tenetur vel iusto numquam soluta, nihil non ratione, possimus fuga placeat dolores, exercitationem quod eum officiis nesciunt explicabo sequi minima dignissimos necessitatibus dolore? Maxime repudiandae quidem delectus incidunt numquam, officia error, veritatis amet dolore, eveniet cumque consequuntur! Adipisci temporibus impedit fugiat quidem ad eveniet, tenetur soluta possimus fuga deserunt error eos odit doloribus. Blanditiis minus vero exercitationem perspiciatis mollitia minima voluptate beatae, amet earum! Odio amet asperiores nostrum inventore itaque impedit maiores ipsa, deserunt, aut quas, libero eligendi quae in? Est alias voluptate ex nesciunt quae numquam commodi dignissimos voluptates repudiandae recusandae eum perspiciatis exercitationem quis doloremque aliquam aspernatur, expedita architecto hic accusamus? Aperiam, tenetur nam harum asperiores fuga a. Sed quas dolores accusantium soluta hic quaerat reiciendis officia vel nulla consequatur itaque fuga nobis repellendus asperiores incidunt sint voluptates, minus, iste ipsam? Mollitia ad, dolorum impedit molestias sunt tempore nostrum rerum facere, deleniti aliquid illum qui ab doloribus labore laborum ullam obcaecati earum placeat pariatur, iusto aperiam. Tempore repudiandae ratione praesentium ut at libero est deleniti explicabo amet. Pariatur vitae quibusdam vero nam minima ea aliquam libero totam id.</p>
    </Div>

    </main>
</div>
    
<script src="../JS/Script.js"></script>

</body>
</html>