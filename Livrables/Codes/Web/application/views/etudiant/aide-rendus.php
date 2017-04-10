<?php include_once('header.php'); ?>
    <main class="padding-side-nav">
        <div class="row logo-color" id="index-banner">
            <div class="container">
                <div class="col s12 m12 l0 hide-on-large-only">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
                </div>
                <div class="col s12">
                    <h2 class="white-text center-on-small-only font-weight-lower">Consignes stage semestre 4</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header active"><i class="mdi-action-search"></i>Instructions avant le début de vos stages</div>
                            <div class="collapsible-body">
                                <?=$consignes[0]->instruction?>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="mdi-file-attachment"></i>Cahier des Charges</div>
                            <div class="collapsible-body">
                                <?=$consignes[0]->cahier_charge?>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="mdi-av-timer"></i>Fin de stage</div>
                            <div class="collapsible-body">
                                <?=$consignes[0]->fin_stage?>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="mdi-action-assignment"></i>Autre information utile</div>
                            <div class="collapsible-body">
                                <?=$consignes[0]->autre?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </main>
<?php include_once('footer.php'); ?>