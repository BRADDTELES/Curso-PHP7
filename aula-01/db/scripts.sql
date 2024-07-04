CREATE DATABASE IF NOT EXISTS curso_php

CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)

INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) 
VALUES ('Maria Silva',
        '2001-11-11',
        'maria_silva@gmail.com',
        'http://mariasilvao.co',
        0,
        7800.12)

UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?

DELETE FROM cadastro WHERE id = 1

SELECT * FROM cadastro