<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Archive_stage $archive_stage
 */
class Archive extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();

        $this->load->model('archive_stage');

        $user = $this->cas->user();
        if(!$this->ldap->isStudent($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $data=array();
        $data['soutenances']=$this->archive_stage->getSoutenances();
        $data['rapports']=$this->archive_stage->getRapport();
        $data['cdcfs']=$this->archive_stage->getCDCF();
        /*echo '<pre>';
        print_r($data);
        die;*/

        $this->load->view('etudiant/archive', $data);
    }
}