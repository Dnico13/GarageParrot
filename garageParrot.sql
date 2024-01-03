-- Active: 1699308126195@@mysql-ndev2023.alwaysdata.net@3306@ndev2023_garageparrotecf
SELECT * FROM voitures;

INSERT INTO employes ( email_employes, password, role) VALUES ('Dnico13@hotmail.com','55694976', 'Admin');
CREATE TABLE IF NOT EXISTS Services(
    id_service INT UNSIGNED UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
    service VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS Horaires(
    id_horaire INT UNSIGNED UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
    jour VARCHAR(20) NOT NULL,
    heureamd VARCHAR(10) NOT NULL,
    heureamf VARCHAR(10) NOT NULL,
    heureapmsd VARCHAR(10) NOT NULL,
    heureapmsf VARCHAR(10) NOT NULL
);

CREATE TABLE IF NOT EXISTS Reparations(
    id_reparation INT UNSIGNED UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
    reparation VARCHAR(255) NOT NULL
)

ALTER TABLE `Horaires` ADD COLUMN(
    minuteamd VARCHAR(10) NOT NULL,
    minuteamf VARCHAR(10) NOT NULL,
    minuteapmsd VARCHAR(10) NOT NULL,
    minuteapmsf VARCHAR(10) NOT NULL
);

INSERT INTO `Horaires` (jour, heureamd, heureamf, heureapmsd, heureapmsf, minuteamd,minuteamf, minuteapmsd,minuteapmsf)
VALUES
('Lundi:','8','12','14','17','30','00','00','30'),
('Mardi:','8','12','14','17','30','00','00','30'),
('Mercredi:','8','12','14','17','30','00','00','30'),
('Jeudi:','8','12','14','17','30','00','00','30'),
('Vendredi:','8','12','14','17','30','00','00','30'),
('Samedi:','8','12','Ferme','Ferme','30','00','Ferme','Ferme'),
('Dimanche:','Ferme','Ferme','Ferme','Ferme','Ferme','Ferme','Ferme','Ferme');


INSERT INTO Reparations (reparation)
VALUES
('Diagnostic'),
('Motorisation'),
('Echappement'),
('Pare-Brise'),
('Carrosserie'),
('Boite de Vitesse'),
('Embrayage'),
('Recherche de Panne');


INSERT INTO Services (service)
VALUES
('Climatisation'),
('Forfait Vidange'),
('Changement des filtres'),
('Vidange de boite de vitesse'),
('Changement de Pneumatiques');

DROP TABLE Horaires;
 CREATE TABLE IF NOT EXISTS Horaires(
    id_horaires INT UNSIGNED UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
    horaires_matin VARCHAR(60) NOT NULL,
    horaire_apm VARCHAR(60) NOT NULL
 );
 ALTER TABLE Horaires  add COLUMN (
    jour VARCHAR(60) not null
 );

 INSERT INTO `Horaires`(jour, horaires_matin, horaire_apm) 
 VALUES
 ('Lundi','8H30-12H00','14H00-18H00'),
('Mardi','8H30-12H00','14H00-18H00'),
('Mercredi','8H30-12H00','14H00-18H00'),
('Jeudi','8H30-12H00','14H00-18H00'),
('Vendredi','8H30-12H00','14H00-18H00'),
('Samedi','8H30-12H00','FERME'),
('Dimanche','FERME','FERME');

ALTER Table `Horaires` RENAME COLUMN horaire_apm to horaires_apm;

DROP Table messages;
drop table visiteurs;

CREATE TABLE IF NOT EXISTS Message(
    id_message int UNSIGNED UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(60) NOT NULL,
    prenom VARCHAR(60) not NULL,
    email VARCHAR(60) NOT NULL,
    telephone VARCHAR(60) not NULL,
    objet VARCHAR(60),
    message VARCHAR(255) not null
);

INSERT INTO `Message` (nom, prenom, email, telephone, message)
VALUES
('Bertrand','Gaston','bg@gmail.com','0675841812','Bonsoir, merci de bien vouloir me recontacter j aimerai prendre un rdv pour une revision');

CREATE Table Temoignage (
id_temoignage INT UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom_temoignage VARCHAR(60),
note float NOT NULL,
avis VARCHAR(255),
message_temoignage VARCHAR(255)
);

insert INTO Temoignage (nom_temoignage, note, avis)
VALUES
('Monique','3','Superbes prestations, je recommande avec grand plaisir.');

SELECT * FROM Temoignage ORDER BY RAND() LIMIT 1;

ALTER Table Temoignage DROP COLUMN message_temoignage;

INSERT INTO Temoignage (nom_temoignage, note, avis)
VALUES
('Joelle',' 2', 'J ai ete decu du retard pris dans la prestation. Malgre cela le personnel est tres sympa et agreable'),
('Marie-Noelle','5','Personnel tres sympa et arrangeant. Le changement de pneumatiques s est fait rapidement avec precisions');

ALTER Table Temoignage ADD COLUMN (
    Validate INT not null
);


INSERT into Message(nom, prenom, email, telephone, message)
VALUES
('Fontarosa', 'Christian','cf@gmail.com','0645678900','Merci de bien vouloir me rappaller');
