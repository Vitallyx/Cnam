USE db_movies;

SELECT * FROM people;

SELECT person_firstname, person_lastname FROM people;

SELECT person_lastname, person_gender FROM people;

SELECT person_lastname, person_gender FROM people
	WHERE  person_gender='F' OR person_gender='O'
;
 
SELECT person_lastname, person_gender FROM people
	WHERE  person_gender NOT IN ('F', 'O')
;
 
SELECT person_lastname, person_gender FROM people
	WHERE  person_gender <> ('M')
;
  
SELECT movie_title , movie_year FROM movies
	WHERE movie_year > 1980
;

SELECT movie_title, movie_year FROM movies ORDER BY movie_title ASC;

SELECT movie_title, movie_year FROM movies ORDER BY movie_title DESC;

SELECT movie_title, movie_year FROM movies
	WHERE movie_year > 1950
	ORDER BY movie_title DESC
;
	
/* Sélectionner les films dont l'annnée est supérieure à 1950 
avec les informations sur la catégorie (JOIN)
et on trie les résultats par année et par ordre décroissant */
	
SELECT  movies.subject_id, movie_title, subject_name,  movie_year FROM movies
	JOIN subjects ON movies.subject_id = subjects.subject_id
	WHERE movie_year > 1950
	ORDER BY movie_year DESC
;
	
SELECT person_lastname, person_firstname, role_name, movie_title FROM people
	JOIN movies_people ON people.person_id = movies_people.person_id
	JOIN roles ON roles.role_id = movies_people.role_id
;


SELECT movie_title, movie_lenght, movie_year, person_lastname, role_name FROM movies
	JOIN movies_people ON  movies.movie_id = movies_people.movie_id
	JOIN roles ON roles.role_id = movies_people.role_id
	JOIN people ON people.person_id = movies_people.person_id
;