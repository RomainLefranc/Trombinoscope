CREATE DATABASE Trombi CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Sections (
    codSec int NOT NULL AUTO_INCREMENT,
    libSec varchar(50),
    datDebSec date,
    obsvSec varchar(100),
    PRIMARY KEY(codSec)
);
CREATE TABLE Stagiaires (
    codSec int NOT NULL,
    codSta int NOT NULL,
    nomSta varchar(25),
    preSta varchar( 25),
    datNaisSta date,
    villeSta varchar(25),
    interneSta boolean,
    gsmSta varchar(25),
    mailSta varchar(50),
    obsvSta varchar(25),
    PRIMARY KEY(codSec,codSta)
);
CREATE TABLE Users (
    log varchar(25) NOT NULL,
    pwd varchar(25) NOT NULL,
    rol int NOT NULL,
    PRIMARY KEY (log)
);
CREATE TABLE News (
    datNews date NOT NULL,
    libNews varchar(100),
    PRIMARY KEY(datNews)
);
ALTER TABLE Stagiaires ADD CONSTRAINT Stagiaires_FK1 FOREIGN KEY (codSec) REFERENCES Sections (codSec);