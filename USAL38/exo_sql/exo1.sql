use exercice;

/* Obtenir la liste des 10 villes les plus peuplées en 2012 */
SELECT * FROM villes_france_free ORDER BY ville_population_2012 DESC LIMIT 0,10;

/* Obtenir la liste des 50 villes ayant la plus faible superficie */
SELECT * FROM villes_france_free ORDER BY ville_surface ASC LIMIT 50;

/* Obtenir la liste des départements d’outres-mer, c’est-à-dire ceux dont le numéro de département commencent par “97” */
