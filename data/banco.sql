CREATE DATABASE IF NOT EXISTS casal_db;
USE casal_db;

-- LOGIN
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- ENCONTROS
CREATE TABLE encontros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    descricao TEXT
);

-- FOTOS
CREATE TABLE fotos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    caminho VARCHAR(255) NOT NULL,
    legenda VARCHAR(255),
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data DATE DEFAULT CURRENT_DATE
);

-- LUGARES
CREATE TABLE lugares (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(100),
    descricao TEXT
);

-- PRESENTES
CREATE TABLE presentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    data DATE
);
INSERT INTO usuarios (username, senha)
VALUES
    ('joao', '$2y$10$eK0Q2uTzKVpXm57pDnbN4u5gya2rP90lTCJZmmnKMSX4GjgOElpEe'),
    ('stefany', '$2y$10$bS3X9RDLMkfoac/y.R9QcOaauFZtTybi.YKne3AZHYhXo.JcxvFlK');
