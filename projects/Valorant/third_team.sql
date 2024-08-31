/* Ascendant - Radiant */
CREATE DATABASE lc_db;

USE lc_db;

CREATE TABLE third_team (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL UNIQUE,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  ign_valo VARCHAR(100) NOT NULL,
  number int(11) NOT NULL,
  email VARCHAR(255) NOT NULL,
  appointment_date datetime NOT NULL,
  FOREIGN KEY (username) REFERENCES users(username)
);