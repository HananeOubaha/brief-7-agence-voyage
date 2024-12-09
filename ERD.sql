-- céation d'une data base pour mon ERD 
create database voyagae
CREATE TABLE client (
    id_client INT PRIMARY KEY NOT NULL,
    nom VARCHAR (100),
    prenom VARCHAR (100),
    email VARCHAR (150),
    telephone VARCHAR (150),
    adresse TEXT ,
    date_naissance DATE 
);
-- On va cree le deuxième tableau 
CREATE TABLE reservation (
    id_reservation INT PRIMARY KEY NOT NULL,
    date_reservation TIMESTAMP,
    statut ENUM('En attente', 'Confirmée','Annulée')
);
-- On va cree le troixième tableau
       id_activite INT PRIMARY KEY NOT NULL ,
       titre VARCHAR (150),
       description TEXT ,
       destination VARCHAR (100),
       prix DECIMAL (10.2),
       date_debut DATE ,
       date_fin DATE ,
       places_disponibles INT(11)
);
-- pour ajouté les deux columns dans data base reservation 
ALTER TABLE reservation 
ADD id_client INT NOT NULL;
ALTER TABLE reservation 
ADD CONSTRAINT FK_client_reservation
FOREIGN KEY (id_client)REFERENCES
client(id_client);

ALTER TABLE reservation 
ADD id_activite INT NOT NULL;
ALTER TABLE reservation 
ADD CONSTRAINT 
FK_activite_reservation
FOREIGN KEY (id_activite)REFERENCES
activite(id_activite);
