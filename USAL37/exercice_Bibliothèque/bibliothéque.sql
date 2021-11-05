SHOW DATABASES;

DROP DATABASE IF EXISTS bibliotheque;

CREATE DATABASE IF NOT EXISTS bibliotheque;

USE bibliotheque;

DROP TABLE IF EXISTS bibliotheque.clients;

CREATE TABLE IF NOT EXISTS bibliotheque.clients
(
    client_id CHAR(8),
    client_firstname VARCHAR(50) NOT NULL,
    client_lastname VARCHAR(255) NOT NULL,
    client_adress TEXT NOT NULL,
    client_deposit DECIMAL(5,2) NOT NULL,
    PRIMARY KEY (client_id)
);

SHOW TABLES;
INSERT INTO bibliotheque.clients
(client_id, client_firstname, client_lastname, client_adress, client_deposit)
VALUES
('00000001', 'Hu', 'Tao', 'Wangsheng Funeral Parlor', 16.25);


