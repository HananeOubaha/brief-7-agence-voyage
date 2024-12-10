-- céation d'une data base vyg 
create database vyg ;
USE vyg;
--  création du tableau pour client 
CREATE TABLE client (
    id_client INT primary key NOT NULL AUTO_INCREMENT ,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150)UNIQUE ,
    telephone VARCHAR(150),
    adresse TEXT ,
    date_naissance DATE
);
--  création du tableau pour reservation
CREATE TABLE reservation(
    id_reservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    date_reservation TIMESTAMP,
    statut ENUM('En attente', 'Confirmée','Annulée')
);
-- création du tableau pour activite
 CREATE TABLE activite (
       id_activite INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,
       titre VARCHAR (150),
       description TEXT ,
       destination VARCHAR (100),
       prix DECIMAL (10.2),
       date_debut DATE ,
       date_fin DATE ,
       places_disponibles INT(11)
);
-- on ajoute les liaisons entre les tableaux : reservation lié avec client et activite 
ALTER TABLE reservation ;
ADD id_client INT NOT NULL AUTO_INCREMENT;

ALTER TABLE reservation 
ADD CONSTRAINT FK_client_reservation
FOREIGN KEY (id_client)REFERENCES
client(id_client);

ALTER TABLE reservation 
ADD id_activite INT NOT NULL AUTO_INCREMENT;
ALTER TABLE reservation 
ADD CONSTRAINT FK_activite_reservation
FOREIGN KEY (id_activite)REFERENCES
activite(id_activite);

-- insertion 





