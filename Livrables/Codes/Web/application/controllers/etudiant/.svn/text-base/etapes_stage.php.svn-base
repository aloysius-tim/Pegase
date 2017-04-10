<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Etapes_stage extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->cas->force_auth();
        $this->config->load('pegase');

        $user = $this->cas->user();
        if(!$this->ldap->isStudent($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index()
    {
        $data=array();

        $data['etapes_pre_stage']=$this->config->item('etapes_pre_stage');
        $data['etapes_stage'] =$this->config->item('etapes_stage');

        $this->load->view('etudiant/etapes', $data);
    }
}