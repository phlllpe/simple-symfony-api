# SIMPLE SYMFONY API - FLEX

## Requirements

- PHP 7.4+ (https://www.php.net/downloads)
- Composer (https://getcomposer.org/download/)
- SQLite3 (https://www.sqlite.org/download.html)
- Symfony FLEX (LTS) (https://symfony.com/download)

### Composer Packages

- jms/serializer-bundle:~3.8
- symfony/validator:~4.4
- symfony/orm-pack:*
- sensio/framework-extra-bundle:~5.6

### Database - SQLite

```dotenv
DATABASE_URL=sqlite://meetup:meetup@meetup//%kernel.project_dir%/var/dbmeetup.sqlite
```

#### Doctrine

Entities Strategy Mapping with XML

##### Commands - Dev mode

- Database Schema Update
    ```bash
    bin/console doctrine:schema:update --force
    ```

- Database Schema Update
    ```bash
    bin/console doctrine:schema:validate
    ```


## Scope

### CRUD "Estado"

#### /estado

- src/Controller/Estado/PostAction.php
- src/Controller/Estado/GetAction.php
- src/Controller/Estado/GetIdAction.php
- src/Controller/Estado/PutAction.php
- src/Controller/Estado/DeleteAction.php


### CRUD "Cidade"

#### /cidade

- src/Controller/Cidade/PostAction.php
- src/Controller/Cidade/GetAction.php
- src/Controller/Cidade/GetIdAction.php
- src/Controller/Cidade/PutAction.php
- src/Controller/Cidade/DeleteAction.php


### Presentation

[Google Slides](https://docs.google.com/presentation/d/1Q2T2_tirKfwiHxgcYqqsrJjzDmL2hbH9B44ds0UHXXs)