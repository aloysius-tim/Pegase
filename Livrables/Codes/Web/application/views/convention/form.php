<?php

	echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/css/form.css">';
	// echo form_open('PDFGenerator/showPDF');
	echo form_open(base_url().'index.php/PDFGenerator/formPDF');
	
	echo '<fieldset>';
	echo '<h3>Etudiant</h1>';
	echo form_label('Homme', 'etudiantSexeM');
	$etudiantSexeM= array(
				'name'=>'etudiantSexe',
				'id'=>'etudiantSexeM',
				'value'=>'homme',
				'checked'=>FALSE
				);
	echo form_radio($etudiantSexeM);
	echo form_error('etudiantSexeM');
	
	echo form_label('Femme', 'etudiantSexeF');
	$etudiantSexeF= array(
				'name'=>'etudiantSexe',
				'id'=>'etudiantSexeF',
				'value'=>'femme',
				'checked'=>FALSE
				);
	echo form_radio($etudiantSexeF);
	echo form_error('etudiantSexeF');
	echo '<br />';
	
	echo form_label('Nom', 'etudiantNom');
	$etudiantNom= array(
				'name'=>'etudiantNom',
				'id'=>'etudiantNom',
				'placeholder'=>'Nom',
				'value'=>set_value('etudiantNom')
				);
	echo form_input($etudiantNom);
	echo form_error('etudiantNom');
	echo '<br />';
	
	echo form_label('Prénom', 'etudiantPrenom');
	$etudiantPrenom= array(
				'name'=>'etudiantPrenom',
				'id'=>'etudiantPrenom',
				'placeholder'=>'Prénom',
				'value'=>set_value('etudiantPrenom')
				);
	echo form_input($etudiantPrenom);
	echo form_error('etudiantPrenom');
	echo '<br />';
	
	echo form_label('Date de naissance', 'etudiantBirth');
	$etudiantBirth= array(
				'name'=>'etudiantBirth',
				'id'=>'etudiantBirth',
				'placeholder'=>'Birth',
				'value'=>set_value('etudiantBirth')
				);
	echo form_input($etudiantBirth);
	echo form_error('etudiantBirth');
	echo '<br />';
	
	echo form_label('N° INSE', 'etudiantINSEE');
	$etudiantINSEE= array(
				'name'=>'etudiantINSEE',
				'id'=>'etudiantINSEE',
				'placeholder'=>'N° INSEE',
				'value'=>set_value('etudiantINSEE')
				);
	echo form_input($etudiantINSEE);
	echo form_error('etudiantINSEE');
	echo '<br />';
	
	echo form_label('N° Etudiant', 'etudiantNo');
	$etudiantNo= array(
				'name'=>'etudiantNo',
				'id'=>'etudiantNo',
				'placeholder'=>'N° Etudiant',
				'value'=>set_value('etudiantNo')
				);
	echo form_input($etudiantNo);
	echo form_error('etudiantNo');
	echo '<br />';
	
	echo form_label('Adresse', 'etudiantAdresse');
	$etudiantAdresse= array(
				'name'=>'etudiantAdresse',
				'id'=>'etudiantAdresse',
				'placeholder'=>'Adresse',
				'value'=>set_value('etudiantAdresse')
				);
	echo form_input($etudiantAdresse);
	echo form_error('etudiantAdresse');
	echo '<br />';
	
	echo form_label('Téléphone', 'etudiantTel');
	$etudiantTel= array(
				'name'=>'etudiantTel',
				'id'=>'etudiantTel',
				'placeholder'=>'Téléphone',
				'value'=>set_value('etudiantTel')
				);
	echo form_input($etudiantTel);
	echo form_error('etudiantTel');
	echo '<br />';
	
	echo form_label('Courriel', 'etudiantMail');
	$etudiantMail= array(
				'name'=>'etudiantMail',
				'id'=>'etudiantMail',
				'placeholder'=>'Courriel',
				'value'=>set_value('etudiantMail')
				);
	echo form_input($etudiantMail);
	echo form_error('etudiantMail');
	
	echo '</fieldset>';
	
	/*-------------ENTREPRISE---------------*/
	
	echo '<fieldset>';
	echo '<h3>Entreprise</h1>';
	echo form_label('Nom', 'entrepriseNom');
	$entrepriseNom= array(
				'name'=>'entrepriseNom',
				'id'=>'entrepriseNom',
				'placeholder'=>'Nom',
				'value'=>set_value('entrepriseNom')
				);
	echo form_input($entrepriseNom);
	echo form_error('entrepriseNom');
	echo '<br />';
	
	echo form_label('Adresse', 'entrepriseAdresse');
	$entrepriseAdresse= array(
				'name'=>'entrepriseAdresse',
				'id'=>'entrepriseAdresse',
				'placeholder'=>'Adresse',
				'value'=>set_value('entrepriseAdresse')
				);
	echo form_input($entrepriseAdresse);
	echo form_error('entrepriseAdresse');
	echo '<br />';
	
	echo form_label('Téléphone', 'entrepriseTel');
	$entrepriseTel= array(
				'name'=>'entrepriseTel',
				'id'=>'entrepriseTel',
				'placeholder'=>'Téléphone',
				'value'=>set_value('entrepriseTel')
				);
	echo form_input($entrepriseTel);
	echo form_error('entrepriseTel');
	echo '<br />';
	
	echo form_label('Fax', 'entrepriseFax');
	$entrepriseFax= array(
				'name'=>'entrepriseFax',
				'id'=>'entrepriseFax',
				'placeholder'=>'Fax',
				'value'=>set_value('entrepriseFax')
				);
	echo form_input($entrepriseFax);
	echo form_error('entrepriseFax');
	echo '<br />';
	
	echo form_label('Courriel', 'entrepriseMail');
	$entrepriseMail= array(
				'name'=>'entrepriseMail',
				'id'=>'entrepriseMail',
				'placeholder'=>'Courriel',
				'value'=>set_value('entrepriseMail')
				);
	echo form_input($entrepriseMail);
	echo form_error('entrepriseMail');
	echo '<br />';
	
	echo form_label('Représentant', 'entrepriseRepresentant');
	$entrepriseRepresentant= array(
				'name'=>'entrepriseRepresentant',
				'id'=>'entrepriseRepresentant',
				'placeholder'=>'Représentant',
				'value'=>set_value('entrepriseRepresentant')
				);
	echo form_input($entrepriseRepresentant);
	echo form_error('entrepriseRepresentant');
	echo '<br />';
	
	echo form_label('Qualité du représentant', 'entrepriseQualiteRepresentant');
	$entrepriseQualiteRepresentant= array(
				'name'=>'entrepriseQualiteRepresentant',
				'id'=>'entrepriseQualiteRepresentant',
				'placeholder'=>'Qualité du représentant',
				'value'=>set_value('entrepriseQualiteRepresentant')
				);
	echo form_input($entrepriseQualiteRepresentant);
	echo form_error('entrepriseQualiteRepresentant');
	
	echo '</fieldset>';
	
	/*-------------MAITRE---------------*/
	
	echo '<fieldset>';
	echo '<h3>Maitre de stage</h1>';
	echo form_label('Nom', 'maitreNom');
	$maitreNom= array(
				'name'=>'maitreNom',
				'id'=>'maitreNom',
				'placeholder'=>'Nom',
				'value'=>set_value('maitreNom')
				);
	echo form_input($maitreNom);
	echo form_error('maitreNom');
	echo '<br />';
	
	echo form_label('Prénom', 'maitrePrenom');
	$maitrePrenom= array(
				'name'=>'maitrePrenom',
				'id'=>'maitrePrenom',
				'placeholder'=>'Prénom',
				'value'=>set_value('maitrePrenom')
				);
	echo form_input($maitrePrenom);
	echo form_error('maitrePrenom');
	echo '<br />';
	
	echo form_label('Fonction', 'maitreFonction');
	$maitreFonction= array(
				'name'=>'maitreFonction',
				'id'=>'maitreFonction',
				'placeholder'=>'Fonction',
				'value'=>set_value('maitreFonction')
				);
	echo form_input($maitreFonction);
	echo form_error('maitreFonction');
	echo '<br />';
	
	echo form_label('Téléphone', 'maitreTel');
	$maitreTel= array(
				'name'=>'maitreTel',
				'id'=>'maitreTel',
				'placeholder'=>'Téléphone',
				'value'=>set_value('maitreTel')
				);
	echo form_input($maitreTel);
	echo form_error('maitreTel');
	echo '<br />';
	
	echo form_label('Courriel', 'maitreMail');
	$maitreMail= array(
				'name'=>'maitreMail',
				'id'=>'maitreMail',
				'placeholder'=>'Courriel',
				'value'=>set_value('maitreMail')
				);
	echo form_input($maitreMail);
	echo form_error('maitreMail');
	echo '<br />';
	
	echo form_label('Adresse', 'maitreAdresse');
	$maitreAdresse= array(
				'name'=>'maitreAdresse',
				'id'=>'maitreAdresse',
				'placeholder'=>'Adresse',
				'value'=>set_value('maitreAdresse')
				);
	echo form_input($maitreAdresse);
	echo form_error('maitreAdresse');
	
	echo '</fieldset>';
	
	/*-------------STAGE---------------*/
	
	echo '<fieldset>';
	echo '<h3>Stage</h1>';
	echo form_label('Sujet du stage', 'stageSujet');
	$stageSujet= array(
				'name'=>'stageSujet',
				'id'=>'stageSujet',
				'placeholder'=>'Sujet du stage',
				'value'=>set_value('stageSujet')
				);
	echo form_input($stageSujet);
	echo form_error('stageSujet');
	echo '<br />';
	
	echo form_label('Résumé du stage', 'stageResume');
	$stageResume= array(
				'name'=>'stageResume',
				'id'=>'stageResume',
				'placeholder'=>'Résumé du stage',
				'value'=>set_value('stageResume')
				);
	echo form_input($stageResume);
	echo form_error('stageResume');
	
	echo '</fieldset>';
	
	echo form_submit('envoi', 'Valider');
	
	echo form_close();
?>