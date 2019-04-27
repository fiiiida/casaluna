console.log("linked")

function verif()
{

	var name=document.getElementById("nom").value;
	if (name=="")
	{
		alert ("veuillez remplir le champ nom");
		return ;
	}
	if (name.length<3)
	{
		alert("le champ nom doit avoir un nombre de caractere superieur a 2");
	 	return ;
	 }	


	var lname=document.getElementById("prenom").value;
	if (lname=="") 
	{
		alert("veuillez remplir le champ prenom");
		return ;
	}
	if (lname.length<3)
	{
		alert("le champ prenom doit avoir un nombre de caractere superieur a 2");
		return ;		
	}

		var a=document.getElementById("password").value;
	var b=document.getElementById("password2").value;

		if (a=="")
		{
			alert ("veuillez remplir le champ password");
			return;
		}
		if (a.length<6)
		{
			alert ("le champ password doit avoir un nombre de caractere superieur a 5");
			return;
		}

		if (a.length>20)
		{
			alert ("le champ password doit avoir un nombre de caractere inferieur a 21");
			return;

		}
		
		
		if (b=="")
		{
			alert ("veuillez remplir le champ repassword");
			return;
		}

		if (a!=b)
		{
			alert("les mots de passe ne sont pas identiques");
			return;
		}


	          





}	




function showpw ()
{
	var pw=document.getElementById("password");

	if (pw.type=="text")
		pw.type= "password";
	else
		pw.type="text";



}


function verifierCaracteres(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('nom');
      
  var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}

function verifierCaractereslastname(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('prenom');
      
  var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}

function verifierCaracteresfidelite(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('fidelite');
      
  var caracteres = 'onON';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}

function verifierCaracteressexe(event) {
      
  var keyCode = event.which ? event.which : event.keyCode;
  var touche = String.fromCharCode(keyCode);
      
  var champ = document.getElementById('sexe');
      
  var caracteres = 'malef';
      
  if(caracteres.indexOf(touche) >= 0) {
    champ.value += touche;
  }
      
}




