CREATE DATABASE IF NOT EXISTS encuestas;

use encuestas;

create TABLE preguntas(
    id_preguntas int auto_increment,
    descripcion varchar(500) not NULL,
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


CREATE TABLE datos(
    id int auto_increment,
    sexo CHAR(1) not null,
    edad int not null,
    salario DOUBLE not null,
    provincia varchar(20),
    CONSTRAINT pk_id PRIMARY KEY(id)
);


use encuestas;


select * from preguntas;
SELECT * from respuestas;
use encuestas;
SELECT resp.descripcion As 'respuesta',pr.descripcion As 'pregunta' from respuestas resp, preguntas pr 
WHERE resp.id_preguntas= pr.id_preguntas

use encuestas;
SELECT * FROM respuestas where id_preguntas= 1