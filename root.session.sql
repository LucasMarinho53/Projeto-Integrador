CREATE DATABASE LOJAQUADROS;  

USE LOJAQUADROS;

CREATE TABLE Cliente (
 id_cliente INT PRIMARY KEY AUTO_INCREMENT,
 CPF VARCHAR(11) NOT NULL,  
 Nome VARCHAR(150) NOT NULL,  
 Email VARCHAR(150) NOT NULL,
 Senha VARCHAR(150) NOT NULL
); 

SELECT * FROM Cliente;

CREATE TABLE login_cliente(
 Email_Login VARCHAR(150),
 Senha_Login VARCHAR(150),
 FOREIGN KEY (Email_Login) REFERENCES Cliente(Email),
 FOREIGN KEY (Senha_Login) REFERENCES Cliente(Senha)
);

CREATE TABLE Endereco(   
 Numero VARCHAR(150) NOT NULL, 
 Complemento VARCHAR(150) NOT NULL, 
 CEP INT NOT NULL  
);

CREATE TABLE Produtos 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,
 Nome VARCHAR(50),  
 Preço VARCHAR(50),  
 Tema VARCHAR(50) 
);

CREATE TABLE Venda
(
ID_Venda INT PRIMARY KEY,
Data INT,
ID_produto INT,
Quantidadevenda INT,
ValorTotal INT,
ID_Cliente_venda INT,
Mes_Venda VARCHAR(9),
FOREIGN KEY (ID_Cliente_venda) REFERENCES Cliente (id_cliente ),
FOREIGN KEY (ID_produto) REFERENCES Produto(id)
);

select * from Produtos;

DROP TABLE Cliente;

select * from Cliente;

select * from Venda;

INSERT INTO Produtos(id,Nome, Preço, Tema) values
("01",'Fantasminhas do Pac-man', 'R$ 80,99', 'Geek'), ("02",'Star Wars -R2D2', 'R$ 67,99', 'Geek'), ("03",'Herói e Vilão de Gotham City - Batman e Coringa', 'R$ 88,99', 'Geek'),("04",'Super Mario Bros', 'R$ 96,99', 'Geek'), 
("05",'Combinação de Cores', 'R$ 59,99', 'Office'), ("06",'Abstratos', 'R$ 70,99', 'Office'), ("07",'Flores em Preto e Branco', 'R$ 45,99', 'Office'), ("08",'Conceitos Abstratos', 'R$ 85,99', 'Office'),
("09",'Urso Arqueiro', 'R$ 105,99', 'Kids'), ("10",'Viagem ao espaço', 'R$ 66,99', 'Kids'), ("11",'Aventuras em alto Mar', 'R$ 87,99', 'Kids'), ("12",'Fada dos Desejos', 'R$ 88,99', 'Kids'),
("13",'Parque Central', 'R$ 80,99', 'Room'), ("14",'Na Beira da Praia', 'R$ 96,99', 'Room'), ("15",'Por do Sol', 'R$ 67,99', 'Room'), ("16",'Amanhecer Nas Neves', 'R$ 88,99', 'Room');

INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("5","17","290","Janeiro","3");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("6","10","250","Janeiro","2");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("7","1","230","Janeiro","3");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("8","13","370","Novembro","5");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("9","3","80","Novembro","1");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("10","6","70","Novembro","1");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("11","8","90","Junho","1");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("12","4","50","Junho","1");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("13","9","300","Julho","4");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("14","15","250","Agosto","2");
INSERT INTO Venda(ID_Venda,ID_produto,ValorTotal,Mes_Venda,Quantidadevenda) VALUES ("15","19","150","Setembro","2");