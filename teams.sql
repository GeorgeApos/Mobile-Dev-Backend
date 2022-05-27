CREATE TABLE teams (
    name VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    logo BLOB,
    PRIMARY KEY (name, city)
);
