<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Boîtes de dépôts</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <h5 class="col s12">Dépôts fermés</h5>
                        <div class="col s12">
                            <ul class="collection">
                                <?php
                                foreach($depotsNonValides as $depotN){
                                    ?>
                                    <li class="collection-item avatar">
                                        <i class="mdi-file-folder circle"></i>
                                        <span class="title"><?=$depotN['nom']?></span>
                                        <p>Dépot fermé<br>
                                            <span class="grey-text"><?=$depotN['date_limite']?></span>
                                            <a href="<?=base_url()?>admin/depot_item/index/<?=url_title($depotN['nom'])?>/<?=$depotN['id']?>" class="right">Accéder à la boite</a>
                                        </p>
                                        <a href="<?=base_url()?>admin/depot_item/index/<?=url_title($depotN['nom'])?>/<?=$depotN['id']?>" class="secondary-content"><i class="mdi-image-edit grey-text"></i></a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <h5 class="col s12">Dépôts ouverts</h5>
                        <div class="col s12">
                            <ul class="collection">
                                <?php
                                foreach($depotsValides as $depot){
                                    ?>
                                    <li class="collection-item avatar">
                                        <i class="mdi-navigation-check green circle"></i>
                                        <span class="title"><?=$depot['nom']?></span>
                                        <p>Depot ouvert<br>
                                            <span class="grey-text"><?=$depot['date_limite']?></span>
                                            <a href="<?=base_url()?>admin/depot_item/index/<?=url_title($depot['nom'])?>/<?=$depot['id']?>" class="right">Accéder à la boite</a>
                                        </p>
                                        <a href="<?=base_url()?>admin/depot_item/index/<?=url_title($depot['nom'])?>/<?=$depot['id']?>" class="secondary-content"><i class="mdi-image-edit grey-text"></i></a>
                                    </li>
                                <?php
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