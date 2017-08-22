## simplon auch

  Mise en place du site de simplon auch. 
### instalation:

transformer .env.example en .env

y remplir les infos pour l'acces a votre bdd

y remplir les info pour la boite mail (posté sur slack)

y ajouter la ligne : RECAPTCHA_PRIVATE_KEY=... (posté sur slack)

composer install

php artisan key:generate

php artisan storage:link

php artisan migrate

php artisan db:seed

php artisan serve

il y a un compte par personne les mot de passe son tous 'azerty'
