# gestion-hospitalisation
l'application est basé sur html css js et php avec une base données mysql dabord ,
pour lancez lapp il se faut le lancer apartir du fichier index.html 
il se trouvent dans monster-lite1\login\index.html
vous dever creer les table dans une base donneés MySql 
d'abord une schema qui s'appele LOGIN dans cette schema vous devez creer un table users(id int,username varchar,password varchar),
en suite vous devez creer une schema qui s'appele hospital avec 4 table (hospitalisation,medecin,patient,service)
hospitalisation(Numero primary key,CIN ,medecinID FK*,created)
medecin(medecinID PK*, serviceID FK*, nom),
patient(CIN varchar pk*,Nom,daten,Adresse),
service(serviceID  PK*,Nom index),
PK:Primary ker , FK: foreign key ;;;;;;;;
