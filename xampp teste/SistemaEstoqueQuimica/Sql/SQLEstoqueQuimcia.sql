CREATE SCHEMA `dbEstoqueQuimica`;

USE dbEstoqueQuimica;

CREATE TABLE tblMateriais (
    id INT PRIMARY KEY AUTO_INCREMENT,
    NomeMaterial VARCHAR(255) NOT NULL,
    FormulaReagente VARCHAR(255),
    Quantidade DECIMAL(10, 2),
    Validade DATE
);


select * from tblMateriais;