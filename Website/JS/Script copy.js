var activeForm = 0;
var activeFormType = 0;
var firstSectionBG = 0;
var secondSectionBG = 0;
var thirdSectionBG = 0;

function OpenCloseForm() {
  if (activeForm == 0) {
    document.getElementById("myLoginForm").style.display = "block";
    activeForm = 1;
  } else {
    document.getElementById("myLoginForm").style.display = "none";
    document.getElementById("mySignupForm").style.display = "none";
    document.getElementById("UserInput").value = "";
    document.getElementById("EmailInput").value = "";
    document.getElementById("PassInput").value = "";
    document.getElementById("VerPassInput").value = "";
    activeFormType = 0;
    activeForm = 0;
  }
}

function OpenFormType() {
  if (activeFormType == 0) {
    document.getElementById("mySignupForm").style.display = "block";
    document.getElementById("myLoginForm").style.display = "none";
    activeFormType = 1;
  } else {
    document.getElementById("mySignupForm").style.display = "none";
    document.getElementById("myLoginForm").style.display = "block";
    document.getElementById("UserInput").value = "";
    document.getElementById("EmailInput").value = "";
    document.getElementById("PassInput").value = "";
    document.getElementById("VerPassInput").value = "";
    activeFormType = 0;
  }
}

//======\\
//Sections\\
//==========\\

function Section1() {
  if (firstSectionBG == 0) {
    firstSectionBG = 1;
    document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.5)";
    document.getElementById("Content1").style.display = "block";

    document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content2").style.display = "none";

    document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content3").style.display = "none";

    secondSectionBG = 0;
    thirdSectionBG = 0;
  } else {
    firstSectionBG = 0;
    document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content1").style.display = "none";
  }
}

function Section2() {
  if (secondSectionBG == 0) {
    secondSectionBG = 1;
    document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.5)";
    document.getElementById("Content2").style.display = "block";

    document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content1").style.display = "none";

    document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content3").style.display = "none";

    firstSectionBG = 0;
    thirdSectionBG = 0;
  } else {
    secondSectionBG = 0;
    document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content2").style.display = "none";
  }
}

function Section3() {
  if (thirdSectionBG == 0) {
    thirdSectionBG = 1;
    document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.5)";
    document.getElementById("Content3").style.display = "block";

    document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content1").style.display = "none";

    document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content2").style.display = "none";

    secondSectionBG = 0;
    firstSectionBG = 0;
  } else {
    thirdSectionBG = 0;
    document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.18)";
    document.getElementById("Content3").style.display = "none";
  }
}
