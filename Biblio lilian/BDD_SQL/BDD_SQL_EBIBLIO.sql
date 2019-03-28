#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        ID_Client Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) NOT NULL ,
        Prenom    Varchar (50) NOT NULL ,
        Adresse   Varchar (150) NOT NULL ,
        Email     Varchar (150) NOT NULL ,
        Telephone Varchar (150) NOT NULL
	,CONSTRAINT client_PK PRIMARY KEY (ID_Client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genre
#------------------------------------------------------------

CREATE TABLE Genre(
        ID_Genre    Int  Auto_increment  NOT NULL ,
        Designation Varchar (150) NOT NULL
	,CONSTRAINT Genre_PK PRIMARY KEY (ID_Genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Livre
#------------------------------------------------------------

CREATE TABLE Livre(
        ID_Livre Int  Auto_increment  NOT NULL ,
        Libelle  Varchar (150) NOT NULL ,
        Prix     Int NOT NULL ,
        ID_Genre Int NOT NULL
	,CONSTRAINT Livre_PK PRIMARY KEY (ID_Livre)

	,CONSTRAINT Livre_Genre_FK FOREIGN KEY (ID_Genre) REFERENCES Genre(ID_Genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: location
#------------------------------------------------------------

CREATE TABLE location(
        ID_Location     Int  Auto_increment  NOT NULL ,
        DateDebLocation Date NOT NULL ,
        DateFinlocation Date NOT NULL ,
        ID_Livre        Int
	,CONSTRAINT location_PK PRIMARY KEY (ID_Location)

	,CONSTRAINT location_Livre_FK FOREIGN KEY (ID_Livre) REFERENCES Livre(ID_Livre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Achat
#------------------------------------------------------------

CREATE TABLE Achat(
        ID_Achat  Int  Auto_increment  NOT NULL ,
        DateAchat Date NOT NULL ,
        Quantite  Int NOT NULL
	,CONSTRAINT Achat_PK PRIMARY KEY (ID_Achat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Lecture
#------------------------------------------------------------

CREATE TABLE Lecture(
        ID_Lecture Int  Auto_increment  NOT NULL ,
        DateLect   Date NOT NULL ,
        HeureDeb   Time NOT NULL ,
        HeureFin   Time NOT NULL ,
        ID_Livre   Int
	,CONSTRAINT Lecture_PK PRIMARY KEY (ID_Lecture)

	,CONSTRAINT Lecture_Livre_FK FOREIGN KEY (ID_Livre) REFERENCES Livre(ID_Livre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Demande
#------------------------------------------------------------

CREATE TABLE Demande(
        ID_Location Int NOT NULL ,
        ID_Client   Int NOT NULL
	,CONSTRAINT Demande_PK PRIMARY KEY (ID_Location,ID_Client)

	,CONSTRAINT Demande_location_FK FOREIGN KEY (ID_Location) REFERENCES location(ID_Location)
	,CONSTRAINT Demande_client0_FK FOREIGN KEY (ID_Client) REFERENCES client(ID_Client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Acheter
#------------------------------------------------------------

CREATE TABLE Acheter(
        ID_Achat  Int NOT NULL ,
        ID_Client Int NOT NULL
	,CONSTRAINT Acheter_PK PRIMARY KEY (ID_Achat,ID_Client)

	,CONSTRAINT Acheter_Achat_FK FOREIGN KEY (ID_Achat) REFERENCES Achat(ID_Achat)
	,CONSTRAINT Acheter_client0_FK FOREIGN KEY (ID_Client) REFERENCES client(ID_Client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Lire
#------------------------------------------------------------

CREATE TABLE Lire(
        ID_Lecture Int NOT NULL ,
        ID_Client  Int NOT NULL
	,CONSTRAINT Lire_PK PRIMARY KEY (ID_Lecture,ID_Client)

	,CONSTRAINT Lire_Lecture_FK FOREIGN KEY (ID_Lecture) REFERENCES Lecture(ID_Lecture)
	,CONSTRAINT Lire_client0_FK FOREIGN KEY (ID_Client) REFERENCES client(ID_Client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Achat_Livre
#------------------------------------------------------------

CREATE TABLE Achat_Livre(
        ID_Achat Int NOT NULL ,
        ID_Livre Int NOT NULL
	,CONSTRAINT Achat_Livre_PK PRIMARY KEY (ID_Achat,ID_Livre)

	,CONSTRAINT Achat_Livre_Achat_FK FOREIGN KEY (ID_Achat) REFERENCES Achat(ID_Achat)
	,CONSTRAINT Achat_Livre_Livre0_FK FOREIGN KEY (ID_Livre) REFERENCES Livre(ID_Livre)
)ENGINE=InnoDB;

