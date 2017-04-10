<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>PEGASE - Accueil</title>

  <!-- CSS  -->
  <link href="<?=asset_url()?>css/accueil/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?=asset_url()?>css/accueil/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">
          <object id="front-page-logo" type="image/png" class="width-80" data="<?=asset_url()?>img/logo.png">Logo</object>
      </a>
      <ul class="right hide-on-med-and-down">
          <li><a class="modal-trigger" href="#posteroffre">Poster un stage</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="modal-trigger" href="#posteroffre">Poster un stage</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>

  <?php
    if(isset($message) && $message!='')
        echo '<nav class="'.$couleur.'" role="navigation"><div class="nav-wrapper container">'.$message.'</div></nav>'
  ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">PEGASE</h1>
        <div class="row center">
          <h5 class="header col s12 light">Programme Etudiant de Gestion et d'Administration de Stage en Entreprise</h5>
        </div>
          <div class="row center">
              <a id="download-button" class="btn-large waves-effect waves-light teal lighten-1 modal-trigger" href="<?=base_url()?>welcome/login">Connexion Etudiant / Administration</a>
          </div>
        <div class="row center">
          <a id="download-button" class="btn-large waves-effect waves-light teal lighten-1 modal-trigger" href="#posteroffre">Poster un stage</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?=base_url()?>assets/img/background1.jpg" alt="Unsplashed background img 2"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-av-timer"></i></h2>
            <h5 class="center">Rapide</h5>

            <p class="light">Obtenez rapidement des étudiants issu du département Informatique de l'IUT de Nice, ainsi sans aucune intervention postez votre offre de stage et recrtutez ! Une fois qu'un étudiant aura postulé à votre offre, vous n'aurez rien à faire, nous nous chargeons de tout!</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-social-group"></i></h2>
            <h5 class="center">Comptétences</h5>

            <p class="light">En utilisant PEGASE vous avez la certification d'obtenir des étudiants issu du département Informatique de l'IUT de Nice, vous permettant ainsi d'obtenir des stagiaires pouvant réaliser des étudiants BAC+2 pouvant réaliser vos tâches d'analyse, conception et développement.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-action-settings"></i></h2>
            <h5 class="center">Inperceptible</h5>

            <p class="light">PEGASE, l'outil de gestion des stages de du département Informatique de l'IUT de Nice, vous sera totalement inperceptible, en effet tout le travail de gestion et d'administration est effectué par la plateforme permettant de vous focaliser sur d'autres tâches.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Simplifiez-vous la vie, utilisez PEGASE.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?=base_url()?>assets/img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <!--Made by <a class="brown-text text-lighten-3" href="">Timothy Keynes</a> and <a class="brown-text text-lighten-3" href="">François Chastel</a>-->
      </div>
    </div>
  </footer>

  <div id="posteroffre" class="modal">
      <div class="modal-content">
          <h4>Poster une offre</h4>
          <form action="<?=base_url()?>welcome/addStage" method="post">
          <div class="row">
              <div class="input-field col s12 l8">
                  <input id="nomEtape" type="text" class="validate" name="nom_entreprise" value="<?php echo set_value('nom_entreprise'); ?>">
                  <label for="nomEtape">Nom de l'entreprise</label>
                  <?php echo form_error('nom_entreprise'); ?>
              </div>
              <div class="input-field col s12 l4">
                  <input id="stagiaire" type="number" min="1" class="validate" name="nb_stagiaire" value="<?php echo set_value('nb_stagiaire'); ?>">
                  <label for="stagiaire">Nombre de stagiaires souhaités</label>
                  <?php echo form_error('nb_stagiaire'); ?>
              </div>
              <div class="input-field col s9">
                  <input id="titre" type="text" class="validate" name="titre" value="<?php echo set_value('titre'); ?>">
                  <label for="titre">Titre du stage</label>
                  <?php echo form_error('titre'); ?>
              </div>
              <div class="input-field col s3">
                  <input id="date" type="text" class="validate" name="date" value="<?php echo set_value('date'); ?>">
                  <label for="date">Date début stage</label>
                  <?php echo form_error('date'); ?>
              </div>
              <div class="input-field col s12">
                  <input id="description_courte" type="text" class="validate" name="description_courte" value="<?php echo set_value('description_courte'); ?>">
                  <label for="description_courte">Description courte</label>
                  <?php echo form_error('description_courte'); ?>
              </div>
              <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" size="300" name="description"><?php echo set_value('description'); ?></textarea>
                  <label for="textarea1">Description des tâches</label>
                  <?php echo form_error('description'); ?>
              </div>
          </div>
          <div class="row">
              <div class="input-field col s12 l8">
                  <input id="adresse" type="text" class="validate" name="adresse" value="<?php echo set_value('adresse'); ?>">
                  <label for="adresse">Adresse de l'entreprise</label>
                  <?php echo form_error('adresse'); ?>
              </div>
          </div>
          <div class="row">
              <div class="input-field col s12 l6">
                  <input id="tel" type="tel" class="validate" name="numero_telephone" value="<?php echo set_value('numero_telephone'); ?>">
                  <label for="tel">Numéro de téléphone</label>
                  <?php echo form_error('numero_telephone'); ?>
              </div>
          </div>
          <div class="row">
              <div class="input-field col s12 l6">
                  <input id="mail" type="email" class="validate" name="email_contact" value="<?php echo set_value('email_contact'); ?>">
                  <label for="mail">E-Mail de contact</label>
                  <?php echo form_error('email_contact'); ?>
              </div>
              <div class="input-field col s12 l6">
                  <input id="nomPrenom" type="text" class="validate" name="nom_contact" value="<?php echo set_value('nom_contact'); ?>">
                  <label for="nomPrenom">Nom-Prénom de contact</label>
                  <?php echo form_error('nom_contact'); ?>
              </div>
          </div>
          <div class="row"></div>
          <div class="row">
              <div class="input-field col s12 l6">
                  <h6>Orientation(s) du stage</h6>
                  <?php
                      foreach($orientations as $orientation){
                          ?>
                              <p>
                                  <input type="checkbox" id="<?=$orientation->nom?>" value="<?=$orientation->id?>" name="orientations[]"/>
                                  <label for="<?=$orientation->nom?>"><?=$orientation->nom?></label>
                              </p>
                          <?php
                      }
                  ?>
              </div>
              <div class="input-field col s12 l6">
                  <h6>Langage(s) utilisé(s)</h6>
                  <?php
                  foreach($languages as $language){
                      ?>
                      <p>
                          <input type="checkbox" id="<?=$language->nom?>" value="<?=$language->id?>" name="languages[]"/>
                          <label for="<?=$language->nom?>"><?=$language->nom?></label>
                      </p>
                  <?php
                  }
                  ?>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="input-field col s12 l6">
                  <h6>Systéme utilisé(s)</h6>
                  <?php
                  foreach($systemes as $systeme){
                      ?>
                      <p>
                          <input type="checkbox" id="<?=$systeme->nom?>" value="<?=$systeme->id?>" name="systemes[]"/>
                          <label for="<?=$systeme->nom?>"><?=$systeme->nom?></label>
                      </p>
                  <?php
                  }
                  ?>
              </div>
          </div>
          <div class="row">
              <div class="col s12">
                  <button class="btn waves-effect waves-light right" type="submit" name="action">Poster l'offre
                      <i class="mdi-content-send right"></i>
                  </button>
              </div>
          </div>
      </form>
      </div>
      <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
      </div>
  </div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?=asset_url()?>js/accueil/materialize.js"></script>
  <script src="<?=asset_url()?>js/accueil/init.js"></script>

  </body>
</html>
