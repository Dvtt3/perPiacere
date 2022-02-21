DROP DATABASE IF EXISTS mylittlejewels;

CREATE DATABASE mylittlejewels;

USE mylittlejewels;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(30) NOT NULL,
    Cognome VARCHAR(30) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Telefono VARCHAR(20) NOT NULL,
    Password VARCHAR(100) NOT NULL,
    PRIMARY KEY ( id )
);