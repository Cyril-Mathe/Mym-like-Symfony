 # <p align="center">Projet Mym-Like-Symfony </p>

## Description 📝 :
Réalisation d'un feed type instagram , ajout d'une image , pseudo et description.



## Technologies 🛠️ :

### Frontend :
- Bootstrap

### Backend :
- PHP-Symfony
- MySQL

## Auteurs 🙇 :
- #### William : [@GitHub](https://github.com/Wyll-exe)
- #### Arthur: [@GitHub](https://github.com/L0wBly)
- #### Cyril: [@GitHub](https://github.com/Cyril-Mathe)
- ### Soufiane: [@GitHub](https://github.com/SoufianeBenmouhoub)

## Maquette Figma :

- [@Figma](https://www.figma.com/design/quqKKDg7zIZ6k3izkKAMAh/Untitled?node-id=0-1&t=BRcYYKgGOfIEpIKQ-1)


## Installation

1. Clonez le dépôt :
    ```bash
    git clone https://github.com/Cyril-Mathe/Mym-like-Symfony.git
    ```

2. Accédez au répertoire du projet :

    ```bash
    cd Mym-Like-Symfony
    ```

## Backend

3. Installez les dépendances :
    ```bash
    composer install
    ```

### Démarrage du backend

4. Une toute dernière étape avant de lancer le backend, utilisez les deux commandes suivantes pour créer une table et appliquer les migrations :

 ```bash
php bin/console doctrine:database:create
```

 ```bash
php bin/console doctrine:migrations:migrate
```

5. Vous pouvez maintenant lancer le backend :

   ```bash
   symfony server:start
   ```



Cela ouvrira l'application dans votre navigateur par défaut à l'adresse http://localhost:8000/
