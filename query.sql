CREATE DATABASE noticia;
USE noticia;

CREATE TABLE noticia(
cd_idNoticia INT AUTO_INCREMENT,
nm_autor VARCHAR(90),
ds_fonte VARCHAR(100),
nm_titulo VARCHAR(45),
ds_conteudo TEXT,
CONSTRAINT pk_noticia PRIMARY KEY (cd_idNoticia)
);