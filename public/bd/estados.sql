-- Create Table --

CREATE TABLE Estado (
    Id       INT          NOT NULL AUTO_INCREMENT,
    CodigoUf INT          NOT NULL,
    Nome     VARCHAR (50) NOT NULL,
    Uf       CHAR 	 (2)  NOT NULL,
    Regiao   INT	      NOT NULL,
    PRIMARY KEY (Id)
);

-- Insert Data --

Insert into Estado (CodigoUf, Nome, Uf, Regiao) values (12, 'Acre', 'AC', 1)
, (27, 'Alagoas', 'AL', 2)
, (16, 'Amapá', 'AP', 1)
, (13, 'Amazonas', 'AM', 1)
, (29, 'Bahia', 'BA', 2)
, (23, 'Ceará', 'CE', 2)
, (53, 'Distrito Federal', 'DF', 5)
, (32, 'Espírito Santo', 'ES', 3)
, (52, 'Goiás', 'GO', 5)
, (21, 'Maranhão', 'MA', 2)
, (51, 'Mato Grosso', 'MT', 5)
, (50, 'Mato Grosso do Sul', 'MS', 5)
, (31, 'Minas Gerais', 'MG', 3)
, (15, 'Pará', 'PA', 1)
, (25, 'Paraíba', 'PB', 2)
, (41, 'Paraná', 'PR', 4)
, (26, 'Pernambuco', 'PE', 2)
, (22, 'Piauí', 'PI', 2)
, (33, 'Rio de Janeiro', 'RJ', 3)
, (24, 'Rio Grande do Norte', 'RN', 2)
, (43, 'Rio Grande do Sul', 'RS', 4)
, (11, 'Rondônia', 'RO', 1)
, (14, 'Roraima', 'RR', 1)
, (42, 'Santa Catarina', 'SC', 4)
, (35, 'São Paulo', 'SP', 3)
, (28, 'Sergipe', 'SE', 2)
, (17, 'Tocantins', 'TO', 1);