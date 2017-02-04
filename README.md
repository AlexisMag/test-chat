#Installation

##Autoload
Installez l'autoloader à l'aide de la commande :

```
composer install
```

##Apache
- Activez le **mod_rewrite**
- L'application nécéssite un domaine virtuel dans la configuration Apache.

Exemple :
```
<VirtualHost *:80>

	DocumentRoot <repertoire ou est placé le projet>

        <Directory "repertoire ou est placé le projet">
                Require all granted
                AllowOverride All
                Options Indexes FollowSymlinks
        </Directory>


	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined

</VirtualHost>

```
##Base de données

Pour la base de données, les informations nécessaires à la connexion se trouvent dans config/config.php, renommez le fichier config.default.php et indiquez vos identifiants :

```
$config['db']['host'] = '127.0.0.1';
$config['db']['username'] = '<username>';
$config['db']['password'] = '<password>';
$config['db']['database'] = 'chat';
```

Le script de création des tables **database.sql** est dans le répertoire du projet.
