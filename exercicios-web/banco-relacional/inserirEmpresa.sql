ALTER TABLE empresas MODIFY cnpj VARCHAR(14);

INSERT INTO empresas 
    (nome, cnpj)
VALUES
    ('Bradesco', 95694186000132),
    ('Vale', 34148871000190),
    ('Cielo', 34148871000134);

DESC empresas;
desc prefeitos;
select * from empresas;
select * from cidades;

INSERT INTO empresas_unidades
    (empresas_id, cidades_id, sede)
VALUES
    (1, 1, 1),
    (1, 2, 0),
    (2, 1, 0),
    (2, 2, 1);