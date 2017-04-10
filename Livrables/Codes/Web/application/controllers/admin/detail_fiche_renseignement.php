<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Mail_pegase $mail_pegase
 * @property mixed cas
 * @property Ldap $ldap
 * @property Fiche_renseignement $fiche_renseignement
 */
class Detail_fiche_renseignement extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('fiche_renseignement');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index($username){
        $data=$this->fiche_renseignement->getUser2($username)[0];

        $this->load->view('admin/detail-convention-accept', $data);
    }

    public function convention($username){
        $data=$this->fiche_renseignement->getUser2($username)[0];

        /*echo '<pre>';
        print_r($data);
        die;*/

        $this->load->view('admin/convention', $data);
    }

    public function demanderModification($username){
        $commentaire=$this->input->post('commentaire');
        $email=$this->input->post('email');
        $this->mail_pegase->sendEmailDemandeModificationFicheEntreprise($username, $commentaire, $email);

        $this->fiche_renseignement->setSoumis(0, $username);
    }

    public function valider($username){
        $this->fiche_renseignement->valider($username);
        $this->index($username);
    }

    public function refuser($username){
        $this->fiche_renseignement->refuser($username);
        $this->index($username);
    }
}