<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Gérer les stages</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 z-depth-1-half white">
                    <h5 class="col s12">Créer une nouvelle session de stage</h5>
                    <h6 class="col s12">Cela implique une mise en archive de toutes les données du site actuel</h6>
                    <div class="col s12">
                        <form>
                            <div class="row">
                                <div class="input-field col s12 l6">
                                    <select>
                                        <option value="" disabled selected>Choisissez un professeur</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    <label>Responsable de stage</label>
                                </div>
                                <div class="input-field col s12 l6">
                                    <select>
                                        <option value="" disabled selected>Choisissez la promotion</option>
                                        <option value="1">S4T</option>
                                        <option value="2">S3T</option>
                                    </select>
                                    <label>Annnée de stage</label>
                                </div>
                                <div class="input-field col s12">
                                    <div class="input-field col s12 m6">
                                        <input id="dateD" type="text" class="datepicker picker__input">
                                        <label for="dateD">Date de début</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="dateF" type="text" class="datepicker picker__input">
                                        <label for="dateF">Date de fin</label>
                                    </div>
                                </div>
                                <div class="col s12">
                                    <button class="btn waves-effect waves-light right" type="submit" name="action">Créer la session de stage
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="archive.php" class="btn full-width">Accéder aux archives des stages précédents<i class="mdi-editor-mode-edit right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>