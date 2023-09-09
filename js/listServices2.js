/*

var serviceslist = [ 'Climatisation' , 'Forfait Vidange' , 'Changement des filtres' , 'Vidange  boite de vitesse' , 'Changement de Pneumatiques' ];


let input = document.querySelector('#addinput');
let button = document.querySelector('#addService');


button.onclick = function()
{

  serviceslist.push(input.value);

  let ul = document.querySelector('.listeServices');
  ul.innerHTML = ''; 
  serviceslist.forEach(function(service){
      let li = document.createElement("li");
      li.textContent = service;
      ul.appendChild(li);
  });


};
  
  console.log(serviceslist);
  
  */  
 
  var serviceslist = [ 'Climatisation' , 'Forfait Vidange' , 'Changement des filtres' , 'Vidange  boite de vitesse' , 'Changement de Pneumatiques' ];

  let input = document.querySelector('#addinput');
  let button = document.querySelector('#addService');
  let demande;
   


    button.onclick = function() {
      let nouveaute = prompt("veuillez rentrer un nouveau service");
      serviceslist.push(nouveaute);  
    
      let ul = document.querySelector('.listeServices');
    //ul.innerHTML = ''; 
    serviceslist.forEach(function(service){
        let li = document.createElement("li");
        li.textContent = service;
        ul.appendChild(li);
    });
         
  };
      
  
    
  
  
  console.log(serviceslist);

  
  
    