/* Sélectionner la base de données db_movies
Toutes les instructions suivantes
seront exécutées dans cette base de données */

USE db_movies;

DELETE FROM movies;
DELETE FROM roles;
DELETE FROM people;
DELETE FROM subjects;

INSERT INTO subjects
(subject_id, subject_name)
VALUES 
(1,'Comedy'),
(2,'Action'),
(3,'Romance'),
(4,'Horror'),
(5,'Adventure'),
(6, 'Sci-Fi'),
(7,'Western'),
(8,'Fantasy'),
(9,'Tragedy'),
(10,'Mystery')
;

INSERT INTO movies
(movie_id, movie_title, movie_year, movie_lenght, movie_awards, movie_popularity, subject_id)
VALUES
(1, 'My movie', 2021, 260, NULL, 99, 2)
;

SELECT * FROM movies;

SELECT * FROM subjects;

INSERT INTO roles
(role_id, role_name)
VALUES
(1,'Director'),
(2,'Actor'),
(3,'Actress')
;

SELECT * FROM roles;

INSERT INTO people
(person_id, person_lastname, person_firstname, person_gender)
VALUES
(1,'Iona','Irelia','W'),
(2,'Demacia','Garen','M'),
(3,'Nexus','Darius','M'),
(4,'Darkin','Kayn','H'),
(5,'Yoordle','Teemo','H')
;

SELECT * FROM people;

