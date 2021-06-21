create database ecomerce_ciclismo;
use ecomerce_ciclismo;

CREATE TABLE `usuario` (
   id INT NOT NULL AUTO_INCREMENT,
   `usuario` VARCHAR(200) NOT NULL,
   `senha` VARCHAR(32) NOT NULL,
   `nome` VARCHAR(100) NOT NULL,
   `cargo` enum('adm', 'user') default 'user',
   data_cadastro datetime default CURRENT_TIMESTAMP,
   PRIMARY KEY (id)
);

INSERT INTO `usuario` (id, `usuario`, `nome`, `senha`, `cargo`) VALUES
(1, 'adm', 'adm', 'b09c600fddc573f117449b3723f23d64', 'adm');


create table categorias (
    id INT NOT NULL AUTO_INCREMENT,
    nome varchar(20) NOT NULL,
    PRIMARY KEY (id)
);

create table produtos(
     id int NOT NULL AUTO_INCREMENT,
     nome varchar(100) not null,
     imagem text NOT NULL,
     preco  varchar(100) not null,
     descricao text,
     quantidade  int,
     id_categoria int NOT NULL,
     constraint foreign key (id_categoria) references categorias(id),
     PRIMARY KEY (id)
);

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Basica'),
(2, 'Intermediaria'),
(3, 'Profissional');

