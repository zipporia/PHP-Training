CREATE DATABASE users

CREATE TABLE members (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) not null,
    lname VARCHAR(255) not null,
    contact VARCHAR(255) not null,
    age VARCHAR(255) not null,
    active int(11)
);