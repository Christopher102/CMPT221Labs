CREATE DATABASE IF NOT EXISTS site_db;

USE site_db;

CREATE TABLE IF NOT EXISTS myusers
(username TEXT,
password TEXT,
ID decimal(6),
Permissions TEXT
);
