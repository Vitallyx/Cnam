USE db_movies;

SELECT * FROM people;

SELECT person_firstname, person_lastname FROM people;

SELECT person_lastname, person_gender FROM people;

SELECT person_lastname, person_gender FROM people
	WHERE  person_gender='F' OR person_gender='O';
 
SELECT person_lastname, person_gender FROM people
	WHERE  person_gender NOT IN ('F', 'O');
 
SELECT person_lastname, person_gender FROM people
	WHERE  person_gender <> ('M');
  
SELECT movie_title , movie_year FROM movies
	WHERE movie_year > 1980;

SELECT movie_title, movie_year FROM movies ORDER BY movie_title ASC;

SELECT movie_title, movie_year FROM movies ORDER BY movie_title DESC;

SELECT movie_title, movie_year FROM movies
	WHERE movie_year > 1950
	ORDER BY movie_title DESC;
	
SELECT  movies.subject_id, movie_title, subject_name,  movie_year FROM movies
	JOIN subjects ON movies.subject_id = subjects.subject_id
	WHERE movie_year > 1950
	ORDER BY movie_year DESC;
