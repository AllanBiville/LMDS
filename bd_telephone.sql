#-----------------------------------------------------------------------
#  Effacer la BD (si elle existait déjà)
#

DROP DATABASE IF EXISTS bd_telephone ;

#-----------------------------------------------------------------------
#  Créer la BD
#

CREATE DATABASE bd_telephone ;

#-----------------------------------------------------------------------
#  Utiliser la BD
#

USE bd_telephone ;

SET NAMES UTF8 ;

#-----------------------------------------------------------------------
#  Créer la Table Marque
#

CREATE TABLE Marque
(	id_marque		INT		NOT NULL   PRIMARY KEY   AUTO_INCREMENT,
	nom_marque		VARCHAR( 20 )		NOT NULL 
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

#-----------------------------------------------------------------------
#  Créer des marques
#

INSERT INTO Marque
(	id_marque,
	nom_marque
)
VALUES
	( '1'	,'Apple'),
    ( '2'	,'Huawei'),
	( '3'	,'Samsung');
#-----------------------------------------------------------------------
#  Créer la Table Modele
#

CREATE TABLE Modele
(	id_modele		INT		NOT NULL   PRIMARY KEY   AUTO_INCREMENT,
	nom_modele		VARCHAR( 20 )		NOT NULL, 
    id_marque		INT		NOT NULL    ,
    FOREIGN KEY(id_marque) REFERENCES Marque(id_marque)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;


#-----------------------------------------------------------------------
#  Créer des Modele
#

INSERT INTO Modele
(	id_modele,
	nom_modele,
    id_marque
)
VALUES
	( '1'	,'Iphone X','1'),
    ( '2'	,'Iphone 11','1'),
	( '3'	,'Iphone 12','1');
#-----------------------------------------------------------------------
