# Projet de Site Web de Réservation de Voyages

## Contexte du Projet

Une agence de voyage souhaite moderniser son activité en développant un site web de réservation de voyages. Actuellement, les réservations et la gestion des voyages sont réalisées manuellement, ce qui entraîne des erreurs, des doublons et une inefficacité dans le suivi des clients.

L’objectif principal est de fournir une solution numérique qui permettra de :

- Gérer les clients inscrits à l’agence.
- Afficher dynamiquement les offres d'activités disponibles (vols, hôtels, circuits touristiques, etc.).
- Permettre aux clients de réserver des activités en ligne et de personnaliser leurs choix (ex. choix de voyage, d’excursions, etc.).

---

## Instructions pour configurer l’environnement de travail et exécuter le projet

### Étapes à suivre :

Voici les étapes détaillées pour configurer l’environnement de travail et exécuter votre projet PHP avec MySQL :

Installer et configurer XAMPP.
Créer un dossier dans htdocs pour votre projet.
Configurer la base de données via PHPMyAdmin.
Utiliser MySQLi pour se connecter à la base de données.
Accéder à votre projet via localhost pour voir l’interface de votre site web.

---

## Étapes de Réalisation des Fonctionnalités

### 1. Schéma de la Base de Données (ERD)
- Le schéma de la base de données a été analysé pour comprendre les entités principales (Clients, Activité, Réservations).
- Les relations entre les entités et les interactions nécessaires ont été identifiées.

### 3. Diagramme UML (Cas d’utilisation)
- Un diagramme de cas d’utilisation a été réalisé dans **draw.io** pour décrire les interactions entre les acteurs (Clients, système) et les fonctionnalités (consultation des offres, réservation, personnalisation des voyages).

### 4. Configuration de l’Environnement
- L'environnement a été configuré avec XAMPP pour exécuter PHP et MySQL.
- La base de données a été créée en suivant le schéma fourni, avec les tables **Clients**, **Activité**, et **Réservations**.
- Les fichiers du projet ont été organisés dans le dossier **htdocs** de XAMPP.

### 5. Scripts SQL
- Les scripts SQL pour créer la base de données et les tables ont été rédigés.
- Des requêtes courantes ont été ajoutées :
  - **Insertion** : Ajouter une nouvelle réservation.
  - **Mise à jour** : Modifier les détails d’une activité.
  - **Suppression** : Supprimer une réservation.
  - **Jointure** : Récupérer les détails des activités réservées par un client.

### 6. Fonctionnalités en PHP
- Des formulaires ont été développés pour ajouter des données (par exemple, ajouter des membres, des activités, et des réservations).
- Les données sont affichées dynamiquement depuis la base de données (par exemple, afficher la liste des membres ou des réservations).

---

## Installation des outils requis

1. **XAMPP** : Servira de serveur local pour PHP et MySQL.
2. **Éditeur de Code** : Utilisez un éditeur de texte comme **VSCode** ou **Sublime Text** pour éditer vos fichiers PHP.
3. **Navigateur Web** : Utilisez un navigateur comme **Chrome** ou **Firefox** pour tester votre site via **localhost**.

---
