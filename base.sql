#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Type_Vehicule
#------------------------------------------------------------

CREATE TABLE Type_Vehicule(
        id_type      int (11) Auto_increment  NOT NULL ,
        nom          Varchar (25) ,
        energie      Varchar (25) ,
        prix_horaire Float ,
        PRIMARY KEY (id_type ) ,
        UNIQUE (nom )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id_client int (11) Auto_increment  NOT NULL ,
        nom_clent Varchar (25) ,
        prenom    Varchar (25) ,
        addresse  Varchar (25) ,
        ville     Varchar (25) ,
        CIN       Varchar (25) ,
        PRIMARY KEY (id_client ) ,
        UNIQUE (CIN )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Tarif
#------------------------------------------------------------

CREATE TABLE Tarif(
        id_tarif   Int NOT NULL ,
        prix_total Float ,
        id_client  Int ,
        PRIMARY KEY (id_tarif )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Vehicule
#------------------------------------------------------------

CREATE TABLE Vehicule(
        id_Vehicule    int (11) Auto_increment  NOT NULL ,
        marque         Varchar (25) ,
        imatriculation Varchar (25) ,
        date_revision  Date ,
        id_type        Int ,
        PRIMARY KEY (id_Vehicule ) ,
        UNIQUE (imatriculation )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Louer
#------------------------------------------------------------

CREATE TABLE Louer(
        num_location Int ,
        date_debut   Date ,
        date_fin     Date ,
        id_Vehicule  Int NOT NULL ,
        id_client    Int NOT NULL ,
        PRIMARY KEY (id_Vehicule ,id_client )
)ENGINE=InnoDB;

ALTER TABLE Tarif ADD CONSTRAINT FK_Tarif_id_client FOREIGN KEY (id_client) REFERENCES Client(id_client);
ALTER TABLE Vehicule ADD CONSTRAINT FK_Vehicule_id_type FOREIGN KEY (id_type) REFERENCES Type_Vehicule(id_type);
ALTER TABLE Louer ADD CONSTRAINT FK_Louer_id_Vehicule FOREIGN KEY (id_Vehicule) REFERENCES Vehicule(id_Vehicule);
ALTER TABLE Louer ADD CONSTRAINT FK_Louer_id_client FOREIGN KEY (id_client) REFERENCES Client(id_client);
