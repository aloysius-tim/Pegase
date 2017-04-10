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
                        <h5 class="col s12">Dépôts à venir</h5>
                        <div class="col s12">
                            <ul class="collection">
                                <?php
                                    foreach($depotsValides as $depot){
                                        ?>
                                            <li class="collection-item avatar">
                                                <?php if($depot['existe']) echo '<i class="mdi-navigation-check green circle"></i>'; else echo '<i class="mdi-file-folder circle"></i>'; ?>
                                                <span class="title"><?=$depot['nom']?></span>
                                                <p>Depot obligatoire<br>
                                                    <span class="grey-text"><?=$depot['date_limite']?></span>
                                                    <a href="<?=base_url()?>etudiant/depot_item/index/<?=url_title($depot['nom'])?>/<?=$depot['id']?>" class="right">Accéder à la boite</a>
                                                </p>
                                                <a href="<?=base_url()?>etudiant/depot_item/index/<?=url_title($depot['nom'])?>/<?=$depot['id']?>" class="secondary-content"><i class="mdi-image-edit grey-text"></i></a>
                                            </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <h5 class="col s12">Dépôts passés</h5>
                        <div class="col s12">
                            <ul class="collection">
                                <?php
                                foreach($depotsNonValides as $depotN){
                                    ?>
                                        <li class="collection-item avatar">
                                            <?php if($depotN['existe']==1) echo '<i class="mdi-file-folder circle"></i>'; else echo '<i class="mdi-content-block red circle"></i>';?>
                                            <span class="title"><?=$depotN['nom']?></span>
                                            <p>Depot <?php if($depotN['existe']==1) echo 'réussi'; else echo 'raté, veuillez nous contacter';?><br>
                                                <span class="grey-text"><?=$depotN['date_limite']?></span>
                                            </p>
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