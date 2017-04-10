<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['dateDebutQuatriemeSemestre'] = new DateTime('01-01-2015');
$config['email_secretariat'] = 'pegasev2@gmail.com';
$config['mdp_email_secretariat'] = 'Sidney123';

//20 avril - 26 juin
//document -> 1 mois avant le stage
//24 novembre - 6 février


/*---------------------DEPOT------------------------------------------------------*/
$config['depot'][0]['nom']='attestation_responsabilite_civile';
$config['depot'][0]['titre']='Depot de l\'attestation de responsabilité civile';
$config['depot'][0]['date_limite']=date('Y').'-02-17';
$config['depot'][0]['consignes']='RAS';
$config['depot'][0]['id']=1;

$config['depot'][1]['nom']='carte-etudiante';
$config['depot'][1]['titre']='Depot de la carte étudiante';
$config['depot'][1]['date_limite']=date('Y').'-12-17';
$config['depot'][1]['consignes']='RAS';
$config['depot'][1]['id']=2;

$config['depot'][2]['nom']='carte_vitale';
$config['depot'][2]['titre']='Dépot de la carte vitale';
$config['depot'][2]['date_limite']=date('Y').'-12-17';
$config['depot'][2]['consignes']='RAS';
$config['depot'][2]['id']=3;

$config['depot'][3]['nom']='attestation_ouverture_droit_secu';
$config['depot'][3]['titre']='Depot de l\'attestation d\'ouverture des droits de securite sociale';
$config['depot'][3]['date_limite']=date('Y').'-12-17';
$config['depot'][3]['consignes']='RAS';
$config['depot'][3]['id']=4;

$config['depot'][4]['nom']='diapo_soutenance';
$config['depot'][4]['titre']='Depot des diapos de soutenance';
$config['depot'][4]['date_limite']=date('Y').'-12-17';
$config['depot'][4]['consignes']='RAS';
$config['depot'][4]['id']=5;

$config['depot'][5]['nom']='rapport_stage';
$config['depot'][5]['titre']='Depot du rapport de stage';
$config['depot'][5]['date_limite']=date('Y').'-01-17';
$config['depot'][5]['consignes']='RAS';
$config['depot'][5]['id']=6;

$config['depot'][6]['nom']='cdcf';
$config['depot'][6]['titre']='Depot du CDCF';
$config['depot'][6]['date_limite']=date('Y').'-01-17';
$config['depot'][6]['consignes']='RAS';
$config['depot'][6]['id']=7;
/*---------------------DEPOT------------------------------------------------------*/


/*---------------------ETAPES PRE STAGE-------------------------------------------*/
$config['etapes_pre_stage'][1]['titre'] = 'Remplir votre fiche de renseignement';
$config['etapes_pre_stage'][1]['date'] = '24 mars 2014';
$config['etapes_pre_stage'][1]['description'] = 'Courte description';

$config['etapes_pre_stage'][2]['titre'] = 'Rechercher un stage et remplir la fiche entreprise';
$config['etapes_pre_stage'][2]['date'] = '24 mars 2014';
$config['etapes_pre_stage'][2]['description'] = 'Courte description';

$config['etapes_pre_stage'][3]['titre'] = 'Validation du stage';
$config['etapes_pre_stage'][3]['date'] = '24 mars 2014';
$config['etapes_pre_stage'][3]['description'] = 'Courte description';

$config['etapes_pre_stage'][4]['titre'] = 'Signer la convention';
$config['etapes_pre_stage'][4]['date'] = '24 mars 2014';
$config['etapes_pre_stage'][4]['description'] = 'Courte description';
/*---------------------ETAPES PRE STAGE-------------------------------------------*/

/*---------------------ETAPES STAGE---------------------------------------------*/
$config['etapes_stage'][1]['titre'] = 'Effectuer le rendu du CDCF';
$config['etapes_stage'][1]['date'] = '24 mars 2014';
$config['etapes_stage'][1]['description'] = 'Courte description';

$config['etapes_stage'][2]['titre'] = 'Effectuer le rendu de';
$config['etapes_stage'][2]['date'] = '24 mars 2014';
$config['etapes_stage'][2]['description'] = 'Courte description';

$config['etapes_stage'][3]['titre'] = 'Validation du stage';
$config['etapes_stage'][3]['date'] = '24 mars 2014';
$config['etapes_stage'][3]['description'] = 'Courte description';

$config['etapes_stage'][4]['titre'] = 'Signer la convention';
$config['etapes_stage'][4]['date'] = '24 mars 2014';
$config['etapes_stage'][4]['description'] = 'Courte description';
/*---------------------ETAPES STAGE---------------------------------------------*/
