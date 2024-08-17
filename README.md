# FatFree_structure_code
structure du code fatfree complet
---

 **Fat-Free Framework (F3)**.

## Structure du Projet

Le projet est organisé comme suit :

```plaintext
app/
├── controllers/
│   └── ClientController.php
├── models/
│   └── Client.php
├── views/
│   └── index.html
config/
├── config.ini
└── routes.ini
lib/
├── vendor/
└── fatfree/
index.php
```

### Description des Dossiers et Fichiers

- **app/** : Contient la logique métier de l'application, avec les sous-dossiers suivants :
  - **controllers/** : Contient les fichiers de contrôleurs. Par exemple, `ClientController.php` gère les opérations liées aux clients.
  - **models/** : Contient les modèles de données. Par exemple, `Client.php` interagit avec la table `Clients` de la base de données.
  - **views/** : Contient les fichiers de vue. Par exemple, `index.html` est la page principale qui affiche les données.

- **config/** : Contient les fichiers de configuration :
  - **config.ini** : Fichier de configuration pour les paramètres globaux comme la base de données.
  - **routes.ini** : Fichier de configuration des routes de l'application.

- **lib/** : Contient les bibliothèques externes, y compris Fat-Free Framework :
  - **vendor/** : Contient les dépendances gérées par Composer (si applicable).
  - **fatfree/** : Contient les fichiers du framework Fat-Free.

- **index.php** : Point d'entrée principal de l'application. Ce fichier charge le framework, configure l'application et lance le routeur.

## Installation

1. **Cloner le Dépôt :**

   ```bash
   git clone https://github.com/ton_utilisateur/FatFree_structure_code
.git
   cd FatFree_structure_code

   ```

2. **Configurer l'Application :**

   - **config/config.ini** : Remplissez ce fichier avec vos paramètres de base de données et autres configurations.
   
   Exemple de `config.ini` :

   ```ini
   [globals]
   DB_DNS=mysql:host=localhost;port=3306
   DB_NAME=db_name
   DB_USER=root
   DB_PASSWORD=your_password
   ```

   - **config/routes.ini** : Définissez les routes de votre application.

   Exemple de `routes.ini` :

   ```ini
   [GET]
   /clients = ClientController->displaysRapportClient
   ```

3. **Installer les Dépendances (si applicable) :**

   Si vous utilisez Composer pour gérer les dépendances, installez-les en exécutant :

   ```bash
   composer install
   ```

## Utilisation

1. **Lancer l'Application :**

   Lancez un serveur PHP dans le répertoire racine de votre projet :

   ```bash
   php -S localhost:8000
   ```

2. **Accéder à l'Application :**

   Ouvrez votre navigateur et allez à l'URL `http://localhost:8000` pour voir l'application en action.

## Contribution

Les contributions sont les bienvenues. Veuillez créer une *issue* avant de soumettre une *pull request*.

## License

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

---
