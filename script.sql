-- céation d'une data base vyg 
create database vyg ;
USE vyg;
--  création du tableau pour client 
CREATE TABLE client (
    id_client INT primary key NOT NULL ,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150)UNIQUE ,
    telephone VARCHAR(150),
    adresse TEXT ,
    date_naissance DATE
);
