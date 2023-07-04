
var form = document.getElementById('myform');

form.addEventListener('submit', function(event) {
 
  
  var identifiant = document.getElementById('ide').value;
  var mdp = document.getElementById('mdp').value;
  var erreur = "indentifiant ou mot de passe incorrect";
   
  if (identifiant !== "admin" || mdp !== "admin") {
    document.getElementById("erreur").innerHTML = erreur;
    event.preventDefault()
  } else {
    alert('Envoyer');
    
  }
});




  