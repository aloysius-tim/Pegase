<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Ldap $ldap
 * @property Fiche_renseignement $fiche_renseignement
 * @property Depot $depot
 */
class Depot_item extends CI_Controller {
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

    public function index($titre, $id, $message='', $couleur=''){
        $depot['files']=$this->depot->getAllFiles($id);
        $depot['depot']=$this->config->item('depot')[$id-1];
        $depot['active']=$this->depot->isDepotValide($id);
        $depot['message']=$message;
        $depot['couleur']=$couleur;

        /*echo '<pre>';
        print_r($depot['depot']);
        die;*/

        $this->load->view('admin/depot', $depot);
    }
}