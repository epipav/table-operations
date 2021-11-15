# table-operations
- Back end: symfony
- Front end: vue 

Dependencies

NPM:
- vue and its components
- jquery
- axios

Composer:
- FOSElastica
- doctrine
- symfony
- twig
- doctrine:dbal
- doctrine:fixtures-bundle

Usage: *docker-compose up* 

Builds the project, populates fixtures, populates elasticsearch

Contains 3 containers
- mysql
- elasticsearch server
- symfony app + vue app

To go to the app please visit http://127.0.0.1:8000/table
Handles very basic login for /table endpoint to elaborate routing.
Password is *mypass*

Table search is wildcard in all columns.
