<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Cas $cas
 * @property ldap $ldap
 * @property Consignes $consignes
 * @property Mail_pegase $mail_pegase
 */
class Accueil extends CI_Controller{
    private $consignesAttr;

    function __construct()
    {
        parent::__construct();
        $this->cas->force_auth();

        $this->load->model('consignes');
        $this->consignesAttr=$this->consignes->getConsignes();
        //$this->load->library('email');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $data=array();
        $data['consignes']=$this->consignesAttr;
        $this->load->view('admin/aide-rendus', $data);
    }

    public function logout(){
        $this->cas->logout('http://134.59.28.162');
    }

    public function maj_consignes(){
        $instruction=$this->input->post('instruction');
        $cahier_charge=$this->input->post('cahier_charge');
        $fin_stage=$this->input->post('fin_stage');
        $autre=$this->input->post('autre');

        $data = array(
            'instruction' => $this->input->post('instruction'),
            'cahier_charge' => $this->input->post('cahier_charge'),
            'fin_stage' => $this->input->post('fin_stage'),
            'autre' => $this->input->post('autre')
        );

        $this->db->where('id', 1);
        $this->db->update('consigne', $data);

        $this->index();
    }
}