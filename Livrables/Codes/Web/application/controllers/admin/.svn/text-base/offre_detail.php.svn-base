<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Mail_pegase $mail_pegase
 */
class Offre_detail extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();
        $this->load->model('offre');
        $this->load->model('attribut');
        //$this->load->library('mail_pegase');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index($titre, $id){
        $data=array();
        $data['offre']=$this->offre->getOffre($id);
        $data['autre']=$this->offre->getOffresValides(2,0);

        $this->load->view('admin/offre-detail', $data);
    }

    public function supprimer($id){
        $this->offre->deleteOffre($id);
        redirect(base_url().'admin/offre_stage/index');
    }

    public function valider($id){
        $this->offre->valider($id);
        redirect(base_url().'admin/offre_detail/index/offre/'.$id);
    }

    public function modifier(){
        $id=htmlspecialchars($this->input->post('idOffre'));
        $emailEntreprise=htmlspecialchars($this->input->post('emailEntreprise'));
        $commentaire=htmlspecialchars($this->input->post('commentaire'));

        $this->mail_pegase->sendEmailDemandeModification($commentaire, $id, $emailEntreprise);
        $this->supprimer($id);
    }
}