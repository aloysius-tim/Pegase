<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Ldap $ldap
 * @property Fiche_renseignement $fiche_renseignement
 * @property Depot $depot
 */
class Depot_etudiant extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('depot');
        $this->load->config('pegase');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index($username, $message='', $couleur=''){
        $depot['files']=$this->depot->getAllFilesStudent($username);
        $depot['message']=$message;
        $depot['couleur']=$couleur;
        $depot['username']=$username;

        foreach($depot['files'] as $file){
            $file->nomDepot=$this->config->item('depot')[$file->id_depot-1]['nom'];
        }
        /*echo '<pre>';
        print_r($depot);
        die;*/

        $this->load->view('admin/depot_etudiant', $depot);
    }
}