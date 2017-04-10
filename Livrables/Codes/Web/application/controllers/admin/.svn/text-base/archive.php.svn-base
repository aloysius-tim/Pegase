<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Archive_stage $archive_stage
 */
class Archive extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();

        $this->load->model('archive_stage');

        $user = $this->cas->user();
        if(!$this->ldap->isStaff($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index($message='', $couleur=''){
        $data=array();
        $data['soutenances']=$this->archive_stage->getSoutenances();
        $data['rapports']=$this->archive_stage->getRapport();
        $data['cdcfs']=$this->archive_stage->getCDCF();
        $data['couleur']=$couleur;
        $data['message']=$message;

        /*echo '<pre>';
        print_r($data);
        die;*/

        $this->load->view('admin/archive', $data);
    }

    public function ajouterRapport(){
        $titre=$this->input->post('titre');
        $nom=$this->input->post('nom');
        $annee=$this->input->post('annee');
        $type=$this->input->post('type');

        $config['upload_path'] = './assets/dwnld/archive_rapport';
        $config['allowed_types'] = 'pdf|ppt';
        $config['max_size'] = '2048';
        $config['max_width'] = '54554';
        $config['max_height'] = '455445';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('rapport') == FALSE){
            $this->index($this->upload->display_errors(), 'red');
        }
        else{
            $this->archive_stage->addArchive($titre, $nom, $annee, $type, $this->upload->data()['file_name']);
            $this->index('Rapport ajouté avec succès', 'green');
        }
    }

    public function ajouterSoutenance(){
        $titre=$this->input->post('titre');
        $nom=$this->input->post('nom');
        $annee=$this->input->post('annee');
        $type=$this->input->post('type');

        $config['upload_path'] = './assets/dwnld/archive_soutenance';
        $config['allowed_types'] = 'pdf|ppt';
        $config['max_size'] = '2048';
        $config['max_width'] = '54554';
        $config['max_height'] = '455445';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('soutenance') == FALSE){
            $this->index($this->upload->display_errors(), 'red');
        }
        else{
            $this->archive_stage->addArchive($titre, $nom, $annee, $type, $this->upload->data()['file_name']);
            $this->index('soutenance ajoutée avec succès', 'green');
        }
    }

    public function ajouterCdcf(){
        $titre=$this->input->post('titre');
        $nom=$this->input->post('nom');
        $annee=$this->input->post('annee');
        $type=$this->input->post('type');

        $config['upload_path'] = './assets/dwnld/archive_cdcf';
        $config['allowed_types'] = 'pdf|ppt';
        $config['max_size'] = '2048';
        $config['max_width'] = '54554';
        $config['max_height'] = '455445';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('cdcf') == FALSE){
            $this->index($this->upload->display_errors(), 'red');
        }
        else{
            $this->archive_stage->addArchive($titre, $nom, $annee, $type, $this->upload->data()['file_name']);
            $this->index('cdcf ajouté avec succès', 'green');
        }
    }
}