CREATE DATABASE LOJAQUADROS;  

USE LOJAQUADROS;

CREATE TABLE Cliente (
 id_cliente INT PRIMARY KEY AUTO_INCREMENT,
 CPF VARCHAR(11) NOT NULL,  
 Nome VARCHAR(150) NOT NULL,  
 Telefone INT,
 Celular INT
); 

CREATE TABLE login_cliente(
 Email VARCHAR(150),
 Senha VARCHAR(150)
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

select * from Produtos;

INSERT INTO Produtos(Nome, Preço, Tema) values
('Fantasminhas do Pac-man', 'R$ 80,99', 'Geek'), ('Star Wars -R2D2', 'R$ 67,99', 'Geek'), ('Herói e Vilão de Gotham City - Batman e Coringa', 'R$ 88,99', 'Geek'),('Super Mario Bros', 'R$ 96,99', 'Geek'), 
('Combinação de Cores', 'R$ 59,99', 'Office'), ('Abstratos', 'R$ 70,99', 'Office'), ('Flores em Preto e Branco', 'R$ 45,99', 'Office'), ('Conceitos Abstratos', 'R$ 85,99', 'Office'),
('Urso Arqueiro', 'R$ 105,99', 'Kids'), ('Viagem ao espaço', 'R$ 66,99', 'Kids'), ('Aventuras em alto Mar', 'R$ 87,99', 'Kids'), ('Fada dos Desejos', 'R$ 88,99', 'Kids'),
('Parque Central', 'R$ 80,99', 'Room'), ('Na Beira da Praia', 'R$ 96,99', 'Room'), ('Por do Sol', 'R$ 67,99', 'Room'), ('Amanhecer Nas Neves', 'R$ 88,99', 'Room');