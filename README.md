# Trabalho com CRUD e Login
Sistema de login com CRUD.

Para a utilização correta dos scripts, é necessário usar a seguinte query no MYSQL:

CREATE DATABASE trabalho;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE produtos (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome_produto varchar(255) NOT NULL,
  valor_produto float(10,2) NOT NULL,
  marca_produto varchar(255) NOT NULL,
  quant decimal(10,0) NOT NULL,
  valor_total float(10,2),
  PRIMARY KEY (`id`)
)


