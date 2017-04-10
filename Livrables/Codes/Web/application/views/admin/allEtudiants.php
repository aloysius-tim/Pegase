<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower"><a href="<?=base_url()?>admin/generation" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> Tous les étudiants de S4 <?=date('Y');?></h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5 class="col s12">Tous les étudiants de S4 <?=date('Y');?></h5>
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
                                    <a href="mailto:<?=$etudiant['mail']?>" class="grey-text"><?=$etudiant['mail']?></a><br/>
                                    <?php
                                        if(empty($etudiant['fiche_renseignement'])){
                                            echo '<span class="title">Cet étudiant ne s\'est jamais connecté</span>';
                                        }elseif($etudiant['fiche_renseignement'][0]->valide ==1){
                                            echo '<a href="'.base_url().'admin/detail_fiche_renseignement/index/'.$etudiant['username'].'" class="">Voir la convention de cet étudiant</a>';
                                        }elseif($etudiant['fiche_renseignement'][0]->soumis == 1){
                                            echo '<a href="'.base_url().'admin/detail_fiche_renseignement/index/'.$etudiant['username'].'" class="">Générer la convention de cet étudiant</a>';
                                        }
                                    ?>
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