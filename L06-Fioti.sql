# L06-Fioti
# Chris Fioti, 10/6/2020
# This lab is to create and modify data within a table
# Table name is L6_Fioti



USE site_db;


DROP TABLE IF EXISTS L6_Fioti;


CREATE TABLE IF NOT EXISTS L6_Fioti
    (rec_num INT auto_increment Primary Key,
    artist CHAR(20),
    cd_title VARCHAR(20),
    year_released INT,
    genre enum('Rock', 'Rap', 'Pop', 'Metal'));

EXPLAIN L6_Fioti;


INSERT INTO L6_Fioti(rec_num, artist, genre)
    VALUES
    (1,"Yung Gravy","Rap"),
    (2,"Green Day","Rock");


SELECT *
FROM L6_Fioti;


ALTER TABLE L6_Fioti
    ADD COLUMN Quantity INT DEFAULT 0 NOT NULL,
    ADD Last_Changed TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

INSERT INTO L6_Fioti(artist, genre)
    VALUES
    ('Fall Out Boy', 'Rock');


SELECT *
FROM L6_Fioti
ORDER BY rec_num DESC;

UPDATE L6_Fioti SET year_released = "2001" 
    WHERE rec_num = 1;

UPDATE L6_Fioti SET year_released = "2002" 
    WHERE rec_num = 2;

UPDATE L6_Fioti SET year_released = "2003" 
    WHERE rec_num = 3;

SELECT *
FROM L6_Fioti
ORDER BY rec_num ASC;


DELETE FROM L6_Fioti 
    WHERE rec_num = 1 OR rec_num = 3;

SELECT *
FROM L6_Fioti
ORDER BY rec_num ASC;

INSERT INTO L6_Fioti (artist, cd_title)
    VALUES
    ('The Beatles', 'Let It Be'),
    ('The Beatles', 'Abbey Road'),
    ('The Beatles', 'The Beatles'),
    ('The Beatles', 'Sgt Peppers'),
    ('The Beatles', 'Magical Mystery Tour');

UPDATE L6_Fioti SET genre = "Rock"
    WHERE artist = "The Beatles";

SELECT *
FROM L6_Fioti
ORDER BY rec_num ASC;


SELECT artist, cd_title, genre
FROM L6_Fioti
WHERE artist LIKE '%B%';

UPDATE L6_Fioti SET Last_Changed = '2020-01-01 12:00:00' WHERE rec_num = 2;

SELECT *
FROM L6_Fioti
ORDER BY rec_num ASC;

SELECT Count(rec_num) AS Total_Rows
FROM L6_Fioti;