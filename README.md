# esprit-vigee
Interactive exhibition website

https://esprit-vigee.com/

# Comment installer le site web sur son serveur local ?

Lancez WAMPP sur votre ordinateur personnel.
Ensuite, aller dans vos fichiers, et rendez vous dans c:\wamp64\www et déposez y le dossier complet du site de réservation. 

Importez également l'API disponible à l'adresse  https://github.com/sabine-thb/api-expo dans votre dossier www, et n'oubliez pas de modifier l'adresse de l'api dans le fichier traiteResa.php du site de réservation, sans oublier le /index.php/reservation à la fin du lien pour arriver au bon endPoint.

Ensuite, intégrez la base de donnée esprit_vigee.sql à votre phpmyadmin en local.

Enfin, modifiez dans le fichier index.php de l'API les informations de connexion à la base de donnée (elles sont à deux endroits dans le fichier).

Tapez ensuite dans votre navigateur http://localhost/esprit-vigee. Vous aurez ainsi accès directement à notre site de l'exposition esprit-vigee sur votre propre serveur local WAMP.

# Lien du backoffice

https://backoffice.esprit-vigee.com

Login : admin 
Mdp : admin

# Lien de l'API
https://api-expo.esprit-vigee.com/index.php/reservation








