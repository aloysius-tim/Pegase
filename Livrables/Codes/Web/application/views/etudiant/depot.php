<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>etudiant/boite_depot" class="white-text"><</a> Dépôt <?=$nom?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
                if($message != ''){
                    echo'
                                    <div class="col s12 '.$couleur.'">
                                        '.$message.'
                                    </div>
                                ';
                }
            ?>
            <div class="row">
                <div class="col s12 l8">
                    <div class="row">
                        <h5 class="col s12"><?=$titre?></h5>
                        <div class="col s12">
                            <ul class="collection with-header">
                                <li class="collection-header"><a href="#deposer" class="modal-trigger"><h5>Déposer un fichier<i class="mdi-file-file-upload right"></i></h5></a></li>
                                <?php
                                    foreach($files as $file){
                                        echo '<li class="collection-item"><div><a target="_blank" href="'.base_url().'/'.$file->path.'">'.$nom.' '.$file->id.'</a> - <span title="dépositaire" class="grey-text">'.$file->date.'</span><a href="'.base_url().'/etudiant/depot_item/delete/'.url_title($nom).'/'.$file->id.'/'.$id.'" class="secondary-content red-text"><i class="mdi-action-delete"></i></a></div></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="row">
                        <h5 class="col s12">Informations</h5>
                        <div class="col s12">
                            <ul class="collection">
                                <li class="collection-item avatar max-height-auto">
                                    <i class="orange mdi-social-people-outline circle"></i>
                                    <span class="title">Demandeur</span>
                                    <p class="grey-text"><a href="mailto:Beatrice.BRUN@unice.fr">Administration</a></p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="red mdi-av-timer circle"></i>
                                    <span class="title">Date limite</span>
                                    <p class="grey-text"><?=$date_limite?> à 00h01</p>
                                </li>
                                <li class="collection-item avatar max-height-auto">
                                    <i class="blue mdi-action-info-outline circle"></i>
                                    <span class="title">Consignes de rendu</span>
                                    <p class="grey-text"><?=$consignes?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="deposer" class="modal">
                <form method="post" action="<?=base_url()?>etudiant/depot_item/addFile/<?=url_title($nom)?>/<?=$id?>"  accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-content">
                        <h4>Déposer un fichier </h4><i>(gif|jpg|png|docx|doc|pdf|pages|html|zip|rar)</i>
                        <div class="row">
                            <div class="col s12">
                                <textarea id="commentaire" class="materialize-textarea" placeholder="Commentaires" name="commentaires"></textarea>
                            </div>
                            <div class="col s12">
                                <input type="file" name="file"/>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn-flat waves-effect waves-green" type="submit" name="action">Déposer
                            <i class="mdi-content-send right"></i>
                        </button>
                        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>