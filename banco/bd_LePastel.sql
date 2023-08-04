CREATE DATABASE BD_LEPASTEL

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
 id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 cod_adm INT NOT NULL,
 nome_produto VARCHAR(40),
 desc_produto VARCHAR(100),
 valor_produto NUMERIC(4,2),
 FOREIGN KEY(cod_adm) REFERENCES tb_adm(id_adm)
);

CREATE TABLE tb_cliente
(
 id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_cliente VARCHAR(40),
 senha_cliente VARCHAR(15),
 email_cliente VARCHAR(40),
 bairro_cliente VARCHAR(20),
 rua_cliente VARCHAR(40),
 numero_cliente VARCHAR(4),
 telefone_cliente VARCHAR(15)
);

CREATE TABLE tb_sorteio
(
 id_sorteio INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 cod_cliente INT NOT NULL,
 cod_adm INT NOT NULL,
 data_sorteio DATE,
 FOREIGN KEY(cod_cliente) REFERENCES tb_cliente(id_cliente),
 FOREIGN KEY(cod_adm) REFERENCES tb_adm(id_adm)
);

INSERT INTO tb_adm
(nome_adm, senha_adm, email_adm)
VALUES
('', '', '');

INSERT INTO tb_adm
(nome_adm, senha_adm, email_adm)
VALUES
('', '', '');