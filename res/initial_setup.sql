use devdb;

create table tbl_encuestas ( id_encuesta integer not null auto_increment,
id_persona integer,
id_formulario integer,
primary key (id_encuesta) );

create table tbl_personas ( id_persona integer not null auto_increment,
nombre varchar(99),
sexo varchar(1),
salario decimal(8,
2),
provincia varchar(99),
edad integer,
primary key (id_persona) );

create table tbl_formulario ( id_formulario integer not null auto_increment,
preg_1 integer,
preg_2 integer,
preg_3 integer,
preg_4 integer,
preg_5 integer,
preg_6 integer,
preg_7 integer,
preg_8 integer,
preg_9 integer,
preg_10 integer,
res_1 integer,
res_2 integer,
res_3 integer,
res_4 integer,
res_5 integer,
res_6 integer,
res_7 integer,
res_8 integer,
res_9 integer,
res_10 integer,
primary key (id_formulario) );

create table tbl_cat_preguntas ( id_cat_pregunta integer not null auto_increment,
descripcion varchar(999),
primary key (id_cat_pregunta) );

create table tbl_cat_respuestas ( id_cat_respuesta integer not null auto_increment,
id_cat_pregunta integer,
descripcion varchar(999),
primary key (id_cat_respuesta) );

alter table tbl_encuestas add constraint encuestas_personas_fk foreign key (id_persona) references tbl_personas (id_persona);

alter table tbl_encuestas add constraint encuestas_formulario_fk foreign key (id_formulario) references tbl_formulario (id_formulario);

alter table tbl_cat_respuestas add constraint respuestas_preguntas_fk foreign key (id_cat_pregunta) references tbl_cat_preguntas (id_cat_pregunta);

insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (1,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (2,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (3,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (4,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (5,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (6,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (7,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (8,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (9,
'¿De qué forma disfruta de sus vacaciones?');
insert
	into
	tbl_cat_preguntas (id_cat_pregunta,
	descripcion)
values (10,
'¿De qué forma disfruta de sus vacaciones?');
