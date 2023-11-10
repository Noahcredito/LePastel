DROP DATABASE IF EXISTS BD_LEPASTEL;

CREATE DATABASE BD_LEPASTEL;

USE BD_LEPASTEL;

CREATE TABLE tb_adm
(
 id_adm INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_adm VARCHAR(40),
 senha_adm VARCHAR(15),
 email_adm VARCHAR(40),
 status_adm INT
);

CREATE TABLE tb_cliente
(
 id_cli INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_cli VARCHAR(40),
 senha_cli VARCHAR(15),
 email_cli VARCHAR(40),
 bairro_cli VARCHAR(20),
 rua_cli VARCHAR(40),
 numero_cli VARCHAR(4),
 telefone_cli VARCHAR(15),
 cep_cli VARCHAR(10),
 complemento_cli VARCHAR(50),
 cidade_cli VARCHAR(50),
 status_cli INT
);

CREATE TABLE tb_sorteio
(
 id_sor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 cod_cli INT NOT NULL,
 cod_adm INT NOT NULL,
 data_sor DATETIME,
 FOREIGN KEY(cod_cli) REFERENCES tb_cliente(id_cli),
 FOREIGN KEY(cod_adm) REFERENCES tb_adm(id_adm)
);

CREATE TABLE tb_cli_sort
(
cod_adm INT,
cod_cli INT,
FOREIGN KEY(cod_cli) REFERENCES tb_cliente(id_cli),
FOREIGN KEY(cod_adm) REFERENCES tb_adm(id_adm)
)
