/*==============================================================*/
/* Nom de SGBD :  InterBase 5.x                                 */
/* Date de cr�ation :  08-06-2022 13:31:17                      */
/*==============================================================*/


drop table Devis;

drop table Gallerie;

drop table Realisations;

drop table Services;

/*==============================================================*/
/* Table : Devis                                                */
/*==============================================================*/
create table Devis (
id_devis             int not null,
nom                  VARCHAR(254),
prenom               VARCHAR(254),
email                VARCHAR(254),
tel                  VARCHAR(254),
description          VARCHAR(254),
constraint PK_DEVIS primary key (id_devis)
);

/*==============================================================*/
/* Table : Gallerie                                             */
/*==============================================================*/
create table Gallerie (
id_gallerie          int not null,
media                VARCHAR(254),
type                 VARCHAR(254),
constraint PK_GALLERIE primary key (id_gallerie)
);

/*==============================================================*/
/* Table : Realisations                                         */
/*==============================================================*/
create table Realisations (
id_realisations      int not null,
id_gallerie          int not null,
titre                VARCHAR(254),
image                VARCHAR(254),
description          VARCHAR(254),
constraint PK_REALISATIONS primary key (id_realisations)
);

/*==============================================================*/
/* Table : Services                                             */
/*==============================================================*/
create table Services (
id_services          int not null,
nom                  VARCHAR(254),
description          VARCHAR(254),
constraint PK_SERVICES primary key (id_services),
constraint AK_IDENTIFIANT_1_SERVICES unique (id_services)
);

alter table Realisations
   add constraint FK_REALISAT_ASSOCIATI_GALLERIE foreign key (id_gallerie)
      references Gallerie (id_gallerie);

