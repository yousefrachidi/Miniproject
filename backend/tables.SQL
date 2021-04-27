/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  22/04/2021 02:13:36                      */
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
create table PTIENT
(
   ID_PATIENT           int not null,
   NOM                  char(25) not null,
   PRENOM               char(25) not null,
   E_MAIL               char(25) not null,
   DATENAISSANCE        date,
   CIN                  char(25) not null,
   TELE                 char(25) not null,
   MT_PASSE             char(255) not null,
   SIXE                 char(25) not null,
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
   ID_PATIENT           int not null,
   ID_RECEPTION         int not null,
   ID_RENDEZ            int not null,
   DATE_RENDEZ          timestamp,
   TYPE                 char(25) not null,
   primary key (ID_PATIENT, ID_RECEPTION)
);

alter table ORDONNANCE add constraint FK_ORDONNANCE foreign key (ID_ADMINE)
      references ADMINE (ID_ADMINE) on delete restrict on update restrict;

alter table ORDONNANCE add constraint FK_ORDONNANCE2 foreign key (ID_PATIENT)
      references PTIENT (ID_PATIENT) on delete restrict on update restrict;

alter table RENDEZ_VOUS add constraint FK_RENDEZ_VOUS foreign key (ID_RECEPTION)
      references RECEPTION (ID_RECEPTION) on delete restrict on update restrict;

alter table RENDEZ_VOUS add constraint FK_RENDEZ_VOUS2 foreign key (ID_PATIENT)
      references PTIENT (ID_PATIENT) on delete restrict on update restrict;

