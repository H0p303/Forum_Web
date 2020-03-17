



//If Section one clicked do this

    document.getElementById("Card1").onclick = function(){
        //Applies changes to section one and removes changes on setion two and three
        document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.5)";
        document.getElementById("Content1").style.display = "block";

        document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content2").style.display = "none";

        document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content3").style.display = "none";
    }
//If Section two clicked do this
    document.getElementById("Card2").onclick = function(){
        //Applies changes to section two and removes changes on section one and three
        document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.5)";
        document.getElementById("Content2").style.display = "block";

        document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content1").style.display = "none";

        document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content3").style.display = "none";
    }
//If Section three clicked do this
    document.getElementById("Card3").onclick = function(){
        //Applies changes to section three and removes changes on section one and two
        document.getElementById("Card3").style.backgroundColor = "rgba(0,0,0,0.5)";
        document.getElementById("Content3").style.display = "block";

        document.getElementById("Card1").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content1").style.display = "none";

        document.getElementById("Card2").style.backgroundColor = "rgba(0,0,0,0.18)";
        document.getElementById("Content2").style.display = "none";
    }

