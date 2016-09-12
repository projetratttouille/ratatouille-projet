//init properties when loading
function init(){
  restoClick("ratatouille");
}

//function click (for images 'restos')
function restoClick(ID){
//scale all to 1
  document.getElementById('ratatouille').style.transform = "scale(1,1)";
  document.getElementById('laloupe').style.transform = "scale(1,1)";
  document.getElementById('lyon').style.transform = "scale(1,1)";
  document.getElementById('bordeaux').style.transform = "scale(1,1)";

//scale my image
  document.getElementById(ID).style.transform = "scale(1.02,1.02)";
//change the image for restorants presentation
  document.getElementById('presResto').src = "images/"+ID+".png";
//change the text depending the restorant
  if(ID == "ratatouille"){
    document.getElementById("textResto").innerHTML = "Les restaurants Ratatouille, etc...";
  }
  else if(ID == "laloupe"){
    document.getElementById("textResto").innerHTML = "Le restaurant de Laloupe, blablabla...";
  }
  else if(ID == "lyon"){
    document.getElementById("textResto").innerHTML = "Le restaurant de Lyon, blablabla...";
  }
  else /*(ID == "bordeaux")*/{
    document.getElementById("textResto").innerHTML = "Le restaurant de Bordeaux, blablabla...";
  };
}
