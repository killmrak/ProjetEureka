<?php
/* BdUtil
   Liste de toutes les fonctions */
// Initialisation des constantes


// Functions

/* getBdLink - Renvoie le lien vers la BD
(void) -> (String) */
function getBdLink () =

/* addUser - Créer un nouvel utilisateur dans la BD
(link, login, pwd, surname, name, email, country, campFr, isProf, isResp) -> (void) */
function addUser ($link, $login, $pwd, $surname, $name, $email, $country, $campFr, $isProf, $isResp) =

/* delUser - Supprime un utilisateur de la BD
(link, idUser) -> (void) */
function delUser ($link, $idUser) =

/* isProf - Renvoie true si l’utilisateur est un professeur
(link, idUser) -> (boolean) */
function isProf ($link, $idUser) =

/* isResp - Renvoie true si l’utilisateur est un responsable
(link, idUser) -> (boolean) */
function isResp ($link, $idUser) =

/* getPwd - Renvoie le mot de passe de l'utilisateur
(link, idUser) -> (pwd) */
function getPwd ($link, $idUser) =

/* getId - Renvoie l’id de l’utilisateur
(link, login) -> (int) */
function getId ($link, $login) =

/* getNbQuest - Renvoie le nombre de question dans la BD
(link) -> (int) */
function getNbQuest ($link) =

/* getLvlMat - Renvoie un tableau de boolean avec pour index [L1][L2][L3][M1][M2]
(link, idMat) -> ([boolean]) */
function getLvlMat ($link, $idMatiere) =

/* getUserInfo - Renvoie un tableau de String avec pour index  [name][surmane][email][country][campFr]
(link, idUser) -> (String) */
function getUserInfo ($link, $idUser) =

/* getIdMat - Renvoie l’id de la matière
(link, nameMat) -> (int) */
function getIdMat ($link, $nameMat) =



// A définir
// chgName/Surname/Mail/Country Change le prénom/nom/mail/pays/Campus France de l’utilisateur
// (link, idUser, pwd/surname/name/email/country/campFr) -> (void)
// chgDesc/TitleMat
// (link, idMat) -> (void)
// chgLvlMatiere
// (link, idMat) -> (void)


/* addQuest - Créer une nouvelle question dans la BD
(link, idQuest, idMat, idUser, lvlQuest, quest, answ, goodAnsw, correction, coef) -> (void) */
function getBdLink ($link, $idQuest, $idMat, $idUser, $lvlQuest, $quest, $answ, $goodAnsw, $correction, $coef) =

/* delQuest - Supprimme une question dans la BD
(link, idQuestion) -> void Doit appeler delStatQuest */
function getBdLink ($link, $idQuestion) =

/* statLength - Renvoie la longueur de la table Stat
(link) -> (int) */
function getBdLink ($link) =

/* addStat - Créer une nouvelle stat dans la BD
(idQuest, idUser, goodRep, repUser) -> (void) */


/* occQuest - Renvoie le nombre d'occurence de la question dans la table Stat
(link, idQuest) -> int */


/* nbGoodAnsw - Renvoie le nombre de bonnes réponses envoyées pour une question
(link, idQuest) -> int */


/* delStatQuest - Supprime les stats associées à une question dans la table Stat
(link, idQuest) -> void */


/* getStatUserMat - Renvoie... 
(link, idUser, nameMat) -> (nbGoodAnsw, NbQuest) */


/* getStatUser - Renvoie le nombre de bonnes réponses  et le nombre total de formulaire envoyé pour un utilisateur 
(link, idUser) -> (nbBonneRep, NbQuestion) */


/* listQuestProf - Renvoie un tableau contenant la liste des idQuest écris par le professeur
(link, idUser) -> [idQuest] */
/* listEtu - Renvoie la liste des id de tous les utilisateurs de type étudiant
(link) -> ([idUser]) */
?>