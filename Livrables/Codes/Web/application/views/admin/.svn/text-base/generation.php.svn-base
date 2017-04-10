<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Génération convention de stages</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h5 class="col s12">Conventions en attente de validation</h5>
                <div class="col s12">
                        <ul class="collection no-border">
                            <?php
                            $i=0;
                            foreach($etudiants as $etudiant){
                                if(empty($etudiant['fiche_renseignement'])==false && $etudiant['fiche_renseignement'][0]->valide==0  &&  $etudiant['fiche_renseignement'][0]->soumis==1){
                                    $i++;
                                    ?>
                                        <li class="collection-item avatar max-height-auto background-grey-light">
                                            <i class="circle orange"><?=$i?></i>
                                            <span class="title"><?=$etudiant['fiche_renseignement'][0]->nom?> - <?=$etudiant['fiche_renseignement'][0]->nom_organisme?></span>
                                            <p class="grey-text truncate"><?=$etudiant['fiche_renseignement'][0]->date?><span class="right"><a href="<?=base_url()?>admin/detail_fiche_renseignement/index/<?=$etudiant['username']?>">Voir la fiche de renseignement</a></span></p>
                                        </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                </div>
                <h5 class="col s12">Conventions validées</h5>
                <div class="col s12">
                    <ul class="collection no-border">
                        <?php
                            foreach($etudiants as $key => $etudiant){
                                if(empty($etudiant['fiche_renseignement'])==false && $etudiant['fiche_renseignement'][0]->valide==1){
                                    ?>
                                        <li class="collection-item avatar max-height-auto background-grey-light">
                                            <i class="circle green"><?=$key+1?></i>
                                            <span class="title"><?=$etudiant['fiche_renseignement'][0]->nom?> - <?=$etudiant['fiche_renseignement'][0]->nom_organisme?></span>

                                            <p class="grey-text truncate"><?=$etudiant['fiche_renseignement'][0]->date?> - <span class="right"><a href="<?=base_url()?>admin/detail_fiche_renseignement/index/<?=$etudiant['fiche_renseignement'][0]->identifiant?>">Voir les informations</a></span></p>
                                        </li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
                <h5 class="col s12">Étudiants sans conventions<a class="right" href="mailto:S4T-iut-info@unice.fr">Faire un rappel</a></h5>
                <div class="col s12">
                    <ul class="collection no-border">
                        <li class="collection-item avatar max-height-auto background-grey-light">
                            <a href="<?=base_url()?>admin/liste_etudiant/sansConvention">
                                <i class="circle red"><?=$nbSansConvention?></i>
                                <span class="title">Voire tous les étudiants dont la convention n'a pas été générée</span>
                                <p class="grey-text truncate">Tous ces étudiants n'ont pas de convention de stage</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <h5 class="col s12">Étudiants n'ayant pas créé de compte<a class="right" href="mailto:S4T-iut-info@unice.fr">Faire un rappel</a></h5>
                <div class="col s12">
                    <ul class="collection no-border">
                        <li class="collection-item avatar max-height-auto background-grey-light">
                            <a href="<?=base_url()?>admin/liste_etudiant/sansCompte">
                                <i class="circle red"><?=$nbSansCompte?></i>
                                <span class="title">Voir tous les étudiants qui n'ont pas créé de compte</span>
                                <p class="grey-text truncate">Tous ces étudiants ne se sont jamais connecté a la plateforme</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>