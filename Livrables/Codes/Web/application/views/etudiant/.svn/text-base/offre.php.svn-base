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
                <div class="col s12">
                    <div class="row">
                        <!--<form class="col s12" action="<?=base_url()?>/etudiant/offre_stage/search/" method="get">
                            <div class="row">
                                <h5 class="col s12 truncate no-margin-padding">Filtre de recherche</h5>
                                <div class="input-field col s12 l3">
                                    <div class="input-field">
                                        <input id="search" type="text" name="search">
                                        <label for="search"><i class="mdi-action-search"></i>Recherche</label>
                                    </div>
                                </div>
                                <div class="input-field col s12 l2">
                                    <select id="trie" class="no-margin-padding" name="trie">
                                        <option value="" disabled selected>Trie par</option>
                                        <!--<option value="1">lieu</option>-->
                                        <!--<option value="2">date d'ajout</option>
                                        <!--<option value="3">rémunération</option>-->
                                        <!--<option value="4">entreprise</option>
                                    </select>
                                </div>
                                <div class="input-field col s12 l2">
                                    <select id="langage" class="no-margin-padding" name="language">
                                        <option value="" disabled selected>Langage</option>
                                        <?php
                                            foreach($languages as $language){
                                                echo '<option value="'.$language->id.'">'.$language->nom.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="input-field col s12 l2">
                                    <select id="orientation" class="no-margin-padding" name="orientation">
                                        <option value="" disabled selected>Orientation</option>
                                        <?php
                                            foreach($orientations as $orientation){
                                                echo '<option value="'.$orientation->id.'">'.$orientation->nom.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="input-field col s12 l2">
                                    <br>
                                    <button class="btn waves-effect waves-light full-width" type="submit">Envoyer<i class="mdi-content-send right white-text"></i>
                                    </button>
                                </div>
                            </div>
                        </form>-->
                        <?php
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
                                                                    echo '<a href="'.base_url().'etudiant/offre_stage/language/'.url_title($language[0]->nom).'/'.$language[0]->id.'" class="tag">'.$language[0]->nom.'</a>';
                                                            }
                                                        ?>
                                                    </span>
                                                </span>
                                                <p class="max-height-offre"><?=$offre->description_courte?></p>
                                            </div>
                                            <div class="card-action">
                                                <a href="<?=base_url()?>/etudiant/offre_detail/index/<?=url_title($offre->titre)?>/<?=$offre->id?>">Accéder au détail de l'offre</a>
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