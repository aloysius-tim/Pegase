<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administration extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $this->etudiants();
    }

    public function etudiants(){
        $data=array();
        $data['linkIframeA']=base_url().'admin/administration/etudiantsTab';
        $data['linkIframeB']=base_url().'admin/administration/archivesTab';
        $data['linkIframeC']=base_url().'admin/administration/depotTab';
        $data['linkIframeD']=base_url().'admin/administration/languageTab';
        $data['linkIframeE']=base_url().'admin/administration/orientationTab';
        $data['linkIframeF']=base_url().'admin/administration/systemeTab';
        $data['linkIframeG']=base_url().'admin/administration/offreTab';

        $this->load->view('admin/tableau', $data);
    }

    public function etudiantsTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('fiche_renseignement');
        $crud->set_subject('Etudiants');

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }

    public function archivesTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('archive_rapport');
        $crud->set_subject('Archives');

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }

    public function depotTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('depot');
        $crud->set_subject('Depot');

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }

    public function languageTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('language_stage');
        $crud->set_subject('Languages stage');

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }

    public function orientationTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('orientation_stage');
        $crud->set_subject('Orientation stage');

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }

    public function systemeTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('systeme_stage');
        $crud->set_subject('Systemes stage');

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }

    public function offreTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('offre_stage');
        $crud->set_subject('Offres stage');

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }

    /*function clients(){
        $data=array();
        $data['linkIframe']='http://agorapolis.keynes.fr/index.php/admin/accueil/clientsTab';
        $data['titre']='Mes clients';

        $this->load->view('admin/header');
        $this->load->view('admin/sideBar');
        $this->load->view('admin/accueil', $data);
        $this->load->view('admin/footer');
    }
    function clientsTab(){
        $crud = new grocery_CRUD();

        $crud->set_theme('bootstrap');
        $crud->set_table('aauth_users');
        $crud->set_subject('Utilisateurs');

        $crud->columns('email','name','email');

        $crud->unset_add();

        $output = $crud->render();
        $this->load->view('admin/tab', $output);
    }*/
}