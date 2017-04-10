<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Mail_pegase $mail_pegase
 * @property mixed cas
 * @property Ldap $ldap
 */
class Generation extends CI_Controller {

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

    public function index(){
        $data['etudiants']=array_slice($this->ldap->getUsers(), 1);
        $data['nbSansCompte']=sizeof($this->ldap->getUsersWithoutAccount());
        $data['nbEtudiants']=sizeof($this->ldap->getUsers());
        $data['nbSansConvention']=sizeof($this->ldap->getUsersWithoutConvention());

        /*echo '<pre>';
        print_r($data);
        die;*/

        $this->load->view('admin/generation', $data);
    }
}