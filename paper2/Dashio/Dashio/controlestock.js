console.log("linked");

function validStock(){

console.clear();

var libelle = document.getElementById("lib").value;
var prix = document.getElementById("px").value;
var quantite = document.getElementById("qu").value;

if(prix<=0 && quantite<=0){
    alert("Quantite ou/et Prix ne peut pas etre ni negatif ni null !");
    
  }

if ((libelle=="") || (prix=="") || (quantite=="")) {
  alert("Veuillez verifier votre choix")
  return
}
else{
  console.log("valider");
  alert("Promotion ajouté avec Succès");
  
}
}