CREATE DATABASE IF NOT EXISTS encuestas;

use encuestas;
CREATE TABLE encuesta(
    id_encuesta int auto_increment,
    sexo char(1),
    provincia varchar(50),
    salario int,
    edad int,
    CONSTRAINT pk_id_encuesta PRIMARY KEY(id_encuesta)
);

use encuestas;
create TABLE preguntas(
    id_preguntas int auto_increment,
    descripcion varchar(500) not NULL,
    tipoPregunta varchar(20),
    id_encuesta int not null,
    CONSTRAINT fk_id_encuesta FOREIGN KEY(id_encuesta)
    REFERENCES encuesta(id_encuesta) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT pk_id_preguntas PRIMARY KEY(id_preguntas)
);


use encuestas;
CREATE TABLE respuestas(
    id_respuestas int auto_increment,
    descripcion VARCHAR(250) not NULL,
    id_preguntas int not null,
    CONSTRAINT fk_id_preguntas FOREIGN KEY (id_preguntas) 
    REFERENCES preguntas(id_preguntas) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT pk_id_respuestas PRIMARY KEY (id_respuestas) 
);


use encuestas;
INSERT INTO encuesta(sexo,provincia,salario,edad) VALUES
("m","Panama",1000,18),
("f","Chiriqui",800,19),
("m","Colon",850,20),
("f","Cocle",900,21),
("m","Herrera",1500,22)

use encuestas;
INSERT INTO preguntas(descripcion,tipoPregunta,id_encuesta) VALUES
("pregunta1","",1),
("pregunta2","unica",1),
("pregunta3","unica",2),
("pregunta4","unica",2),
("pregunta5","unica",3),
("pregunta6","multiple",3),
("pregunta7","multiple",4),
("pregunta8","multiple",4),
("pregunta9","multiple",5),
("pregunta10","multiple",5)


use encuestas;
INSERT INTO respuestas(descripcion,id_preguntas) VALUES
("respuesta1",1),
("respuesta2",1),
("respuesta3",2),
("respuesta4",2),
("respuesta5",3),
("respuesta6",3),
("respuesta7",4),
("respuesta8",4),
("respuesta9",5),
("respuesta10",5),
("respuesta11",6),
("respuesta12",6),
("respuesta13",7),
("respuesta14",7),
("respuesta15",8),
("respuesta16",8),
("respuesta17",9),
("respuesta18",9),
("respuesta19",10),
("respuesta20",10)


-- use encuestas;
-- INSERT INTO persona(nombre,sexo,provincia,salario,edad,id_encuesta) VALUES
-- ("usuario1",'m',"Panama",1000,25,1),
-- ("usuario2",'f',"Chiriqui",2000,18,1),
-- ("usuario3",'m',"Herrera",900,30,2),
-- ("usuario4",'f',"Cocle",3000,35,2),
-- ("usuario5",'m',"Veraguas",800,20,3),
-- ("usuario6",'f',"Colon",800,20,3),
-- ("usuario7",'m',"Bocas Del Toro",800,20,4),
-- ("usuario8",'f',"Darien",800,20,4),
-- ("usuario9",'m',"PanamaOeste",800,20,5),
-- ("usuario10",'f',"PanamaOeste",800,20,5)




--QUERY DE EJEMPLO

use encuestas;
SELECT p.nombre AS "usuario",p.sexo AS "Genero",en.nombre AS 'Encuesta' FROM preguntas pr
INNER JOIN respuestas resp ON pr.id_preguntas= resp.id_preguntas
INNER JOIN encuesta en ON pr.id_encuesta= en.id_encuesta
INNER JOIN persona p ON en.id_encuesta= p.id_encuesta
WHERE en.id_encuesta = 1 group by p.nombre;



use encuestas;
select count(p.sexo) from persona p
INNER JOIN encuesta e ON p.id_encuesta= e.id_encuesta
where p.sexo="m" and e.id_encuesta= 1

use encuestas;
select count(p.id_persona) from persona p
INNER JOIN encuesta e ON p.id_encuesta= e.id_encuesta
where e.id_encuesta= 1


--QUERY PARA LAS PREGUNTAS
use encuestas;
SELECT pr.descripcion As 'PREGUNTA', resp.descripcion AS 'RESPUESTA',pr.tipoPregunta AS 'tipo' FROM preguntas pr
INNER JOIN respuestas resp ON pr.id_preguntas= resp.id_preguntas ORDER BY rand() limit 10
 
use encuestas;
 SELECT descripcion from preguntas ORDER BY rand() limit 10



-- use encuestas;


-- select * from preguntas;
-- SELECT * from respuestas;
-- use encuestas;
-- SELECT resp.descripcion As 'respuesta',pr.descripcion As 'pregunta' from respuestas resp, preguntas pr 
-- WHERE resp.id_preguntas= pr.id_preguntas

-- use encuestas;
-- SELECT * FROM respuestas where id_preguntas= 1