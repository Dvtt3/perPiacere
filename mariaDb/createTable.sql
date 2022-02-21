DROP DATABASE IF EXISTS userData;

CREATE DATABASE userData;

USE userData;

CREATE TABLE AccessData (
    id INT NOT NULL AUTO_INCREMENT,
    ip TEXT NOT NULL,
    accessDate DATE NOT NULL,
    accessFrom INT NOT NULL,
    PRIMARY KEY ( id )
);