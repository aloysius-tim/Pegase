<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower"><a href="boite.php" class="white-text"><i class="mdi-navigation-arrow-back"></i></a> Créer un dépôt</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 l12 white z-depth-1">
                    <form>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="nomRendu" type="text" class="validate">
                                <label for="nomRendu">Nom du rendu</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="dateI" type="text" class="datepicker picker__input">
                                <label for="dateI">Date de rendu</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Consignes</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <button class="btn waves-effect waves-light right" type="submit" name="action">Créer le dépôt
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div id="confirmationSuppression" class="modal">
                <div class="modal-content">
                    <h4>Suppression de la boîte de rendus</h4>
                    <p>Vous allez supprimer la boîte de rendu "nom de la boîte", si vous faites cela la boîte de rendus ainsi que tous les rendus seront supprimés et ne seront pas récupérable !</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" onclick="toast('Vous avez supprimé la boîte Nom de la boite',4000)" class=" modal-action modal-close waves-effect waves-green btn-flat">Supprimer</a>
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
                </div>
            </div>
            <div id="confirmationFermeture" class="modal">
                <div class="modal-content">
                    <h4>Fermeture de la boîte de rendus</h4>
                    <p>Vous allez fermer la boîte de rendu "nom de la boîte", si vous faites cela les étudiants ne pourront plus déposer de fichiers, mais pourront accéder à leurs fichiers. La boîte de rendus ne sera pas supprimé.</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" onclick="toast('Vous avez fermé la boîte Nom de la boite',4000)" class=" modal-action modal-close waves-effect waves-green btn-flat">Fermer la boîte</a>
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>