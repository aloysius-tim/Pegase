<?php include_once('header.php'); ?>
<main class="padding-side-nav">
    <div class="row logo-color" id="index-banner">
        <div class="container">
            <div class="col s12 m12 l0 hide-on-large-only">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu menu-size white-text"></i></a>
            </div>
            <div class="col s12">
                <h2 class="white-text center-on-small-only font-weight-lower">Rédiger les consignes stage semestre 4</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <form action="<?=base_url()?>admin/accueil/maj_consignes" method="post">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header active"><i class="mdi-action-search"></i>Instructions avant le début de vos stages<a href="#" class="right grey-text"><i class="mdi-action-delete"></i></a></div>
                            <div class="collapsible-body">
                                <textarea class="edit" name="instruction"><?php echo set_value('instruction', $consignes[0]->instruction); ?></textarea>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="mdi-file-attachment"></i>Cahier des Charges<a href="#" class="right grey-text"><i class="mdi-action-delete"></i></a></div>
                            <div class="collapsible-body">
                                <textarea class="edit" name="cahier_charge"><?php echo set_value('cahier_charge', $consignes[0]->cahier_charge); ?></textarea>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="mdi-av-timer"></i>Fin de stage<a href="#" class="right grey-text"><i class="mdi-action-delete"></i></a></div>
                            <div class="collapsible-body">
                                <textarea class="edit" name="fin_stage"><?php echo set_value('fin_stage', $consignes[0]->fin_stage); ?></textarea>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="mdi-av-timer"></i>Autre<a href="#" class="right grey-text"><i class="mdi-action-delete"></i></a></div>
                            <div class="collapsible-body">
                                <textarea class="edit" name="autre"><?php echo set_value('autre', $consignes[0]->autre); ?></textarea>
                            </div>
                        </li>
                    </ul>
                    <button class="btn full-width" type="submit">Mettre a jour les consignes</button>
                </form>
            </div>
        </div>
    </div>
</main>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?=asset_url()?>js/admin/materialize.min.js"></script>
<script type="text/javascript" src="<?=asset_url()?>js/admin/script.js"></script>


<!-- UNIQUEMENT FROALA !!!! A NE PAS METTRE PARTOUT -->
<script src="<?=asset_url()?>froala/js/libs/jquery-1.11.1.min.js"></script>
<script src="<?=asset_url()?>froala/js/froala_editor.min.js"></script>
<!--[if lt IE 9]>
<script src="<?=asset_url()?>froala/js/froala_editor_ie8.min.js"></script>
<![endif]-->
<script src="<?=asset_url()?>froala/js/plugins/tables.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/urls.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/lists.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/colors.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/font_family.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/font_size.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/block_styles.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/media_manager.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/video.min.js"></script>
<script src="<?=asset_url()?>froala/js/plugins/char_counter.min.js"></script>

<script>
    $(function(){
        $('.edit').editable({
            inlineMode: false,
            imageUpload: false
        })
    });
</script>

</body>
</html>