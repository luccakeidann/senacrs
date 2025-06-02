BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "alunos" (
	"id_aluno"	INTEGER,
	"nome"	TEXT NOT NULL,
	"idade"	INTEGER NOT NULL,
	"fone"	INTEGER NOT NULL,
	PRIMARY KEY("id_aluno" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "cursos" (
	"id_curso"	INTEGER,
	"curso"	TEXT NOT NULL,
	"carga_horaria"	INTEGER NOT NULL,
	PRIMARY KEY("id_curso" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "professores" (
	"id_profª"	INTEGER,
	"nome"	TEXT NOT NULL,
	"curso"	TEXT NOT NULL,
	PRIMARY KEY("id_profª" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "aulas" (
	"id_aula"	INTEGER,
	"data"	TEXT NOT NULL,
	"horário"	TEXT NOT NULL,
	"professor"	TEXT NOT NULL,
	PRIMARY KEY("id_aula" AUTOINCREMENT)
);
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (1,'Lamine Yamal',17,23375673421);
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (2,'Christian Oliveira',12,58372495832);
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (3,'Renato cariani',9,76543098256);
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (4,'Carlos Pitanga',14,12345678910);
INSERT INTO "alunos" ("id_aluno","nome","idade","fone") VALUES (5,'Franco Cristaldo',11,10987654321);
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (1,'Canto','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (2,'Piano','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (3,'Teclado','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (4,'Violão','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (5,'Baixo','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (6,'Guitarra','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (7,'Bateria','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (8,'Violino','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (9,'Ukulele','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (10,'Acordeon','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (11,'Saxofone','4h');
INSERT INTO "cursos" ("id_curso","curso","carga_horaria") VALUES (12,'Flauta','4h');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (1,'Samira Castro','Piano');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (2,'Luciano Pires','Violão');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (3,'Aghata Gonçalves','Canto');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (4,'Leonardo Borges','Teclado');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (5,'Caíque Pereira','Guitarra');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (6,'Eduardo Frazzi','Baixo');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (7,'Rodrigo Oliveira','Bateria');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (8,'Fábio Azevedo','Violino ');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (9,'Lucius Andrade','Saxofone');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (10,'Apollo Machado','Flauta');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (11,'Wesley Santos','Ukulele');
INSERT INTO "professores" ("id_profª","nome","curso") VALUES (12,'Bianca Silva','Acordeon');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (1,'02/06/2025','10:00','Samira ');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (2,'03/06/2025','10:30','Luciano');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (3,'04/06/2025','11:00','Aghata');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (4,'05/06/2025','11:30','caique');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (5,'06/06/2025','12:00','Leonardo');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (6,'07/06/2025','12:30','Eduardo');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (7,'08/06/2025','13:00','Rodrigo');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (8,'09/06/2025','13:30','Fabio');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (9,'10/06/2025','14:00','Lucius');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (10,'11/06/2025','14:30','Apollo');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (11,'12/06/2025','15:00','Bianca');
INSERT INTO "aulas" ("id_aula","data","horário","professor") VALUES (12,'13/06/2025','16:00','wesley');
COMMIT;
