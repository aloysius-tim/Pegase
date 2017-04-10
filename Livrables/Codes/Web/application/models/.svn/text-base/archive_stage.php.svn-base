<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Archive_stage extends CI_Model{
    protected $table = 'archive_rapport';

    function __construct(){
        parent::__construct();
    }

    function getSoutenances(){
        $query = $this->db->select('*')->where('type', 'soutenance')->order_by('date', 'desc')->limit(5)->get('archive_rapport');
        return $query->result();
    }

    function getRapport(){
        $query = $this->db->select('*')->where('type', 'rapport')->order_by('date', 'desc')->get('archive_rapport');
        return $query->result();
    }

    function getCDCF(){
        $query = $this->db->select('*')->where('type', 'cdcf')->order_by('date', 'desc')->get('archive_rapport');
        return $query->result();
    }

    function addArchive($titre, $nomEtudiant, $annee, $type, $path){
        $data = array(
            'titre' => $titre ,
            'nomEtudiant' => $nomEtudiant ,
            'annee' => $annee,
            'type' => $type,
            'path' => $path
        );
        $this->db->insert($this->table, $data);
    }
}