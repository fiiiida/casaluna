$(function(){
     $("#ajouterservice").click(function()
     {
     valid=true;
         if($("#localisation").val() == ""){
             $("#localisation").next(".error-message").fadeIn().text("Veuillez entrer votre localisation");
             valid= false;
         }
         else if(!$("#localisation").val().match(/^[a-z]+$/i))
         {
        $("#localisation").next(".error-message").fadeIn().text("champ alphabetique");
             valid= false;
         }
         else{
          $("#localisation").next(".error-message").fadeOut();
         }
         if($("#service").val()== "Veuillez Choisir Un Service"){
             $("#service").next(".error-message").fadeIn().text("choisir un service");
             valid= false;
         }
          else{
          $("#service").next(".error-message").fadeOut();
         }
         if($("#noteService").val() == ""){
             $("#noteService").next(".error-message").fadeIn().text("Veuillez entrer votre note du service");
             valid= false;
         }
          else if(($("#noteService").val() < 1 )||($("#noteService").val() > 5 )){
             $("#noteService").next(".error-message").fadeIn().text("note service entre 1 et 5");
             valid= false;
         }
          else{
          $("#noteService").next(".error-message").fadeOut();
         }
         if($("#serviceGlobal").val() == ""){
             $("#serviceGlobal").next(".error-message").fadeIn().text("Veuillez entrer votre note du service global");
             valid= false;
         }
          else if(($("#serviceGlobal").val() < 1 )||($("#serviceGlobal").val() > 5 )){
             $("#serviceGlobal").next(".error-message").fadeIn().text("note service global entre 1 et 5");
             valid= false;
         }
          else{
          $("#serviceGlobal").next(".error-message").fadeOut();
         }
         return valid;
     });
       $("#ajoutersug").click(function()
     {
     valid=true;
         if($("#sujetsug").val() == ""){
             $("#sujetsug").next(".error-message").fadeIn().text("Veuillez entrer votre sujet de suggestion");
             valid= false;
         }
         else if(!$("#sujetsug").val().match(/^[a-z]+$/i))
         {
        $("#sujetsug").next(".error-message").fadeIn().text("champ alphabetique");
             valid= false;
         }
         else{
          $("#sujetsug").next(".error-message").fadeOut();
         }
               if($("#comsug").val() == ""){
             $("#comsug").next(".error-message").fadeIn().text("Veuillez entrer votre commentaire de suggestion");
             valid= false;
         }
         else if(!$("#comsug").val().match(/^[a-z]+$/i))
         {
        $("#comsug").next(".error-message").fadeIn().text("champ alphabetique");
             valid= false;
         }
         else{
          $("#comsug").next(".error-message").fadeOut();
         }
         return valid;
     });
         $("#ajouterrec").click(function()
     {
     valid=true;
         if($("#sujetrec").val() == ""){
             $("#sujetrec").next(".error-message").fadeIn().text("Veuillez entrer votre sujet de reclamation");
             valid= false;
         }
         else if(!$("#sujetrec").val().match(/^[a-z]+$/i))
         {
        $("#sujetrec").next(".error-message").fadeIn().text("champ alphabetique");
             valid= false;
         }
         else{
          $("#sujetrec").next(".error-message").fadeOut();
         }
               if($("#comrec").val() == ""){
             $("#comrec").next(".error-message").fadeIn().text("Veuillez entrer votre commentaire de reclamation");
             valid= false;
         }
         else if(!$("#comrec").val().match(/^[a-z]+$/i))
         {
        $("#comrec").next(".error-message").fadeIn().text("champ alphabetique");
             valid= false;
         }
         else{
          $("#comrec").next(".error-message").fadeOut();
         }
         return valid;
     });
      $("#Sujet").keyup(function()
         {
       
       if(!$("#Sujet").val().match(/^[a-z]+$/i))
         {
        $("#Sujet").next(".error-message").fadeIn().text("champ alphabetique");
             valid= false;
         }
         else{
          $("#Sujet").next(".error-message").fadeOut();
         }
         return valid;              
                        
     }
                       
    );
         $("#commentaire").keyup(function()
         {
          
       if(!$("#commentaire").val().match(/^[a-z]+$/i))
         {
        $("#commentaire").next(".error-message").fadeIn().text("champ alphabetique");
             valid= false;
         }
         else{
          $("#commentaire").next(".error-message").fadeOut();
         }
         return valid;              
                        
     }                   
    );
     $("#Sujet").focusout(function()
     {
     valid=true;
            if($("#Sujet").val() == ""){
             $("#Sujet").next(".error-message").fadeIn().text("Veuillez entrer votre sujet avis");
             valid= false;
         }
         return valid;
     }
         );
        $("#commentaire").focusout(function()
     {
     valid=true;
            if($("#commentaire").val() == ""){
             $("#commentaire").next(".error-message").fadeIn().text("Veuillez entrer votre commentaire avis");
             valid= false;
         }
         return valid;
     }
         );
     });