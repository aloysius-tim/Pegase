<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Suivi du stage</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h5 class="col s12">Étapes pré-stages</h5>
                <div class="col s12">
                        <ul class="collection no-border">
                            <?php
                                foreach($etapes_pre_stage as $key => $etape){
                                    ?>
                                        <li class="collection-item avatar max-height-auto background-grey-light">
                                            <i class="circle green"><?=$key?></i>
                                            <span class="title"><?=$etape['titre']?></span>
                                            <p class="grey-text"><?=$etape['date']?> - <?=$etape['description']?></p>
                                            <!--<a href="gestion.html" class="secondary-content"><i class="mdi-content-link grey-text"></i></a>-->
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                </div>
                <h5 class="col s12">Étapes stages</h5>
                <div class="col s12">
                    <ul class="collection no-border">
                        <?php
                            foreach($etapes_stage as $key => $etape){
                                ?>
                                    <li class="collection-item avatar max-height-auto background-grey-light">
                                        <i class="circle green"><?=$key?></i>
                                        <span class="title"><?=$etape['titre']?></span>
                                        <p class="grey-text"><?=$etape['date']?> - <?=$etape['description']?></p>
                                        <!--<a href="gestion.html" class="secondary-content"><i class="mdi-content-link grey-text"></i></a>-->
                                    </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>