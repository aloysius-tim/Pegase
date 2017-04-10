<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>admin/boite_depot" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> Dépôts</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 l12">
                    <div class="row">
                        <h5 class="col s12"><?=$username?> - <?=sizeof($files)?> rendu(s)</h5>
                        <div class="col s12">
                            <ul class="collection">
                                <?php
                                    foreach($files as $file){
                                        ?>
                                            <li class="collection-item">
                                                <div>
                                                    <a href="<?=base_url().$file->path?>" target="_blank" class="black-text"><?=$file->nomDepot?></a>-
                                                    <span title="dépositaire" class="grey-text"><?=$file->date?></span>-<br/>
                                                    Commentaire: <?=$file->commentaire?>
                                                    <a href="<?=base_url()?>admin/depot_etudiant/index/<?=$file->username?>" ><br/>
                                                        <span title="dépositaire" class=""><?=$file->username?></span></a>
                                                    <a href="<?=base_url().$file->path?>" target="_blank" class="secondary-content red-text">
                                                        <i class="mdi-file-attachment"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        <?
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>