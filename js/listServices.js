


let serviceslist = [ 'Climatisation' , 'Forfait Vidange' , 'Changement des filtres' , 'Vidange  boite de vitesse' , 'Changement de Pneumatiques' ];
 
    let ul = document.querySelector('.listeServices');
    serviceslist.forEach(function(service){
        let li = document.createElement("li");
        li.textContent = service;
        ul.appendChild(li);
    });
    
 







 //let fruits = ['Pomme', 'Banane','Orange','Ananas',"Poire"];
    
        //document.write("<li>"+fruit+"</li>"+"<br>");
        
  
//let Ol = document.querySelector('.T3'); // on récupère la balise <ol> par son id
//fruits.forEach(function(fruit) {
  //let li = document.createElement("li"); // on crée un élément <li>
  //li.textContent = fruit; // on définit le contenu texte de l'élément <li>
  //ol.appendChild(li); // on ajoute l'élément <li> comme enfant de la balise <ol>
//});