alert("le fichier est ok");

// Créer un tableau avec des données de voitures
let voitures = [
  { marque: "Renault", 
  modele: "Clio", 
  couleur: "Rouge", 
  image: "./asset/PicCar/aircross/aircross1.jpg" },
  
  { marque: "Peugeot", 
  modele: "208", 
  couleur: "Bleu", 
  image: "./asset/PicCar/arkana/arkana1.jpg" },

  { marque: "Citroën", 
  modele: "C3", 
  couleur: "Vert", 
  image: "./asset/PicCar/mini/mini1.jpg" },
];

console.log(voitures);



// Sélectionner l'élément qui contiendra les cards
let container = document.querySelector("#voiturevisu");

// Parcourir le tableau avec une boucle for
for (let i = 0; i < voitures.length; i++) {
  // Créer une card avec les données de la voiture
  let card = document.createElement("div");
  card.className = "card";
  card.innerHTML = `
    <div class="card-header">
      <h3>${voitures[i].marque}</h3>
    </div>
    <div class="card-body">
      <img src="${voitures[i].image}" alt="${voitures[i].marque} ${voitures[i].modele}">
      <p>Modèle : ${voitures[i].modele}</p>
      <p>Couleur : ${voitures[i].couleur}</p>
    </div>
    <div class="card-footer">
      <a href="#">Lien vers plus de détails</a>
    </div>
  `;
  // Ajouter la card au container
  container.appendChild(card);
}

    


