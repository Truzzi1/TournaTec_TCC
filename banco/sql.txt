CREATE DATABASE bd_interclasse;

USE bd_interclasse;

CREATE TABLE tb_usuario (
 id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_usuario VARCHAR(30) NOT NULL,
 email_usuario VARCHAR(50) NOT NULL,
 senha_usuario VARCHAR(40) NOT NULL
);

CREATE TABLE tb_torneio (
 id_torneio INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_torneio VARCHAR(40) NOT NULL,
 quantidade_time INT NOT NULL,
 modalidade VARCHAR(20) NOT NULL,
cod_usuario INT NOT NULL,
 FOREIGN KEY (cod_usuario) REFERENCES tb_usuario (id_usuario)    
);

CREATE TABLE tb_time (
 id_time INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_time VARCHAR(15),
 cod_torneio INT NOT NULL,
 FOREIGN KEY (cod_torneio) REFERENCES tb_torneio(id_torneio)
);
							 
CREATE TABLE tb_jogos (
	id_jogos INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	cod_torneio INT NOT NULL,
	TIME1 VARCHAR(15),
	TIME2 VARCHAR(15),
	FASE INT NOT NULL,
	FOREIGN KEY (cod_torneio) REFERENCES tb_torneio(id_torneio)
);

INSERT INTO tb_usuario (nome_usuario, email_usuario, senha_usuario) VALUES ("ADM", "adm@gmail.com", "adm");

INSERT INTO tb_torneio (nome_torneio, quantidade_time, modalidade, cod_usuario) VALUES ("ETEC16", 16,"Futebol", 1);

INSERT INTO tb_torneio (nome_torneio, quantidade_time, modalidade, cod_usuario) VALUES ("ETEC8", 8,"Futebol", 1);

INSERT INTO tb_torneio (nome_torneio, quantidade_time, modalidade, cod_usuario) VALUES ("ETEC4", 4,"Futebol", 1);

INSERT INTO tb_time (nome_time, cod_torneio) VALUES 
						 	 ("Time1", 1),
							 ("Time2", 1),
							 ("Time3", 1),
							 ("Time4", 1),
							 ("Time5", 1),
							 ("Time6", 1),
							 ("Time7", 1),
							 ("Time8", 1),
							 ("Time9", 1),
							 ("Time10", 1),
							 ("Time11", 1),
							 ("Time12", 1),
							 ("Time13", 1),
							 ("Time14", 1),
							 ("Time15", 1),
							 ("Time16", 1);
							 
INSERT INTO tb_time (nome_time, cod_torneio) VALUES 
							 ("Time1", 2),
							 ("Time2", 2),
							 ("Time3", 2),
							 ("Time4", 2),
							 ("Time5", 2),
							 ("Time6", 2),
							 ("Time7", 2),
							 ("Time8", 2);
							 
INSERT INTO tb_time (nome_time, cod_torneio) VALUES 
							 ("Time1", 3),
							 ("Time2", 3),
							 ("Time3", 3),
							 ("Time4", 3);