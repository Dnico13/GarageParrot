// On instancie la variable req à partir de la classe XMLHttpRequest
var req = new XMLHttpRequest();

// On récupère l'élément HTML <button>
var button = document.querySelector('button');

// On ajoute un écouteur d'événement 'click' au bouton
button.addEventListener('click', function () {
  // Grâce à la méthode open on peut indiquer la méthode de requête GET
  // Cette méthode de requête permet de recevoir des données d'un serveur
  // Nous indiquons également l'URL à utiliser
  req.open('GET', './test2.php');

  // Cette évènement est déclenché lorsque la requête se termine correctement
  req.addEventListener('load', function () {
    // On vérifie que le status HTTP est bien supérieur à 200 et inférieur à 400
    // Sinon on renvoie le code du statut et le message du statut
    if (req.status >= 200 && req.status < 400) {
      var data = JSON.parse(this.responseText);
      console.log(data);
    } else {
      console.error(req.status + " " + req.statusText);
    }
  });

  // Méthode obligatoire qui envoie la requête
  req.send();
});
