CREATE SCHEMA `dbEstoqueQuimica`;

USE dbEstoqueQuimica;

CREATE TABLE tblTiposReagentes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Descricao VARCHAR(255) NOT NULL
);

CREATE TABLE tblLaboratorio (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Descricao VARCHAR(255) NOT NULL
);

CREATE TABLE tblMateriais (
    id INT PRIMARY KEY AUTO_INCREMENT,
    NomeMaterial VARCHAR(255) NOT NULL,
    FormulaReagente VARCHAR(255),
    TipoReagente INT NOT NULL,
    Quantidade DECIMAL(10, 2),
    Laboratorio INT NOT NULL,
    Validade DATE,
    FOREIGN KEY (TipoReagente) REFERENCES tblTiposReagentes(id),
    FOREIGN KEY (Laboratorio) REFERENCES tblLaboratorio(id)
);

INSERT INTO tblTiposReagentes (Descricao) VALUES
('Tipo 1'),
('Tipo 2'),
('Tipo 3'),
('Outros');

INSERT INTO tblLaboratorio (Descricao) VALUES
('Quimica'),
('Multidisciplinar');
