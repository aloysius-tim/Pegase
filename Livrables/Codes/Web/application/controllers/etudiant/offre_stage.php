<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Attribut $attribut
 */
class Offre_stage extends CI_Controller {
    private $per_page=4;

    function __construct(){
        parent::__construct();
        $this->load->model('offre');
        $this->load->model('attribut');
        $this->load->library('pagination');
        $this->cas->force_auth();

        $user = $this->cas->user();
        if(!$this->ldap->isStudent($user->userlogin)){
            redirect('/welcome');
        }
    }

    public function index(){
        $this->page();
    }

    function search($recherche='', $orderBy='', $idLanguage='', $idOrientation){

    }

    public function page($offset=0){
        $data=array();
        $data['offres']=$this->offre->getOffresValides($this->per_page, $offset);
        $data['pagination']=$this->_generatePagination($this->offre->getNbOffresValides());
        $data['orientations']=$this->attribut->getOrientations();
        $data['languages']=$this->attribut->getLanguages();

        $this->load->view('etudiant/offre', $data);
    }

    public function language($nom, $idLanguage, $offset=0){
        $data=array();
        $data['offres']=$this->offre->getOffresValides($this->per_page, $offset, $idLanguage);
        $data['pagination']=$this->_generatePagination(sizeof($this->offre->getOffresValides(NULL, 0, $idLanguage)), 'etudiant/offre_stage/language/'.$nom.'/'.$idLanguage.'/', 6);
        $data['orientations']=$this->attribut->getOrientations();
        $data['languages']=$this->attribut->getLanguages();

        /*echo '<pre>';
        print_r($this->offre->getOffresValides($this->per_page, $offset, 2));
        die();*/

        $this->load->view('etudiant/offre', $data);
    }

    public function orientation($nom, $idOrientation, $offset=0){
        $data=array();
        $data['offres']=$this->offre->getOffresValides($this->per_page, $offset, NULL, $idOrientation);
        $data['pagination']=$this->_generatePagination(sizeof($this->offre->getOffresValides(NULL, 0, NULL, $idOrientation)), 'etudiant/offre_stage/orientation/'.$nom.'/'.$idOrientation.'/', 6);
        $data['orientations']=$this->attribut->getOrientations();
        $data['languages']=$this->attribut->getLanguages();

        /*echo '<pre>';
        print_r($this->offre->getOffresValides(NULL, 0, NULL, 2));
        die();*/

        $this->load->view('etudiant/offre', $data);
    }

    public function systeme($nom, $idSysteme, $offset=0){
        $data=array();
        $data['offres']=$this->offre->getOffresValides($this->per_page, $offset, NULL, NULL, $idSysteme);
        $data['pagination']=$this->_generatePagination(sizeof($this->offre->getOffresValides(NULL, 0, NULL, NULL, $idSysteme)), 'etudiant/offre_stage/systeme/'.$nom.'/'.$idSysteme.'/', 6);
        $data['orientations']=$this->attribut->getOrientations();
        $data['languages']=$this->attribut->getLanguages();

        /*echo '<pre>';
        print_r($this->offre->getOffresValides($this->per_page, $offset, 2));
        die();*/

        $this->load->view('etudiant/offre', $data);
    }

    function _generatePagination($totalRow, $url='etudiant/offre_stage/page/', $uriSegment=4){
        $config['base_url'] = base_url().$url;
        $config['total_rows'] = $totalRow;
        $config['per_page'] = $this->per_page;
        $config['uri_segment'] = $uriSegment;

        $config['num_tag_open'] = '<li class="waves-effect">';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active">';
        $config['cur_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="mdi-navigation-chevron-left"></i>;';
        $config['prev_tag_open'] = '<li class="waves-effect">';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '<i class="mdi-navigation-chevron-right"></i>';
        $config['next_tag_open'] = '<li class="waves-effect">';
        $config['next_tag_close'] = '</li>';

        $config['first_link'] = FALSE;
        $config['last_link'] =  FALSE;

        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }
}