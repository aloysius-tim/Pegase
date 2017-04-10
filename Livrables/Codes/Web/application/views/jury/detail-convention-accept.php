<?php include_once('header.php'); ?>
<main class="padding-side-nav">
    <div class="row logo-color" id="index-banner">
        <div class="container">
            <div class="col s12 m12 l0 hide-on-large-only">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
            </div>
            <div class="col s12">
                <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>jury/generation" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> Détail fiche de renseignement</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <a class="waves-effect waves-light btn modal-trigger col s12 m12 blue" href="<?=base_url()?>jury/detail_fiche_renseignement/convention/<?=$identifiant?>" target="_blank">Voir convention</a>
                    <a class="waves-effect waves-light btn modal-trigger col s12 m12 blue" href="<?=base_url()?>jury/depot_etudiant/index/<?=$identifiant?>" target="">Voir les dépots de cet étudiant</a>

                    <?php
                        if($soumis==1 && $valide==0){
                            echo '
                            <a class="waves-effect waves-light btn modal-trigger col s12 m6" href="mailto:'.$email.'">Demander modification</a>
                            <a href="'.base_url().'jury/detail_fiche_renseignement/valider/'.$identifiant.'" class="btn col s12 m6 green">Valider les renseignements</a>
                            <a class="waves-effect waves-light btn modal-trigger col s12 m12 red" href="'.base_url().'jury/detail_fiche_renseignement/refuser/'.$identifiant.'" target="">Refuser la fiche de renseignement -> Incorrecte</a>';
                        }
                    ?>
                    <div class="col s12 l12 white z-depth-1">
                        <h5><a href="" class="black-text">Information étudiant</a></h5>
                        <ul class="collection no-border">
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-social-person-outline circle"></i>
                                <span class="title"><?=$identifiant?> - <?=$sexe.$nom?> -</span>
                                <p class="grey-text">date: <?=$date?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-editor-format-list-numbered circle"></i>
                                <span class="title">Numéro INSEE</span>
                                <p class="grey-text"><?=$numero_insee?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-action-list circle"></i>
                                <span class="title">Numéro étudiant</span>
                                <p class="grey-text"><?=$numero_etudiant?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-action-list circle"></i>
                                <span class="title">Date de naissance</span>
                                <p class="grey-text"><?=$dateNaissance?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-communication-contacts circle"></i>
                                <span class="title">Numéro Téléphone - Email</span>
                                <p class="grey-text"><?=$numero_tel?> - <?=$email?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-communication-location-on circle"></i>
                                <span class="title">Adresse durant le stage</span>
                                <p class="grey-text"><?=$adresse?> -</p>
                            </li>
                        </ul>
                        <h5><a href="" class="black-text">Renseignements de l'organisme d'accueil</a></h5>
                        <ul class="collection no-border">
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-communication-business orange circle"></i>
                                <span class="title">Nom de l'organisme</span>
                                <p class="grey-text"><?=$nom_organisme?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-communication-call orange circle"></i>
                                <span class="title">Numéro de téléphone</span>
                                <p class="grey-text"><?=$telephone_organisme?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-action-print orange circle"></i>
                                <span class="title">Numéro de fax</span>
                                <p class="grey-text"><?=$fax_organisme?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-content-mail orange circle"></i>
                                <span class="title">E-Mail</span>
                                <p class="grey-text"><?=$email_organisme?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-action-group-work orange circle"></i>
                                <span class="title">Nom du représentant</span>
                                <p class="grey-text"><?=$nom_prenom_representant?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-social-person-outline orange circle"></i>
                                <span class="title">Qualité du représentant</span>
                                <p class="grey-text"><?=$qualite_representant?> -</p>
                            </li>
                        </ul>
                        <h5><a href="" class="black-text">Renseignements du maître de stage en entreprise</a></h5>
                        <ul class="collection no-border">
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-action-perm-identity blue circle"></i>
                                <span class="title">Nom - Prénom</span>
                                <p class="grey-text"><?=$nom_maitre_stage?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-communication-call blue circle"></i>
                                <span class="title">Numéro de téléphone</span>
                                <p class="grey-text"><?=$telephone_maitre_stage?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-content-mail blue circle"></i>
                                <span class="title">E-Mail</span>
                                <p class="grey-text"><?=$email_organisme?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-communication-location-on blue circle"></i>
                                <span class="title">Adresse et désignation du service du déroulement du stage</span>
                                <p class="grey-text"><?=$adresse_service_deroulement_stage?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-content-text-format blue circle"></i>
                                <span class="title">Sujet du stage</span>
                                <p class="grey-text"><?=$sujet_stage?> -</p>
                            </li>
                            <li class="collection-item avatar max-height-auto">
                                <i class="mdi-action-subject blue circle"></i>
                                <span class="title">Résumé du stage</span>
                                <p class="grey-text"><?=$resume_stage?> -</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>
<?php include_once('footer.php'); ?>