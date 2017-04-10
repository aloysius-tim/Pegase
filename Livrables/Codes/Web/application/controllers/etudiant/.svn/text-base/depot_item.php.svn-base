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
        if(!$this->ldap->isStudent($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index($titre, $id, $message='', $couleur=''){
        $depot=$this->depot->isDepotValide($id);
        if($depot==false) redirect('404');

        $depot['files']=$this->depot->getFiles($this->username, $id);
        $depot['message']=$message;
        $depot['couleur']=$couleur;

        $this->load->view('etudiant/depot', $depot);
    }

    public function delete($titre, $idFile, $idDepot){
        $depot=$this->depot->isDepotValide($idDepot);
        if($depot==false) redirect('404');

        $this->depot->delete($this->username, $idFile);

        $this->index($titre, $idDepot);
    }

    public function addFile($titre, $id){
        $depot=$this->depot->isDepotValide($id);
        if($depot==false) redirect('404');

        $config['upload_path'] = './assets/dwnld/depots';
        $config['allowed_types'] = 'gif|jpg|png|docx|doc|pdf|pages|html|zip|rar';
        $config['max_size'] = '2048';
        $config['max_width'] = '54554';
        $config['max_height'] = '455445';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('file') == FALSE){
            $this->index($titre, $id, $this->upload->display_errors(), 'red');
        }
        else{
            $this->depot->addFile($this->username, $this->input->post('commentaires'), $id);
            $this->index($titre, $id, 'Document ajouté au dépot avec succès', 'green');
        }
    }
}