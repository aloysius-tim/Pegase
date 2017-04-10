<?php include_once('header.php'); ?>
<main class="padding-side-nav">
    <div class="row logo-color" id="index-banner">
        <div class="container">
            <div class="col s12 m12 l0 hide-on-large-only">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
            </div>
            <div class="col s12">
                <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>admin/generation" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> <?=$titre?></h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="col s12"><?=$titre?></h5>
                <div class="col s12">
                    <ul class="collection no-border">
                        <?php
                            $i=0;
                            foreach($etudiants as $etudiant){
                                $i++;
                                ?>
                                    <li class="collection-item avatar max-height-auto background-grey-light">
                                        <i class="circle green"><?=$i?></i>
                                        <span class="title"><?=$etudiant['nom']?></span><br/>
                                        <a href="mailto:<?=$etudiant['mail']?>" class="grey-text"><?=$etudiant['mail']?></a>
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