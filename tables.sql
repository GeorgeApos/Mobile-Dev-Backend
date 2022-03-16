CREATE TABLE teams (
    name VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    logo VARBINARY
);

CREATE TABLE players (
    name VARCHAR(30) NOT NULL,
    position VARCHAR(30) NOT NULL,
    team VARCHAR(30) NOT NULL,
    photo VARBINARY
);



/* VARBINARY = 256 KB */ 

