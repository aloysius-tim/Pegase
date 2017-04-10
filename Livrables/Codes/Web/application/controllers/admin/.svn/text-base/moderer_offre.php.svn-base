<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 */
class Moderer_offre extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();
        $this->load->model('offre');
        $this->load->model('attribut');
        $this->load->library('pagination');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $data=array();
        $data['nonValides']=$this->offre->getOffresNonValides(2);
        $data['valides']=$this->offre->getOffresValides(2);
        $data['sizeValide']=$this->offre->getNbOffresValides();

        /*echo '<pre>';
        print_r($data);
        die;*/

        $this->load->view('admin/gerer-stage', $data);
    }
}