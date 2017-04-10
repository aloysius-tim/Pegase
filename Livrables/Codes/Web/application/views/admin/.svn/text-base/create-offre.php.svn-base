<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>admin/offre_stage" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> Créer un stage</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                if(isset($message) && $message!='')
                    echo '<nav class="'.$couleur.'" role="navigation"><div class="nav-wrapper container">'.$message.'</div></nav>'
                ?>
                <div class="col s12">
                    <div class="row">
                        <div class="col s12 l12 white z-depth-1">
                            <form action="<?=base_url()?>admin/add_offre/addStage" method="post">
                                <div class="row">
                                    <div class="input-field col s12 l8">
                                        <input id="nomEtape" type="text" class="validate" name="nom_entreprise">
                                        <label for="nomEtape">Nom de l'entreprise</label>
                                        <?php echo form_error('nom_entreprise'); ?>
                                    </div>
                                    <div class="input-field col s12 l4">
                                        <input id="stagiaire" type="number" min="1" class="validate" name="nb_stagiaire" >
                                        <label for="stagiaire">Nombre de stagiaires souhaités</label>
                                        <?php echo form_error('nb_stagiaire'); ?>
                                    </div>
                                    <div class="input-field col s9">
                                        <input id="titre" type="text" class="validate" name="titre" >
                                        <label for="titre">Titre du stage</label>
                                        <?php echo form_error('titre'); ?>
                                    </div>
                                    <div class="input-field col s3">
                                        <input id="date" type="text" class="validate" name="date" >
                                        <label for="date">Date début stage</label>
                                        <?php echo form_error('date'); ?>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="description_courte" type="text" class="validate" name="description_courte">
                                        <label for="description_courte">Description courte</label>
                                        <?php echo form_error('description_courte'); ?>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" size="300" name="description"></textarea>
                                        <label for="textarea1">Description des tâches</label>
                                        <?php echo form_error('description'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 l8">
                                        <input id="adresse" type="text" class="validate" name="adresse">
                                        <label for="adresse">Adresse de l'entreprise</label>
                                        <?php echo form_error('adresse'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 l6">
                                        <input id="tel" type="tel" class="validate" name="numero_telephone" >
                                        <label for="tel">Numéro de téléphone</label>
                                        <?php echo form_error('numero_telephone'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 l6">
                                        <input id="mail" type="email" class="validate" name="email_contact" >
                                        <label for="mail">E-Mail de contact</label>
                                        <?php echo form_error('email_contact'); ?>
                                    </div>
                                    <div class="input-field col s12 l6">
                                        <input id="nomPrenom" type="text" class="validate" name="nom_contact">
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

                    </div>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>