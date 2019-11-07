--cantidad de hombres
SELECT COUNT(*)
FROM encuesta 
WHERE sexo = 'm'

--cantidad de mujeres
SELECT COUNT(*)
FROM encuesta 
WHERE sexo = 'f'

--cantidad de personas que son de la capital
SELECT COUNT(*)
FROM encuesta 
WHERE LOWER(provincia) LIKE '%pan%'

--cantidad de personas que no son de la capital
SELECT COUNT(*)
FROM encuesta 
WHERE LOWER(provincia) NOT LIKE '%pan%'

--cantidad de personas entre 20-30 años
SELECT COUNT(*)
FROM encuesta 
WHERE edad BETWEEN 20 AND 30;


