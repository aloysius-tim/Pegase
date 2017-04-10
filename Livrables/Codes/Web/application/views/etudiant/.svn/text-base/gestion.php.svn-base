<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Gérer mon stage</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
                if($ficheRenseignement->soumis==0 && $ficheRenseignement->valide==0){
                    echo'
                        <a href="'.base_url().'etudiant/gestion_stage/soumettre" class="btn blue waves-effect waves-light full-width">Soumettre les informations à l\'administration<i class="right mdi-content-send"></i> </a>
                        <a href="mailto:Beatrice.BRUN@unice.fr" class="btn blue waves-effect waves-light full-width">Indiquer par mail que l\'offre de stage a été soumise<i class="right mdi-communication-quick-contacts-mail"></i> </a>
                    ';
                }
            ?>
            <div class="row z-depth-1-half">
                <?php
                if($message!='')
                    echo '<nav class="'.$couleur.'" role="navigation"><div class="nav-wrapper container">'.$message.'</div></nav>'
                    //echo '<script type="text/javascript">$(document).ready(function() {toast("gfd",4000);});</script>'
                ?>
                <div class="col s12 white">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a class="active" href="#renseignement">Mes renseignements</a></li>
                            <li class="tab col s3"><a href="#entreprise">Fiche d'entreprise</a></li>
                        </ul>
                    </div>
                    <div id="renseignement" class="col s12 margin-it white">
                        <form method="post" action="<?=base_url()?>etudiant/gestion_stage/mes_renseignements">
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <input  value="<?=$nomUser?>" id="nom" type="text" class="validate" name="nom" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="nom">Nom - prénom de l'étudiant</label>
                                </div>
                            </div>
                            <div class="row margin-it">
                                <div class="input-field col s12 m6">
                                    <input id="insee" type="text" class="validate" name="numero_insee" value="<?php echo set_value('numero_insee', $ficheRenseignement->numero_insee); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="insee">Numéro INSEE</label>
                                    <?php echo form_error('numero_insee'); ?>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input  id="etudiant" type="text" class="validate" name="numero_etudiant" value="<?=$uid?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="etudiant">Numéro étudiant</label>
                                </div>
                            </div>
                            <div class="row margin-it">
                                <div class="input-field col s12 m6">
                                    <input id="sexe" type="text" class="validate" name="sexe" value="<?php echo set_value('sexe', $ficheRenseignement->sexe); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="sexe">Sexe (Mr ou Mme)</label>
                                    <?php echo form_error('sexe'); ?>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="dateNaissance" type="text" class="validate" name="dateNaissance" value="<?php echo set_value('dateNaissance', $ficheRenseignement->dateNaissance); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="dateNaissance">Date de naissance</label>
                                    <?php echo form_error('dateNaissance'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="adresse" type="text" class="validate" name="adresse" value="<?php echo set_value('adresse', $ficheRenseignement->adresse); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="adresse">Adresse durant le stage</label>
                                    <?php echo form_error('adresse'); ?>
                                </div>
                            </div>
                            <div class="row margin-it">
                                <div class="input-field col s12 m6">
                                    <input id="mail" type="email" class="validate" name="email" value="<?php echo set_value('email', $ficheRenseignement->email); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="mail">E-Mail</label>
                                    <?php echo form_error('email'); ?>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="telephone" type="tel" class="validate" name="numero_tel" value="<?php echo set_value('numero_tel', $ficheRenseignement->numero_tel); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="telephone">Numéro téléphone</label>
                                    <?php echo form_error('numero_tel'); ?>
                                </div>
                            </div>
                            <?
                            if(!$ficheRenseignement->valide==1){
                                    echo '<button class="btn waves-effect waves-light full-width" type="submit" name="action">Valider les informations<i class="mdi-content-save right white-text"></i></button>';
                                }
                            ?>
                        </form>
                    </div>
                    <div id="entreprise" class="col s12 white margin-it">
                        <form method="post" action="<?=base_url()?>etudiant/gestion_stage/stage">
                            <h5>Stage</h5>
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <input id="sujetStage" maxlength="120" type="text" class="validate" name="sujet_stage" value="<?php echo set_value('sujet_stage', $ficheRenseignement->sujet_stage); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?> >
                                    <label for="sujetStage">Sujet du stage (1 ligne)</label>
                                    <?php echo form_error('sujet_stage'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <textarea id="resumeStage" class="materialize-textarea" name="resume_stage" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>><?php echo set_value('resume_stage', $ficheRenseignement->resume_stage); ?></textarea>
                                    <label for="resumeStage">Résumé du stage</label>
                                    <?php echo form_error('resume_stage'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m4">
                                    <input id="dateDebut" maxlength="120" type="text" class="validate" name="dateDebut" value="<?php echo set_value('dateDebut', $ficheRenseignement->dateDebut); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?> >
                                    <label for="dateDebut">Date du début du stage</label>
                                    <?php echo form_error('dateDebut'); ?>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="dateFin" maxlength="120" type="text" class="validate" name="dateFin" value="<?php echo set_value('dateFin', $ficheRenseignement->dateFin); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?> >
                                    <label for="dateFin">Date de fin du stage</label>
                                    <?php echo form_error('dateFin'); ?>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="serviceConcerne" maxlength="120" type="text" class="validate" name="serviceConcerne" value="<?php echo set_value('serviceConcerne', $ficheRenseignement->serviceConcerne); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?> >
                                    <label for="serviceConcerne">Service concerné au stage</label>
                                    <?php echo form_error('serviceConcerne'); ?>
                                </div>
                            </div>
                            <?
                            if(!$ficheRenseignement->valide==1){
                                    echo '<button class="btn waves-effect waves-light full-width" type="submit" name="action">Valider les informations<i class="mdi-content-save right white-text"></i></button>';
                                }
                            ?>
                        </form>
                        <form method="post" action="<?=base_url()?>etudiant/gestion_stage/organisme_accueil">
                            <h5>Organisme d'accueil</h5>
                            <div class="row">
                            <div class="input-field col s12 m12">
                                <input id="nomO" type="text" class="validate" name="nom_organisme" value="<?php echo set_value('nom_organisme', $ficheRenseignement->nom_organisme); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                <label for="nomO">Nom organisme</label>
                                <?php echo form_error('nom_organisme'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m12">
                                <input id="adresseO" type="text" class="validate" name="adresse_organisme" value="<?php echo set_value('adresse_organisme', $ficheRenseignement->adresse_organisme); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                <label for="adresseO">Adresse organisme</label>
                                <?php echo form_error('adresse_organisme'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="telO" type="tel" class="validate" name="telephone_organisme" value="<?php echo set_value('telephone_organisme', $ficheRenseignement->telephone_organisme); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                <label for="telO">Téléphone</label>
                                <?php echo form_error('telephone_organisme'); ?>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="faxO" type="tel" class="validate" name="fax_organisme" value="<?php echo set_value('fax_organisme', $ficheRenseignement->fax_organisme); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                <label for="faxO">Fax</label>
                                <?php echo form_error('fax_organisme'); ?>

                            </div>
                            <div class="input-field col s12">
                                <input id="mail0" type="email" class="validate" name="email_organisme" value="<?php echo set_value('email_organisme', $ficheRenseignement->email_organisme); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                <label for="mail0">E-Mail</label>
                                <?php echo form_error('email_organisme'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nomPR" type="text" class="validate" name="nom_prenom_representant" value="<?php echo set_value('nom_prenom_representant', $ficheRenseignement->nom_prenom_representant); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                <label for="nomPR">Nom - prénom du représentant</label>
                                <?php echo form_error('nom_prenom_representant'); ?>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="qualiteR" type="text" class="validate" name="qualite_representant" value="<?php echo set_value('qualite_representant', $ficheRenseignement->qualite_representant); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                <label for="qualiteR">Qualité du représentant</label>
                                <?php echo form_error('qualite_representant'); ?>
                            </div>
                        </div>
                        <?
                        if(!$ficheRenseignement->valide==1){
                                echo '<button class="btn waves-effect waves-light full-width" type="submit" name="action">Valider les informations<i class="mdi-content-save right white-text"></i></button>';
                            }
                        ?>
                        </form>

                        <form  method="post" action="<?=base_url()?>etudiant/gestion_stage/maitre_stage">
                            <h5>Maître de stage en entreprise</h5>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input id="nomM" type="text" class="validate" name="nom_maitre_stage" value="<?php echo set_value('nom_maitre_stage', $ficheRenseignement->nom_maitre_stage); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="nomM">Nom</label>
                                    <?php echo form_error('nom_maitre_stage'); ?>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="prenomM" type="text" class="validate" name="prenom_maitre_stage" value="<?php echo set_value('prenom_maitre_stage', $ficheRenseignement->prenom_maitre_stage); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="prenomM">Prénom</label>
                                    <?php echo form_error('prenom_maitre_stage'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <input id="fonctionM" type="text" class="validate" name="fonction_maitre_stage" value="<?php echo set_value('fonction_maitre_stage', $ficheRenseignement->fonction_maitre_stage); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="fonctionM">Fonction</label>
                                    <?php echo form_error('fonction_maitre_stage'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input id="telM" type="tel" class="validate" name="telephone_maitre_stage" value="<?php echo set_value('telephone_maitre_stage', $ficheRenseignement->telephone_maitre_stage); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="telM">Téléphone</label>
                                    <?php echo form_error('telephone_maitre_stage'); ?>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input id="mailM" type="email" class="validate" name="email_maitre_stage" value="<?php echo set_value('email_maitre_stage', $ficheRenseignement->email_maitre_stage); ?>" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>>
                                    <label for="mailM">E-Mail</label>
                                    <?php echo form_error('email_maitre_stage'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <textarea id="adresseDesignationDuService" class="materialize-textarea" name="adresse_service_deroulement_stage" <?php if($ficheRenseignement->valide==1) echo 'disabled'; ?>><?php echo set_value('adresse_service_deroulement_stage', $ficheRenseignement->adresse_service_deroulement_stage); ?></textarea>
                                    <label for="adresseDesignationDuService">Adresse et désignation du service du déroulement du stage</label>
                                    <?php echo form_error('adresse_service_deroulement_stage'); ?>
                                </div>
                            </div>
                            <?
                            if(!$ficheRenseignement->valide==1){
                                echo '<button class="btn waves-effect waves-light full-width" type="submit" name="action">Valider les informations<i class="mdi-content-send right white-text"></i></button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>