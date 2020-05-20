```sql
-- crear la base de datos
create database 4ampr;

-- poner en uso la base
use 4ampr;

-- crear la tabla
create table users (
    id int unsigned auto_increment primary key,
    firstname varchar(50) not null,
    lastname varchar(50) not null,
    email varchar(200) not null unique,
    name varchar(16) not null unique,
    password varchar(200) not null
);

-- crear un usuario
create user 'myuser'@'localhost' identified by '123';

-- otorgar permisos al usuaio recien creado
grant all on 4ampr.* to 'myuser'@'localhost';

```