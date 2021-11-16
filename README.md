# table-operations

A data table app that gets its data from a mariadb with search functionality using an elasticsearch server.

Docker compose initialization script loads the data from fixtures and also populates elasticsearch.

- Back end: symfony
- Front end: vue 

Contains 3 containers
- mysql
- elasticsearch server
- symfony app + vue app


Handles very basic login for /table endpoint to elaborate routing.
Password is *mypass*

Table search is wildcard in all columns.

## Dependencies

NPM:
- vue, vue-bootstrap
- axios

Composer:
- FOSElastica
- doctrine
- symfony
- twig
- doctrine:dbal
- doctrine:fixtures-bundle

Usage:
 ```docker-compose up``` 

Builds the project, populates mariadb, populates elasticsearch.

App will be available at *http://127.0.0.1:8000/table*


