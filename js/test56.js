let serviceslist = [ 'Climatisation' , 'Forfait Vidange' , 'Changement des filtres' , 'Vidange  boite de vitesse' , 'Changement de Pneumatiques' ];
let bu = document.querySelector('#addService');


bu.onclick = function() {
    let nouveaute = prompt("veuillez rentrer un nouveau service");
    serviceslist.push(nouveaute);  
    console.log(serviceslist);
    return serviceslist;   
};
console.log(serviceslist);

