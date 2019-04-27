
console.log("linked");

function isNotEmpty(s) {return s.replace(/^\s+|\s+$/g,"")!="";}

function reset() {
    document.getElementById("f").reset();
}

function valid(){

console.clear();

var reference = document.getElementById("reff").value;
var dd = document.getElementById("deb").value;
var df = document.getElementById("fin").value;
var pr = document.getElementById("%").value;

if(reference<=0){
    alert("Reference ne peut pas etre ni negatif ni null !");
    
  }

if ((reference=="") || (dd=="") || (df=="") || (pr=="")) {
  alert("Veuillez verifier votre choix")
  return
}

else{
  console.log("valider");
  alert("Vous pouvez valider l'ajout"); 
}

}

function valid2() {
  console.clear();
 var nomexpo = document.getElementById("nome").value;

if ((nomexpo=="")) {
  alert("Veuillez entrer le nom de l'expo !")
  return
}
else{
  console.log("valider");
  alert("Vous pouvez valider l'ajout");
}

}







