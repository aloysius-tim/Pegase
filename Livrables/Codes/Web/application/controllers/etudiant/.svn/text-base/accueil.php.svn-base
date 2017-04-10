<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Cas $cas
 * @property ldap $ldap
 * @property Consignes $consignes
 */
class Accueil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->cas->force_auth();
        $this->load->model('consignes');

        $user = $this->cas->user();
        if(!$this->ldap->isStudent($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index()
    {
        $data['consignes']=$this->consignes->getConsignes();
        $this->load->view('etudiant/aide-rendus', $data);
    }

    public function logout(){
        $this->cas->logout('http://134.59.28.162');
    }
}