let listReparations = [ 'Diagnostique' , 'Motorisation' , 'Echappement' , 'Pare-Brise' , 'Carrosserie' , 'Boite de vitesse' , 'Embrayage', 'Recherche de Panne'];
 
    let ul = document.querySelector('.ListReparations');
    listReparations.forEach(function(Reparations){
        let li = document.createElement("li");
        li.textContent = Reparations;
        ul.appendChild(li);
    });