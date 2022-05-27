CREATE TABLE players (
    name VARCHAR(30) NOT NULL,
    position VARCHAR(30) NOT NULL,
    photo BLOB,
    team VARCHAR(30),
    PRIMARY KEY (name,position,team),
    FOREIGN KEY (team) REFERENCES teams(name)
);
