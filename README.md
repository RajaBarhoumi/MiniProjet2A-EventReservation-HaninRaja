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

## Demo
**Liste des événements**
- <img width="1919" height="975" alt="image" src="https://github.com/user-attachments/assets/d2852818-f31f-4780-859f-2a2c882fafa1" />
**Formulaire de réservation d'un événement**
- <img width="1189" height="946" alt="image" src="https://github.com/user-attachments/assets/5250ca77-0b0b-4062-a648-b8c2a5d46c21" />
**Page de connexion d'administrateur**
- <img width="1396" height="741" alt="image" src="https://github.com/user-attachments/assets/11f606de-b973-4879-9e00-69685952f370" />
**Tableau de bord de l'administrateur**
- <img width="1438" height="948" alt="image" src="https://github.com/user-attachments/assets/88b69444-673f-4088-8c9a-a13ef1ed24fe" />
**Liste des inscriptions à un événement**
- <img width="1349" height="515" alt="image" src="https://github.com/user-attachments/assets/b7fd65fd-488c-48ed-a9c5-83180fe24894" />



