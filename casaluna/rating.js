var rating = {
  highlight : function(selected){
  // highlight() : update the number of stars on mouse over
  // PARAM selected : number of stars selected

    var stars = document.getElementsByClassName("star");
    for (var i=0; i<stars.length; i++) {
      if (i < selected) {
        stars[i].classList.add("over");
      } else {
        stars[i].classList.remove("over");
      }
    }
  },

  save : function(rating){
  // save() : save rating
  // PARAM rating : selected rating

    // FETCH RATING DATA
    var data = new FormData();
    data.append('req', "save");
    data.append('Sujet', document.getElementById("Sujet").value);
    data.append('commentaire', document.getElementById("commentaire").value);
    data.append('rating', rating);

    // AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "ajax-rating.php", true);
    
    xhr.send(data);
      document.location.reload();
  }
};