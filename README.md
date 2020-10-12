# table-operations
Back end: symfony, front-end: vue 
Used dependencies

NPM
vue and its components
jquery
axios

Composer
FOSElastica -> for elasticsearch operations
doctrine
symfony
twig
doctrine:dbal
doctrine:fixtures-bundle

- I uploaded package files as well, docker build was installing them very slow, copying the files seemed a better approach just for this case.

Usage: docker-compose up (builds the project, runs fixture populate, and elasticsearch populate before starting.)
Contains 3 containers
- mysql
- elasticsearch server
- symfony app

To go to the app please visit http://127.0.0.1:8000/table
Handles very basic login for /table endpoint

Search field supports wildcard using * character
