alert("tout est ok?");

let vehicules =[
    {photo : "./asset/picCar/aircross/aircross1.jpg",
    Modele : "C5 Air Cross",
    Kilometrage : 8000,
    annee : "2022", 
    Prix : "31999"},
    {photo: "./asset/picCar/arkana/arkana1.jpg",
    Modele: " Renault Arkana",
    Kilometrage: "0",
    annee: "2023",
    Prix: "28499"},
    {photo: "./asset/picCar/mini/mini1.jpg",
    Modele: "Mini One",
    kilometrage: "83472",
    annee: "2019",
    prix: "16099"},
];
/*let voitures = [
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
];*/

let container = document.querySelector("#voiturevisu");
for (let i = 0; i < vehicules.length; i++) {
  let detail = document.createElement("div");
  detail.className = "continerDetail";
  detail.innerHTML =`
              <img  class="imgcar" src="${vehicules[i].photo}" alt="${vehicules[i].modele}">
                  <div class="containerDescriptif">
                    <div>
                        <p>Kilometrage: ${vehicules[i].kilometrage}</p>
                        <p>Année de mise en circulation: ${vehicules[i].Annee}</p>
                        <p>Prix de vente: ${vehicules[i].prix} euros</p>
                    </div>
                    <button>
                       <a href="descriptif.php" class="buttonDescriptif"> Details.
                    </button>
                  </div>
                  
                  `;
    container.appendChild(detail);
  }
