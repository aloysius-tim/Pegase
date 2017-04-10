<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?=asset_url()?>css/etudiant/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?=asset_url()?>css/etudiant/style.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>


    <!-- UNIQUEMENT FROALA !!! -->
    <link href="<?=asset_url()?>froala/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=asset_url()?>froala/css/froala_editor.min.css" rel="stylesheet" type="text/css">
    <link href="<?=asset_url()?>froala/css/froala_style.min.css" rel="stylesheet" type="text/css">
    <!-- -->
</head>

<body class="background-grey-light">

<header>
    <ul id="mobile-demo" class="side-nav fixed">
        <li class="none-hover">
            <a id="logo-container" href="#" class="brand-logo center margin-it">
                <object id="front-page-logo" type="image/svg+xml" class="width-80" data="<?=asset_url()?>/img/Pegase-logo.svg">Logo</object>
            </a>
        </li>
        <hr class="blue-grey">
        <li class="bold"><a href="<?=base_url()?>admin/accueil" class="waves-effect waves-teal">Informations importantes</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/etapes_stage" class="waves-effect waves-teal">Étapes du stage</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/offre_stage" class="waves-effect waves-teal active">Offre de stages</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/boite_depot" class="waves-effect waves-teal">Boite de dépôts</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/generation" class="waves-effect waves-teal">Génération document</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/liste_etudiant/etudiants" class="waves-effect waves-teal">Tous les étudiants de S4</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/archive" class="waves-effect waves-teal">Consulter les archives</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/administration" class="waves-effect waves-teal">Administration</a></li>
        <li class="bold"><a href="<?=base_url()?>admin/accueil/logout" class="waves-effect waves-teal">Déconnexion</a></li>
    </ul>
</header>