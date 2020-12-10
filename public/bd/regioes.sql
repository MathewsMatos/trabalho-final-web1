-- Create Table --

CREATE TABLE tbl_regiao (
  Id 	INT 		NOT NULL AUTO_INCREMENT,
  Nome 	VARCHAR(50) NOT NULL,
  PRIMARY KEY (Id)
);

-- Insert Data --

Insert into tbl_regiao (Id, Nome) values (1, 'Norte')
,(2, 'Nordeste')
,(3, 'Sudeste')
,(4, 'Sul')
,(5, 'Centro-Oeste');