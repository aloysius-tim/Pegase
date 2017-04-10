<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Mail_pegase $mail_pegase
 * @property mixed cas
 * @property Ldap $ldap
 * @property Fiche_renseignement $fiche_renseignement
 */
class liste_etudiant extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();

        $this->load->model('offre');
        $this->load->model('attribut');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $users=$this->ldap->getUsers();
        $data['etudiants']=array_slice($users, 1);
        $data['titre']='Etudiants de S4 cette année';

        $this->load->view('admin/liste-convention', $data);
    }

    function sansCompte(){
        $users=$this->ldap->getUsersWithoutAccount();
        $data['etudiants']=array_slice($users, 1);
        $data['titre']='Etudiants n\'ayant pas créé de compte';

        $this->load->view('admin/liste-convention', $data);
    }

    function sansConvention(){
        $users=$this->ldap->getUsersWithoutConvention();
        $data['etudiants']=array_slice($users, 1);
        $data['titre']='Etudiants n\'ayant pas de convention de stage';

        $this->load->view('admin/liste-convention', $data);
    }

    function avecConvention(){
        $users=$this->fiche_renseignement->getAllUsersWithConvention();
        /*echo '<pre>';
        print_r($users);
        die;*/
        $data['etudiants']=$users;
        $data['titre']='Etudiants ayant une convention de stage';

        $this->load->view('admin/liste-convention', $data);
    }

    function etudiants(){
        $users=$this->ldap->getUsers();
        $data['etudiants']=array_slice($users, 1);
        $data['titre']='Etudiants de S4 cette année';

        /*echo '<pre>';
        print_r($users);
        die;*/

        $this->load->view('admin/allEtudiants', $data);
    }
}