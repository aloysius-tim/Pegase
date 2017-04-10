<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offre extends CI_Model{
    protected $table = 'offre_stage';

    function __construct(){
        parent::__construct();
        $this->load->library('pagination');
    }

    function getAllOffres(){
        $query = $this->db->select('*')->get($this->table);
        return $query->result();
    }

    function getNbOffresValides(){
        return sizeof($this->getOffresValides());
    }

    function getNbOffresNonValides(){
        return sizeof($this->getOffresNonValides());
    }

    function search($recherche='', $orderBy='', $idLanguage='', $idOrientation='', $limit=NULL, $offset=0){}

    function getOffreLike($search='', $limit=NULL, $offset=0){
        $attributManager=new Attribut();
        $this->db->like('description', $search, 'both');
        $query = $this->db->get_where($this->table, array('valide' => 1), $limit, $offset);
        $data = $query->result();

        foreach($data as $item){
            $id=$item->id;
            $item->languages=$attributManager->getLanguage($id);
            $item->systemes=$attributManager->getSysteme($id);
            $item->orientations=$attributManager->getOrientation($id);
        }
        return $data;
    }

    function getOffresValides($limit=NULL, $offset=0, $idLanguage=NULL, $idOrientation=NULL, $idSysteme=NULL){
        if($idLanguage==NULL && $idOrientation==NULL && $idSysteme==NULL) {
            $attributManager = new Attribut();
            $query = $this->db->get_where($this->table, array('valide' => 1), $limit, $offset);
            $data = $query->result();

            foreach ($data as $item) {
                $id = $item->id;
                $item->languages = $attributManager->getLanguage($id);
                $item->systemes = $attributManager->getSysteme($id);
                $item->orientations = $attributManager->getOrientation($id);
            }
            return $data;
        }elseif($idLanguage!=NULL){
            return $this->getOffresValideLanguage($limit, $offset, $idLanguage);
        }elseif($idSysteme!=NULL){
            return $this->getOffresValideSysteme($limit, $offset, $idSysteme);
        }elseif($idOrientation!=NULL){
            return $this->getOffresValideOrientation($limit, $offset, $idOrientation);
        }else return '';
    }

    function getOffresValideLanguage($limit=NULL, $offset=0, $idLanguage){
        $array=array();
        $data=$this->getOffresValides();

        foreach($data as $item){
            foreach($item->languages as $language){
                if($language[0]->id==$idLanguage)
                    $array[]=$item;
            }
        }
        return array_slice($array, $offset, $limit, true);
    }

    function getOffresValideSysteme($limit=NULL, $offset=0, $idSysteme){
        $array=array();
        $data=$this->getOffresValides();

        foreach($data as $item){
            foreach($item->systemes as $systeme){
                if($systeme[0]->id==$idSysteme)
                    $array[]=$item;
            }
        }
        return array_slice($array, $offset, $limit, true);
    }

    function getOffresValideOrientation($limit=NULL, $offset=0, $idOrientation){
        $array=array();
        $data=$this->getOffresValides();

        foreach($data as $item){
            foreach($item->orientations as $orientation){
                if($orientation[0]->id==$idOrientation)
                    $array[]=$item;
            }
        }
        return array_slice($array, $offset, $limit, true);
    }

    function getOffre($idOffre){
        $attributManager=new Attribut();
        $query = $this->db->select('*')->where('id', $idOffre)->get($this->table);
        $data = $query->result();

        $data['languages']=$attributManager->getLanguage($idOffre);
        $data['systemes']=$attributManager->getSysteme($idOffre);
        $data['orientations']=$attributManager->getOrientation($idOffre);

        return $data;
    }

    function getOffresNonValides($limit=NULL, $offset=0){
        $attributManager=new Attribut();
        $query = $this->db->get_where($this->table, array('valide' => 0), $limit, $offset);
        $data = $query->result();

        foreach($data as $item){
            $id=$item->id;
            $item->languages=$attributManager->getLanguage($id);
            $item->systemes=$attributManager->getSysteme($id);
            $item->orientations=$attributManager->getOrientation($id);
        }
        return $data;
    }

    function deleteOffre($id){
        $this->db->delete($this->table, array('id' => $id));
    }

    public function valider($id){
        $data = array(
            'valide' => 1
        );

        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
}