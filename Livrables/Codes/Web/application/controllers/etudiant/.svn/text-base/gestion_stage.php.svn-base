<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Ldap $ldap
 * @property Fiche_renseignement $fiche_renseignement
 * @property Mail_pegase $mail_pegase
 */
class Gestion_stage extends CI_Controller {
    private $userLogin;
    private $name;
    private $uid;
    private $ficheRenseignement;

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('fiche_renseignement');

        $this->cas->force_auth();
        $user=$this->cas->user();
        $this->userLogin = $user->userlogin;
        $this->name=$user->attributes['displayName'];
        $this->uid=$this->ldap->getUid($this->userLogin);
        $this->ficheRenseignement=$this->fiche_renseignement->getUser($this->userLogin);

        $user = $this->cas->user();
        if(!$this->ldap->isStudent($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $data=array();
        $data['nomUser']=$this->name;
        $data['uid']=$this->uid;
        $data['couleur']='';
        $data['message']='';

        $data['ficheRenseignement']=$this->ficheRenseignement;

        $this->load->view('etudiant/gestion', $data);
    }

    public function soumettre(){
        $data = array(
            'soumis' => 1
        );

        $this->db->where('identifiant', $this->userLogin);
        $this->db->update('fiche_renseignement', $data);

        $this->index();
    }

    public function mes_renseignements(){
        $this->form_validation->set_rules('nom', '"Nom etudiant"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('numero_insee', '"Numero INSEE"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|is_natural');
        $this->form_validation->set_rules('numero_etudiant', '"Numero étudiant"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|is_natural');
        $this->form_validation->set_rules('adresse', '"Adresse etudiant"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('email', '"Email étudiant"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|valid_email');
        $this->form_validation->set_rules('numero_tel', '"Numero telephone etudiant"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|is_natural');
        $this->form_validation->set_rules('dateNaissance', '"Date de naissance"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('sexe', '"Sexe de l\'étudiant"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');

        if($this->form_validation->run()){
            $data = array(
                'nom' => $this->input->post('nom'),
                'numero_insee' => $this->input->post('numero_insee'),
                'numero_etudiant' => $this->input->post('numero_etudiant'),
                'adresse' => $this->input->post('adresse'),
                'email' => $this->input->post('email'),
                'numero_tel' => $this->input->post('numero_tel'),
                'dateNaissance' => $this->input->post('dateNaissance'),
                'sexe' => $this->input->post('sexe')
            );

            $this->db->where('identifiant', $this->userLogin);
            $this->db->update('fiche_renseignement', $data);

            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='green';
            $data['message']='Mise a jour effectuée';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
        else{
            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='red';
            $data['message']='Erreur';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
    }

    public function stage(){
        $this->form_validation->set_rules('sujet_stage', '"Sujet du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('resume_stage', '"Résumé du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('dateDebut', '"Date de début du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('dateFin', '"Date de fin du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('serviceConcerne', '"Service concerné du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');

        if($this->form_validation->run()){
            $data = array(
                'sujet_stage' => $this->input->post('sujet_stage'),
                'resume_stage' => $this->input->post('resume_stage'),
                'dateDebut' => $this->input->post('dateDebut'),
                'dateFin' => $this->input->post('dateFin'),
                'serviceConcerne' => $this->input->post('serviceConcerne')
            );

            $this->db->where('identifiant', $this->userLogin);
            $this->db->update('fiche_renseignement', $data);

            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='green';
            $data['message']='Mise a jour effectuée';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
        else{
            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='red';
            $data['message']='Erreur';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
    }

    public function organisme_accueil(){
        $this->form_validation->set_rules('nom_organisme', '"Nom de l\'organisme"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('adresse_organisme', '"Adresse de l\'organisme"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('telephone_organisme', '"Telephone de l\'organisme"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|is_natural');
        $this->form_validation->set_rules('fax_organisme', '"Fax de l\'organisme"', 'trim|encode_php_tags|xss_clean|prep_for_form|is_natural');
        $this->form_validation->set_rules('email_organisme', '"Email de l\'organisme"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|valid_email');
        $this->form_validation->set_rules('nom_prenom_representant', '"Nom - prenom du représentant de l\'organisme"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('qualite_representant', '"Qualité du représentant"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');

        if($this->form_validation->run()){
            $data = array(
                'nom_organisme' => $this->input->post('nom_organisme'),
                'adresse_organisme' => $this->input->post('adresse_organisme'),
                'telephone_organisme' => $this->input->post('telephone_organisme'),
                'fax_organisme' => $this->input->post('fax_organisme'),
                'email_organisme' => $this->input->post('email_organisme'),
                'nom_prenom_representant' => $this->input->post('nom_prenom_representant'),
                'qualite_representant' => $this->input->post('qualite_representant')
            );

            $this->db->where('identifiant', $this->userLogin);
            $this->db->update('fiche_renseignement', $data);

            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='green';
            $data['message']='Mise a jour effectuée';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
        else{
            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='red';
            $data['message']='Erreur';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
    }

    public function maitre_stage(){
        $this->form_validation->set_rules('nom_maitre_stage', '"Num du maitre de stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('prenom_maitre_stage', '"Prenom du maitre de stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('fonction_maitre_stage', '"Fonction du maitre de stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');
        $this->form_validation->set_rules('telephone_maitre_stage', '"Telephone du maitre de stage"', 'trim|encode_php_tags|xss_clean|prep_for_form|is_natural');
        $this->form_validation->set_rules('email_maitre_stage', '"Email du maitre de stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form|valid_email');
        $this->form_validation->set_rules('adresse_service_deroulement_stage', '"Adresse du service du deroulement du stage"', 'trim|required|encode_php_tags|xss_clean|prep_for_form');

        if($this->form_validation->run()){
            $data = array(
                'nom_maitre_stage' => $this->input->post('nom_maitre_stage'),
                'prenom_maitre_stage' => $this->input->post('prenom_maitre_stage'),
                'fonction_maitre_stage' => $this->input->post('fonction_maitre_stage'),
                'telephone_maitre_stage' => $this->input->post('telephone_maitre_stage'),
                'email_maitre_stage' => $this->input->post('email_maitre_stage'),
                'adresse_service_deroulement_stage' => $this->input->post('adresse_service_deroulement_stage'),
            );

            $this->db->where('identifiant', $this->userLogin);
            $this->db->update('fiche_renseignement', $data);

            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='green';
            $data['message']='Mise a jour effectuée';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
        else{
            $data=array();
            $data['nomUser']=$this->name;
            $data['uid']=$this->uid;
            $data['couleur']='red';
            $data['message']='Erreur';
            $data['ficheRenseignement']=$this->ficheRenseignement;

            $this->load->view('etudiant/gestion', $data);
        }
    }
}