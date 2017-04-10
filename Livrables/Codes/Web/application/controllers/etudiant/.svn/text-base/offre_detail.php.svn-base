<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 */
class Offre_detail extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();
        $this->load->model('offre');
        $this->load->model('attribut');

        $user = $this->cas->user();
        if(!$this->ldap->isStudent($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index($titre, $id){
        $data=array();
        $data['offre']=$this->offre->getOffre($id);
        $data['autre']=$this->offre->getOffresValides(2,0);

        $this->load->view('etudiant/offre-detail', $data);
    }
}