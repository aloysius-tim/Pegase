<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>admin/offre_stage" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> Gérer stages</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <a href="<?=base_url()?>admin/add_offre" class="btn full-width">Ajouter une offre de stage <i class="mdi-editor-mode-edit right"></i></a>
                <?php
                    if(sizeof($nonValides)!=0) echo '<h5 class="col s12">Offre de stages en attente(s)</h5>';
                    else echo '<h5 class="col s12 red-text">Toutes les offres de stage ont été validées</h5>';
                ?>
                <div class="col s12">
                        <ul class="collection no-border">
                            <?php
                                foreach($nonValides as $key => $nonValide){
                                    ?>
                                        <li class="collection-item avatar max-height-auto background-grey-light">
                                            <i class="circle green"><?=$key+1?></i>
                                            <a class="black-text" href="<?=base_url()?>admin/voir_offre/<?=url_title($nonValide->titre)?>/<?=$nonValide->id?>?service=moderer_offre">
                                                <span class="title"><?=$nonValide->nom_entreprise?> - <?=$nonValide->titre?></span>
                                            </a>
                                            <p class="grey-text truncate">En attente depuis le <?=$nonValide->date?> - <?=$nonValide->description_courte?></p>
                                            <a href="<?=base_url()?>admin/offre_detail/index/<?=url_title($nonValide->titre)?>/<?=$nonValide->id?>?service=moderer_offre" class="secondary-content"><i class="mdi-image-remove-red-eye"></i></a>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                </div>
                <h5 class="col s12">Offre de stage validé(s)</h5>
                <div class="col s12">
                    <ul class="collection no-border">
                        <?php
                        foreach($valides as $key => $valide){
                            ?>
                            <li class="collection-item avatar max-height-auto background-grey-light">
                                <i class="circle green"><?=$key+1?></i>
                                <a class="black-text" href="<?=base_url()?>admin/voir_offre/<?=url_title($valide->titre)?>/<?=$valide->id?>?service=moderer_offre">
                                    <span class="title"><?=$valide->nom_entreprise?> - <?=$valide->titre?></span>
                                </a>
                                <p class="grey-text truncate">En attente depuis le <?=$valide->date?> - <?=$valide->description_courte?></p>
                                <a href="<?=base_url()?>admin/offre_detail/index/<?=url_title($valide->titre)?>/<?=$valide->id?>?service=moderer_offre" class="secondary-content"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                        <?php
                        }
                        ?>
                        <li class="collection-item avatar max-height-auto background-grey-light">
                            <a href="<?=base_url()?>/admin/offre_stage">
                                <i class="mdi-navigation-more-horiz circle green"></i>
                                <span class="title">Voire toutes les offres acceptées</span>
                                <p class="grey-text truncate">Plus de <?=$sizeValide?> offre(s) ont été validée(s)</p>
                                <i class="mdi-navigation-more-vert secondary-content"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>