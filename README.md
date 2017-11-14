SystemesRepartis-Covoiturage
============================

Application créée lors du TP2 de Systèmes répartis par Benjamin DAGOURET et Florian VIDAL

### Exécution de l'application ###

L'exécution de notre application se fait à l'aide de Wamp qui
fourni un serveur apache, une base de données mySQL ainsi qu'une
version de PHP (7.1.9) permettant de lancer notre application avec Symfony

Pour installer les dépendances de notre projet il faut installer Composer

### Etape 1 ###

Après avoir cloné le projet en ligne de commande:
- se déplacer dans le dossier contenant le projet
- faire la commande 'composer install' (vous devrez paramétrer le service de mail et la base de données)
- faire la commande 'php bin/console doctrine:database:create' qui va créér la base de données
- faire la commande 'php bin/console doctrine:database:update --force' qui va créér toutes les tables dans la BDD

### Etape 2 ###

Si vous avez bien fait l'étape 1, votre application est prète à fonctionner

Avec la commande 'php bin/console server:run' votre application devrait démarrer et vous pouvez y accéder par défaut à l'adresse 127.0.0.1:8000

Si vous voulez la démarrer sur une autre adresse ajoutez cette adresse à la fin de la commande précédente