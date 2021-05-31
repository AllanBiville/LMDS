#-----------------------------------------------------------------------
#  Effacer la BD (si elle existait déjà)
#

DROP DATABASE IF EXISTS bd_connexion ;

#-----------------------------------------------------------------------
#  Créer la BD
#

CREATE DATABASE bd_connexion ;

#-----------------------------------------------------------------------
#  Utiliser la BD
#

USE bd_connexion ;

SET NAMES UTF8 ;

#-----------------------------------------------------------------------
#  Créer la Table users
#

CREATE TABLE utilisateurs
(	id		INT		NOT NULL   PRIMARY KEY   AUTO_INCREMENT,
	username		CHAR( 20 )		NOT NULL ,
	password		CHAR( 20 )		NOT NULL 
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

#-----------------------------------------------------------------------
#  Créer des Personnes ...
#

INSERT INTO utilisateurs
(	id,
	username,
	password
)
VALUES
	( '1'	,'admin','admin');
	
#-----------------------------------------------------------------------
