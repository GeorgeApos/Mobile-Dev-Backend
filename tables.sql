CREATE TABLE teams (
    name VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    PRIMARY KEY logo VARBINARY
);

CREATE TABLE players (
    name VARCHAR(30) NOT NULL,
    position VARCHAR(30) NOT NULL,
    FOREIGN KEY team VARCHAR(30) NOT NULL REFERENCES teams.name,
    PRIMARY KEY photo VARBINARY
);

CREATE TABLE tournaments (
    name VARCHAR(30) NOT NULL,
    FOREIGN KEY team VARCHAR(30) NOT NULL REFERENCES teams.name
);

CREATE TABLE users ( 
    name VARCHAR(30) NOT NULL,
    boolean isAdmin
);
/* VARBINARY = 256 KB */ 

