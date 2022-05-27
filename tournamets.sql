CREATE TABLE tournaments (
    name VARCHAR(30) NOT NULL,
    team VARCHAR(30),
    PRIMARY KEY (name,team),
    FOREIGN KEY (team) REFERENCES teams(name)
);