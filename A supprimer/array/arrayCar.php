<?php


//$listCars = [
//  ["Marque" =>"Citroen","Modele" => "C5 Air Cross","Kilometrage" => 0,"Carburant"  => "Diesel","Description" => "Disponible en motorisation hybride, hybride rechargeable, essence ou diesel. La gamme de moteurs propose quatre moteurs essence et diesels de 130 et 180 ch, et deux boîtes de vitesses (BVM6 et automatique à huit rapports) ","Prix" =>"31999","image" => "./asset/PicCar/aircross/aircross1.jpg","image1" => "./asset/PicCar/aircross/aircross2.jpg","image2" => "./asset/PicCar/aircross/aircross3.jpg","image3" => "./asset/PicCar/aircross/aircross4.jpg","image4" => "./asset/PicCar/aircross/aircross5.jpg"],
// ["Marque" =>"Renault","Modele" => "Arkana","Kilometrage" => 18000,"Carburant"  => "Essence","Description" => "Disponible en version hybride, hybride rechargeable et essence. La version hybride est équipée d’un moteur essence 1,6 L de 140 ch et d’un moteur électrique de 36 ch, offrant une puissance cumulée de 145 ch 13.","Prix" =>"31999","image" => "./asset/PicCar/arkana/arkana1.jpg"],
// ["Marque" =>"Mini One","Modele" => "Mini One ","Kilometrage" => 83472,"Carburant"  => "Diesel","Description" => "Elle est disponible en version essence et diesel 12. La gamme de moteurs propose deux moteurs essence de 102 et 136 ch, et deux moteurs diesel de 95 et 116 ch. Elle est équipée de technologies d’aide à la conduite et de connectivité de dernière génération .","Prix" => 16099,"image" => "./asset/PicCar/mini/mini1.jpg"]
// ];




function getlistCars($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM voitures ORDER BY id_voitures DESC");

    $query->execute();
    $listCars = $query->fetchAll(PDO::FETCH_ASSOC);
    return $listCars;
}
