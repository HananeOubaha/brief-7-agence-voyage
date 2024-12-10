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
--  création du tableau pour activité
CREATE TABLE activite (
    id_reservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    date_reservation TIMESTAMP,
    statut ENUM('En attente', 'Confirmée','Annulée')
);
