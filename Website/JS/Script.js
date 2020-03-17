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
        document.getElementById("Content1").style.display = "block";
    }

    else{
        firstSectionBG = 0;
        document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content1").style.display = "none";
    }
}

function SecondSection(){
    if  (secondSectionBG == 0){
        secondSectionBG = 1;
        document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.5)";
        document.getElementById("Content2").style.display = "block";

    }

    else{
        secondSectionBG = 0;
        document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content2").style.display = "none";
    }
}

function ThirdSection(){
    if  (thirdSectionBG == 0){
        thirdSectionBG = 1;
        document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.5)";
        document.getElementById("Content3").style.display = "block";

    }

    else{
        thirdSectionBG = 0;
        document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content3").style.display = "none";
    }
}