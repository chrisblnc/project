# Project Creator
Basic structure for creating a new project in PHP and MySQL.

## When project is generated :
- Edit project information in `src/config/web.conf` :
    ```conf
    ; informations (!) à remplir
    name = "[nom du projet]"
    author = "[nom de l'auteur]"
    email = "[email de l'auteur]"
    url = "[url du site]"
    git = "[url du git]"
    title = "[titre du projet]"
    {...}
    ```
- Edit project information in `package.json` :
    ```json
    {
        "name": "[nom du projet]",
        "version": "1.0.0",
        "description": "[description du projet]",
        {...}
        "repository": {
            "type": "git",
            "url": "[git du projet]"
        },
        "author": "[auteur du projet]",
        "license": "MIT",
        {...}
    }

    ```
- Edit files `src/config/mysql.conf` and `src/config/mysql.dev.conf` :
    ```conf
    ; informations de connexion pour mysql
    host = "[@ mysql]"
    user = "[nom d'utilisateur]"
    pass = "[mot de passe]"
    name = "[nom de la base de donnée]"
    ```
- Edit the MySQL table's name in file `tests/unit/init_unit_test.php` :
    ```php
    {...}
    // constante contenant la table
    const table = "[nom de la table]";
    {...}
    ```

Checkout my new portfolio here https://www.chrisblnc.fr.

Made with ❤️ and 🧠.

@chrisblnc.fr