<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Offre de stages</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                if(isset($message) && $message!='')
                    echo '<nav class="'.$couleur.'" role="navigation"><div class="nav-wrapper container">'.$message.'</div></nav>'
                ?>
                <div class="col s12">
                    <div class="row">
                        <a href="<?=base_url()?>admin/add_offre" class="btn full-width">Ajouter une offre de stage <i class="mdi-editor-mode-edit right"></i></a>
                        <?php
                            if($nbOffreNonValide>0) echo '<a href="'.base_url().'admin/moderer_offre" class="red btn full-width">Modérer les offres de stages ('.$nbOffreNonValide.' offre(s) en attente(s))<i class="mdi-navigation-close right"></i></a>';
                            else echo '<a href="#" class="green btn full-width">Toutes les offres de stages sont a jour</a>';

                        foreach($offres as $offre){
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
                                        <a href="<?=base_url()?>admin/offre_detail/index/<?=url_title($offre->titre)?>/<?=$offre->id?>">Accéder au détail de l'offre</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="col s12">

                            <ul class="pagination">
                                <?=$pagination?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>