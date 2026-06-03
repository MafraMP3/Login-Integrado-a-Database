/* Instrução SQL que cria o banco se ele nao existir */
CREATE DATABASE IF NOT EXISTS sistema_simples_mafra;
/* Instrução SQL define o banco usado para os comandos posteriores */
USE sistema_simples_mafra;

/* Instrução SQL que cria a tabela usuario e suas colunas */
CREATE TABLE usuario(
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255)NOT NULL,
    senha VARCHAR(255)NOT NULL
);

/* Instrução SQL que insere os valores admin e 123 na tabela usuario */
INSERT INTO usuario (usuario,senha) VALUE ('admin','123');