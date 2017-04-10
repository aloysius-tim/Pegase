<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Archives</h2>
                    <h4 class="light red-text text-lighten-4 center-on-small-only font-weight-lower">Les archives des années précédentes</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m9 l10">
                    <?php
                    if($message != ''){
                        echo'
                                    <div class="col s12 '.$couleur.'">
                                        '.$message.'
                                    </div>
                                ';
                    }
                    ?>
                    <div id="soutenance" class="section scrollspy">
                        <a href="#ajoutRapport" class="btn full-width modal-trigger waves-effect waves-light">Ajouter un rapport de stage</a>
                        <div id="ajoutRapport" class="modal">
                            <div class="modal-content">
                                <h4>Ajouter un rapport de stage <i>(pdf|ppt)</i></h4>
                                <form action="<?=base_url()?>admin/archive/ajouterRapport" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="Titre" type="text" class="validate" name="titre">
                                            <label for="Titre">Titre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6">
                                            <input id="nomEtudiant" type="text" class="validate" name="nom">
                                            <label for="nomEtudiant">Nom de l'étudiant</label>
                                        </div>
                                        <div class="input-field col s12 m6">
                                            <input id="annee" type="number" min="2000" max="2999" class="validate" name="annee">
                                            <label for="annee">Année</label>
                                        </div>
                                        <input class="validate" type="hidden" name="type" value="rapport">
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <input class="file-path validate" type="text"/>
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file" name="rapport"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Envoyer
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
                        <a href="#soutenanceAdd" class="btn full-width modal-trigger waves-effect waves-light">Ajouter une soutenance</a>
                        <div id="soutenanceAdd" class="modal">
                            <div class="modal-content">
                                <h4>Ajouter une soutenance <i>(pdf|ppt)</i></h4>
                                <form action="<?=base_url()?>admin/archive/ajouterSoutenance" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="Titre" type="text" class="validate" name="titre">
                                            <label for="Titre">Titre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6">
                                            <input id="nomEtudiant" type="text" class="validate" name="nom">
                                            <label for="nomEtudiant">Nom de l'étudiant</label>
                                        </div>
                                        <div class="input-field col s12 m6">
                                            <input id="annee" type="number" min="2000" max="2999" class="validate" name="annee">
                                            <label for="annee">Année</label>
                                        </div>
                                        <input class="validate" type="hidden" name="type" value="soutenance">
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <input class="file-path validate" type="text"/>
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file" name="soutenance"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Envoyer
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
                        <a href="#cdcf" class="btn full-width modal-trigger waves-effect waves-light">Ajouter un cdcf</a>
                        <div id="cdcf" class="modal">
                            <div class="modal-content">
                                <h4>Ajouter un cdcf <i>(pdf|ppt)</i></h4>
                                <form action="<?=base_url()?>admin/archive/ajouterCdcf" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="Titre" type="text" class="validate" name="titre">
                                            <label for="Titre">Titre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6">
                                            <input id="nomEtudiant" type="text" class="validate" name="nom">
                                            <label for="nomEtudiant">Nom de l'étudiant</label>
                                        </div>
                                        <div class="input-field col s12 m6">
                                            <input id="annee" type="number" min="2000" max="2999" class="validate" name="annee">
                                            <label for="annee">Année</label>
                                        </div>
                                        <input class="validate" type="hidden" name="type" value="cdcf">
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <input class="file-path validate" type="text"/>
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file" name="cdcf"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Envoyer
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

                        <h5>Top 5 des soutenances</h5>
                        <ul class="collection no-border">
                            <?php
                            foreach($soutenances as $soutenance){
                                ?>
                                <li class="collection-item background-grey-light avatar max-height-auto">
                                    <a href="<?=base_url()?>/assets/dwnld/archive_soutenance/<?=$soutenance->path?>" download="<?=$soutenance->titre?>" target="_blank"><i class="mdi-file-file-download blue circle"></i></a>
                                    <span class="title"><?=$soutenance->titre?></span>
                                    <p class="grey-text"><?=$soutenance->nomEtudiant?> - <?=$soutenance->annee?></p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div id="rapport" class="section scrollspy">
                        <h5>Top 5 des rapports de stage</h5>
                        <ul class="collection no-border">
                            <?php
                            foreach($rapports as $rapport){
                                ?>
                                <li class="collection-item background-grey-light avatar max-height-auto">
                                    <a href="<?=base_url()?>/assets/dwnld/archive_rapport/<?=$rapport->path?>" download="<?=$rapport->titre?>" target="_blank"><i class="mdi-file-file-download blue circle"></i></a>
                                    <span class="title"><?=$rapport->titre?></span>
                                    <p class="grey-text"><?=$rapport->nomEtudiant?> - <?=$rapport->annee?></p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div id="cdcf" class="section scrollspy">
                        <h5>Top 5 des CDCF</h5>
                        <ul class="collection no-border">
                            <?php
                            foreach($cdcfs as $cdcf){
                                ?>
                                <li class="collection-item background-grey-light avatar max-height-auto">
                                    <a href="<?=base_url()?>/assets/dwnld/archive_cdcf/<?=$cdcf->path?>" download="<?=$cdcf->titre?>" target="_blank"><i class="mdi-file-file-download blue circle"></i></a>
                                    <span class="title"><?=$cdcf->titre?></span>
                                    <p class="grey-text"><?=$cdcf->nomEtudiant?> - <?=$cdcf->annee?></p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col hide-on-small-only m3 l2">
                    <div class="toc-wrapper pinned">
                        <div class="buysellads hide-on-small-only">
                            <ul class="section table-of-contents">
                                <li><a href="#soutenance">Top 5 des soutenances</a></li>
                                <li><a href="#rapport">Top 5 des rapports de stage</a></li>
                                <li><a href="#cdcf">Top 5 des rapports de stage</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>