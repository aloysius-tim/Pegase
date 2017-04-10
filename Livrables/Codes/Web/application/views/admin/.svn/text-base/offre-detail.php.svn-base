<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>admin/offre_stage" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> Offre de stages</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <?php
                            if($offre[0]->valide==1){
                                ?>
                                    <a href="<?=base_url()?>admin/offre_detail/supprimer/<?=$offre[0]->id?>" class="red btn full-width">Supprimer l'offre de stage (Stage attribué)<i class="mdi-navigation-close right"></i></a>
                                <?php
                            }else{
                                ?>
                                    <a href="#modificationOffre" class="btn full-width modal-trigger waves-effect waves-light">Modifier ou demander une modification</a>
                                    <div id="modificationOffre" class="modal">
                                        <div class="modal-content">
                                            <h4>Demander des modifications (email automatique)</h4>
                                            <p>
                                            <form action="<?=base_url()?>admin/offre_detail/modifier" method="post">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-editor-mode-edit prefix"></i>
                                                        <textarea id="commentaire" class="materialize-textarea" name="commentaire"></textarea>
                                                        <label for="commentaire">Modifications a apporter a l'offre de stage</label>
                                                    </div>
                                                    <div>
                                                        <input value="<?=$offre[0]->email_contact?>" name="emailEntreprise" type="hidden">
                                                        <input value="<?=$offre[0]->id?>" name="idOffre" type="hidden">
                                                    </div>
                                                    <button class="btn waves-effect waves-light right" type="submit" name="action">Envoyer
                                                        <i class="mdi-content-send right"></i>
                                                    </button>
                                                </div>
                                            </form>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
                                        </div>
                                    </div>
                                    <a href="<?=base_url()?>admin/offre_detail/supprimer/<?=$offre[0]->id?>" class="btn col s12 m6 red">Refuser l'offre</a>
                                    <a href="<?=base_url()?>admin/offre_detail/valider/<?=$offre[0]->id?>" class="btn col s12 m6 green">accepter l'offre</a>
                                <?php
                            }
                        ?>
                        <div class="col s12 l12 white z-depth-1">
                            <h5><a href="" class="black-text"><?=$offre[0]->titre?></a></h5>
                            <ul class="collection no-border">
                                <li class="collection-item avatar max-height-auto">
                                    <i class="mdi-communication-location-on circle"></i>
                                    <span class="title">Adresse</span>
                                    <p class="grey-text"><a href="https://www.google.fr/maps/search/<?=$offre[0]->adresse?>"><?=$offre[0]->adresse?></a></p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="mdi-device-access-alarm circle"></i>
                                    <span class="title">Date</span>
                                    <p class="grey-text"><?=$offre[0]->date_stage?></p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="red mdi-communication-quick-contacts-mail circle"></i>
                                    <span class="title">Contact entreprise</span>
                                    <p class="grey-text"><?=$offre[0]->nom_contact?>: <?=$offre[0]->email_contact?></p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="mdi-social-person-outline circle"></i>
                                    <span class="title">Nombre de stagiaires</span>
                                    <p class="grey-text"><?=$offre[0]->nb_stagiaires?>
                                    </p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="mdi-communication-business circle"></i>
                                    <span class="title">Languages utilisés</span>
                                    <p class="grey-text">
                                        <?php
                                            foreach($offre['languages'] as $language){
                                                echo '<a href="'.base_url().'admin/offre_stage/language/'.url_title($language[0]->nom).'/'.$language[0]->id.'">'.$language[0]->nom.'</a> - ';
                                            }
                                        ?>
                                    </p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="mdi-action-language circle"></i>
                                    <span class="title">Orientations du stage</span>
                                    <p class="grey-text">
                                        <?php
                                        foreach($offre['orientations'] as $orientation){
                                            echo '<a href="'.base_url().'admin/offre_stage/orientation/'.url_title($orientation[0]->nom).'/'.$orientation[0]->id.'">'.$orientation[0]->nom.'</a> - ';
                                        }
                                        ?>
                                    </p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="mdi-hardware-computer circle"></i>
                                    <span class="title">Systéme OS</span>
                                    <p class="grey-text">
                                        <?php
                                        foreach($offre['systemes'] as $systeme){
                                            echo '<a href="'.base_url().'admin/offre_stage/systeme/'.url_title($systeme[0]->nom).'/'.$systeme[0]->id.'">'.$systeme[0]->nom.'</a> - ';
                                        }
                                        ?>
                                    </p>
                                    </p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="blue mdi-action-description circle"></i>
                                    <span class="title">Description des tâches</span>
                                    <p class="grey-text">
                                        <?=$offre[0]->description?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 l12">
                            <div class="row">
                                <h5 class="col s12"><a href="" class="black-text">Stage similaires</a></h5>
                                <?php
                                foreach($autre as $offre){
                                    ?>
                                    <div class="col s12 l6">
                                        <div class="card">
                                            <div class="card-content">
                                                <span class="card-title black-text truncate">
                                                    <?=$offre->titre?>
                                                    <span class="badge">
                                                        <?php
                                                        foreach($offre->languages as $index => $language){
                                                            if($index==0 || $index==1)
                                                                echo '<a href="'.base_url().'admin/offre_stage/language/'.url_title($language[0]->nom).'/'.$language[0]->id.'" class="tag">'.$language[0]->nom.'</a>';
                                                        }
                                                        ?>
                                                    </span>
                                                </span>
                                                <p class="max-height-offre"><?=$offre->description_courte?></p>
                                            </div>
                                            <div class="card-action">
                                                <a href="<?=base_url()?>/admin/offre_detail/index/<?=url_title($offre->titre)?>/<?=$offre->id?>">Accéder au détail de l'offre</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>