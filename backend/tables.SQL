/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  22/04/2021 02:13:36                      */
/*==============================================================*/


drop table if exists ADMINE;

drop table if exists MEDICAMENT;

drop table if exists ORDONNANCE;

drop table if exists PTIENT;

drop table if exists RECEPTION;

drop table if exists RENDEZ_VOUS;

/*==============================================================*/
/* Utilisateur : ADMINE                                         */
/*==============================================================*/
create user ADMINE;

/*==============================================================*/
/* Table : ADMINE                                               */
/*==============================================================*/
create table ADMINE
(
   ID_ADMINE            int not null,
   E_MAIL               char(25) not null,
   MOT_PASSE            char(255) not null,
   NOM                  char(25) not null,
   PRENOM               char(25) not null,
   primary key (ID_ADMINE)
);

/*==============================================================*/
/* Table : MEDICAMENT                                           */
/*==============================================================*/
create table MEDICAMENT
(
   ID_MEDICAMNET        int not null,
   DESIGNATION          char(25) not null,
   TYPE_MEDICAMENT      char(25) not null,
   primary key (ID_MEDICAMNET)
);

/*==============================================================*/
/* Table : ORDONNANCE                                           */
/*==============================================================*/
create table ORDONNANCE
(
   ID_PATIENT           int not null,
   ID_ADMINE            int not null,
   ID_ORDONNANCE        int not null,
   DESCRIPTION          longtext not null,
   DATE_ORDONNACE       timestamp,
   primary key (ID_PATIENT, ID_ADMINE)
);

/*==============================================================*/
/* Table : PTIENT                                               */
/*==============================================================*/
create table Patient
(
   ID_PATIENT           int not null AUTO_INCREMENT,
   NOM                  varchar(25) not null,
   PRENOM               varchar(25) not null,
   E_MAIL               varchar(25) not null,
   DATENAISSANCE        date,
   CIN                  varchar(25) not null,
   TELE                 varchar(25) not null,
   MT_PASSE             varchar(255) not null,
   SIXE                 varchar(25) not null,
   primary key (ID_PATIENT)
);

/*==============================================================*/
/* Table : RECEPTION                                            */
/*==============================================================*/
create table RECEPTION
(
   ID_RECEPTION         int not null,
   E_MAIL               char(25) not null,
   MOT_PASSE            char(255) not null,
   NOM                  char(25) not null,
   PRENOM               char(25) not null,
   primary key (ID_RECEPTION)
);

/*==============================================================*/
/* Table : RENDEZ_VOUS                                          */
/*==============================================================*/
create table RENDEZ_VOUS
(  
   ID_RENDEZ            int not null AUTO_INCREMENT,
   ID_PATIENT           int not null,
   ID_RECEPTION         int  , 
   start_event          datetime,
   end_event            datetime,
   TYPE                 varchar(25)  ,
   primary key (ID_RENDEZ )
);

alter table ORDONNANCE add constraint FK_ORDONNANCE foreign key (ID_ADMINE)
      references ADMINE (ID_ADMINE) on delete restrict on update restrict;

alter table ORDONNANCE add constraint FK_ORDONNANCE2 foreign key (ID_PATIENT)
      references PTIENT (ID_PATIENT) on delete restrict on update restrict;

alter table RENDEZ_VOUS add constraint FK_RENDEZ_VOUS foreign key (ID_RECEPTION)
      references RECEPTION (ID_RECEPTION) on delete restrict on update restrict;

alter table RENDEZ_VOUS add constraint FK_RENDEZ_VOUS2 foreign key (ID_PATIENT)
      references PTIENT (ID_PATIENT) on delete restrict on update restrict;

