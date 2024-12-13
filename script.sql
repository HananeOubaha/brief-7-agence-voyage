-- Création de la base de données
CREATE DATABASE voyage1;
USE voyage1;

-- Création du tableau client
CREATE TABLE client (
    id_client INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    telephone VARCHAR(150),
    adresse TEXT,
    date_naissance DATE
);

-- Création du tableau activite
CREATE TABLE activite (
    id_activite INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titre VARCHAR(150),
    description TEXT,
    destination VARCHAR(100),
    prix DECIMAL(10, 2),
    date_debut DATE,
    date_fin DATE,
    places_disponibles INT
);

-- Création du tableau reservation
CREATE TABLE reservation (
    id_reservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_client INT NOT NULL,
    id_activite INT NOT NULL,
    date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('En attente', 'Confirmee', 'Annulee'),
    FOREIGN KEY (id_client) REFERENCES client(id_client)  ON DELETE CASCADE,
    FOREIGN KEY (id_activite) REFERENCES activite(id_activite) ON DELETE CASCADE
);

-- Insertion des données dans le tableau client
INSERT INTO client (nom, prenom, email, telephone, adresse, date_naissance)
VALUES 
    ('Hanane', 'Oubaha', 'hanane@gmail.com', '0632114578', '168 BD SAFAA', '2002-10-31'),
    ('Hicham', 'Oubaha', 'hicham@gmail.com', '0632114560', '168 BD SAFAA', '2000-11-01'),
    ('Abdellatif', 'Hissoune', 'hissoun@gmail.com', '0632114544', '168 BD SAFAA', '2005-4-08'),
    ('latifa', 'bouhafra', 'laty@gmail.com', '0632114544', '168 BD SAFAA', '2002-4-28'),
    ('meriem', 'masni', 'meriem@gmail.com', '0632114896', '168 BD SAFAA', '2002-3-08');

-- Insertion des données dans le tableau activite
INSERT INTO activite (titre, description, destination, prix, date_debut, date_fin, places_disponibles)
VALUES 
    ('surf', 'sortie au plage pour surf', 'Taghazout', 200, '2024-12-10', '2024-12-11', 10),
    ('karting', 'organisation competition de karting', 'AGADIR BEY', 250, '2024-12-15', '2024-12-16', 16),
    ('cooking', 'organisation competition de cuisine', 'kitchen', 100, '2024-12-16', '2024-12-18', 20);

-- Insertion des données dans le tableau reservation
INSERT INTO reservation (id_client, id_activite, date_reservation, statut)
VALUES 
    (1, 1, '2024-12-10 10:00:00', 'Confirmee'),
    (2, 2, '2024-12-15 14:00:00', 'En attente'),
    (3, 3, '2024-12-15 15:00:00', 'En attente'); 
-- Suppression d'une réservation
DELETE FROM reservation WHERE id_reservation = 1;

-- Suppression d'un client
DELETE FROM client WHERE id_client = 2;

-- Suppression d'une activité
DELETE FROM activite WHERE id_activite = 2;

-- Mise à jour des informations d'un client
UPDATE client
SET 
    nom = 'Ouiame',
    prenom = 'Salimi',
    email = 'ouiame.salimi@example.com',
    telephone = '0611225594',
    adresse = '12 Massira Agadir',
    date_naissance = '2003-01-27'
WHERE id_client = 1;

-- Mise à jour des informations d'une activité
UPDATE activite
SET 
    titre = 'night movie',
    description = 'watching a movie night',
    destination = 'forest',
    prix = 150,
    date_debut = '2024-12-20',
    date_fin = '2024-12-21',
    places_disponibles = 21
WHERE id_activite = 1;

-- ajout des columns dans les tableaux
    ALTER TABLE client 
    ADD COLUMN type_client ENUM('Standard', 'Premium', 'VIP');

    ALTER TABLE activite 
    ADD COLUMN complexite ENUM('Facile', 'Moyenne', 'Difficile');

    ALTER TABLE reservation 
    ADD COLUMN mode_paiement ENUM('Carte bancaire', 'Espèces', 'Chèque') ;

-- Requête de jointure
SELECT 
    client.nom AS Nom_Client,
    client.prenom AS Prenom_Client,
    activite.titre AS Activite,
    activite.description AS Description_Activite,
    activite.destination AS Destination,
    activite.prix AS Prix,
    reservation.date_reservation AS Date_Reservation,
    reservation.statut AS Statut_Reservation
FROM 
    reservation
INNER JOIN 
    client ON reservation.id_client = client.id_client
INNER JOIN 
    activite ON reservation.id_activite = activite.id_activite
WHERE 
    client.id_client = 1; 
