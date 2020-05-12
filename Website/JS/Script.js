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
