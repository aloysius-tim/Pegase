<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Ldap $ldap
 * @property Fiche_renseignement $fiche_renseignement
 * @property Depot $depot
 */
class Boite_depot extends CI_Controller {
    private $username;

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();
        $user=$this->cas->user();
        $this->username = $user->userlogin;

        $this->load->config('pegase');
        $this->load->model('depot');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $data['depotsValides']=$this->depot->getDepotsValides($this->username);
        $data['depotsNonValides']=$this->depot->getDepotsNonValides($this->username);

        /*echo '<pre>';
        print_r($data);
        die();*/

        $this->load->view('admin/boite', $data);
    }
}