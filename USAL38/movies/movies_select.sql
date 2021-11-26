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
 
 