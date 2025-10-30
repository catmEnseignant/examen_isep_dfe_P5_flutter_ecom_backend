### Installation des dépendances

###### composer install

### Configurer les accès de ta base dans le .env

###### DB_CONNECTION=mysql
###### DB_HOST=127.0.0.1
###### DB_PORT=3306
###### DB_DATABASE=
###### DB_USERNAME=
###### DB_PASSWORD=

### Exécution des migrations déjà créées

###### php artisan migrate

### Ajout de l'utilisateur par défaut merci de modifier les infos de connexion en première dans le seeder

###### php artisan db:seed --class=DefaultUserSeeder