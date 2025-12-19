# 🎟️ MiniEvent - Application de Gestion de Réservations d'Événements

**MiniEvent** est une application web dynamique permettant aux utilisateurs de consulter des événements en temps réel et de réserver leurs places en ligne. Elle intègre un back-office sécurisé pour permettre aux administrateurs de gérer le catalogue d'événements et de suivre les inscriptions.

---

## 🚀 Fonctionnalités

### 👤 Côté Utilisateur

- **Affichage Dynamique** : Liste des événements récupérée en temps réel depuis MySQL.
- **Détails Complets** : Consultation des descriptions, lieux, dates ,image et affichage d'un **compte à rebours interactif**.
- **Réservation Intuitive** : Formulaire de réservation sécurisé avec validation JavaScript côté client.
- **Expérience Utilisateur** : Notifications "Toast" pour confirmer les actions (succès/erreur).

### 🛠️ Côté Administrateur

- **Authentification Sécurisée** : Accès restreint par login et mot de passe.
- **Tableau de Bord** : Vue d'ensemble et gestion globale de l'activité.
- **Gestion CRUD** : Création, Lecture, Modification et Suppression complète des événements.
- **Suivi des Inscriptions** : Consultation détaillée de la liste des participants pour chaque événement.

---

## 🏗️ Architecture du Projet

Le projet repose sur le patron de conception **MVC (Modèle-Vue-Contrôleur)** pour garantir une maintenance aisée et une séparation claire des responsabilités :

- **/app/** : Contient le cœur de la logique (Modèles, Contrôleurs et Vues).
- **/config/** : Fichiers de configuration (Base de données et routage).
- **/public/** : Point d'entrée `index.php`, ressources statiques (CSS, JS) et dossiers d'uploads d'images.

---

## 🛠️ Technologies Utilisées

- **Langages** : HTML5, CSS3, JavaScript, PHP
- **Base de données** : MySQL (via XAMPP)
- **Sécurité** : Utilisation de **PDO** pour les requêtes préparées.
- **Versionnage** : GitHub

---

## ⚙️ Installation et Utilisation

### 1. Clonage du projet

```bash
git clone https://github.com/RajaBarhoumi/MiniProjet2A-EventReservation-HaninRaja.git
```

### 2. Configuration de la base de données

1. Démarrez **XAMPP** et lancez les services **Apache** et **MySQL**.
2. Accédez à **phpMyAdmin** via `http://localhost/phpmyadmin`.
3. Créez une nouvelle base de données nommée `minievent_db`.
4. Importez le fichier SQL fourni dans le projet.

### 3. Démarrage de l'application

1. Placez le projet dans le dossier `htdocs` de XAMPP.
2. Accédez à l'application via : `http://localhost/MiniProjet2A-EventReservation-HaninRaja/public/`

### 4. Accès Administrateur

Pour accéder au back-office administrateur :

- **Nom d'utilisateur** : `admin`
- **Mot de passe** : `admin123`

---

## 👥 Membres de l'équipe

- **Hanin Amara**
- **Raja Barhoumi**

**Classe** : ING-A2-GL-02

---

## 📝 Notes

- Assurez-vous que les extensions PHP nécessaires (PDO, MySQL) sont activées dans votre configuration XAMPP.

