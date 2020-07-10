CREATE DATABASE imgupload

CREATE TABLE users(
    id int(11) not NULL PRIMARY KEY AUTO_INCREMENT,
    first varchar(256) not NULL,
    last varchar(256) not NULL,
    username varchar(256) not NULL,
    password varchar(256) not NULL
);

CREATE TABLE profileimg(
    id int(11) not NULL PRIMARY KEY AUTO_INCREMENT,
    userid int(11) not NULL,
    status int(11) not NULL
);