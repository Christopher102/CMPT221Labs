
--This is Lab4 - Using Source Command

CREATE DATABASE IF NOT EXISTS site_db;

USE site_db;

CREATE TABLE IF NOT EXISTS MyFriends
(FirstName TEXT,
LastName TEXT);


SHOW TABLES;
EXPLAIN MyFriends;
INSERT INTO MyFriends VALUES ('Grant','Cerrone'),
('Jack','Mullane'),('Aj','Marrone'),('Dylan','Eisenhauer');

SELECT * FROM MyFriends;