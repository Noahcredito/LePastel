CREATE DATABASE BD_LEPASTEL;

USE BD_LEPASTEL;

CREATE TABLE tb_adm
(
 id_adm INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_adm VARCHAR(40),
 senha_adm VARCHAR(15),
 email_adm VARCHAR(40)
);

CREATE TABLE tb_produto
(
 id_prod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 cod_adm INT NOT NULL,
 nome_prod VARCHAR(40),
 desc_prod VARCHAR(100),
 valor_prod NUMERIC(4,2),
 FOREIGN KEY(cod_adm) REFERENCES tb_adm(id_adm)
);

CREATE TABLE tb_cliente
(
 id_cli INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_cli VARCHAR(40),
 senha_cli VARCHAR(15),
 email_cli VARCHAR(40),
 bairro_cli VARCHAR(20),
 complemento_cli VARCHAR(50),
 rua_cli VARCHAR(40),
 numero_cli VARCHAR(4),
 telefone_cli VARCHAR(15),
 cep_cli VARCHAR(10),
 cidade_cli VARCHAR(50)
);

CREATE TABLE tb_sorteio
(
 id_sort INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 cod_cli INT NOT NULL,
 cod_adm INT NOT NULL,
 data_sort DATE,
 FOREIGN KEY(cod_cli) REFERENCES tb_cliente(id_cli),
 FOREIGN KEY(cod_adm) REFERENCES tb_adm(id_adm)
);
