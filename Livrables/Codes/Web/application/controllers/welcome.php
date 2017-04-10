<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Cas $cas
 * @property ldap $ldap
 * @property Offre $offre
 * @property Attribut $attribut
 * @property Fiche_renseignement $fiche_renseignement
 */
class Welcome extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('attribut');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index(){
        $data=array();
        $data['message']='';
        $data['couleur']='';
        $data['orientations']=$this->attribut->getOrientations();
        $data['languages']=$this->attribut->getLanguages();
        $data['systemes']=$this->attribut->getSystemes();

        $this->load->view('accueil/index', $data);
    }

    public function addStage(){
        $this->form_validation->set_rules('nom_entreprise', '"Nom entreprise"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('nb_stagiaire', '"Nombre de stagiaires"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|is_natural_no_zero');
        $this->form_validation->set_rules('titre', '"Titre du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('date', '"Date du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('description_courte', '"Description courte du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|max_length[256]');
        $this->form_validation->set_rules('description', '"Description du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('adresse', '"Adresse du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('numero_telephone', '"Numero de telephone de l\'entreprise"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|numeric');
        $this->form_validation->set_rules('email_contact', '"Email de l\'entreprise"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|valid_email');
        $this->form_validation->set_rules('nom_contact', '"Nom du contact en entreprise"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');

        if($this->form_validation->run()){
            $data = array(
                'nom_entreprise'=>$this->input->post('nom_entreprise'),
                'nb_stagiaires'=>$this->input->post('nb_stagiaire'),
                'titre'=>$this->input->post('titre'),
                'date_stage'=>$this->input->post('date'),
                'description_courte'=>$this->input->post('description_courte'),
                'description'=>$this->input->post('description'),
                'adresse'=>$this->input->post('adresse'),
                'numero_telephone'=>$this->input->post('numero_telephone'),
                'email_contact'=>$this->input->post('email_contact'),
                'nom_contact'=>$this->input->post('nom_contact'),
                'valide'=>0
            );
            $this->db->insert('offre_stage', $data);
            $idOffre = $this->db->insert_id();

            foreach($this->input->post('languages') as $language){
                $data = array(
                    'id_offre'=>$idOffre,
                    'id_language'=>$language
                );
                $this->db->insert('offre_has_language', $data);
            }
            foreach($this->input->post('languages') as $orientation){
                $data = array(
                    'id_offre'=>$idOffre,
                    'id_orientation'=>$orientation
                );
                $this->db->insert('offre_has_orientation', $data);
            }
            foreach($this->input->post('systemes') as $systeme){
                $data = array(
                    'id_offre'=>$idOffre,
                    'id_systeme'=>$systeme
                );
                $this->db->insert('offre_has_systeme', $data);
            }

            $data=array();
            $data['message']='Votre offre de stage a bien été prise en compte';
            $data['couleur']='green';
            $data['orientations']=$this->attribut->getOrientations();
            $data['languages']=$this->attribut->getLanguages();
            $data['systemes']=$this->attribut->getSystemes();

            $this->load->view('accueil/index', $data);
        }
        else{
            $data=array();
            $data['message']='Erreur, veuillez reessayer -> Voir message d\'erreur en cliquant sur \'poster un stage\'';
            $data['couleur']='red';
            $data['orientations']=$this->attribut->getOrientations();
            $data['languages']=$this->attribut->getLanguages();
            $data['systemes']=$this->attribut->getSystemes();

            $this->load->view('accueil/index', $data);
        }
    }

    public function login(){
        $this->cas->force_auth();
        $user = $this->cas->user();

        if($user->userlogin=='ja301192'){
            redirect('/admin/accueil');
        }elseif($this->ldap->isUserInSecondYear($user->userlogin) || $this->ldap->isUserInSecondYearDecale($user->userlogin)){
            $this->fiche_renseignement->createUser($user->userlogin);
            redirect('/etudiant/accueil');
        }/*elseif($this->ldap->isTeacher($user->userlogin)){
            redirect('/jury/accueil');
        }*/else{
            redirect('/admin/acueil');
        }
    }
}