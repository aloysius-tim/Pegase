<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attribut extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getOrientation($idStage){
        $query = $this->db->select('*')->where('id_offre', $idStage)->get('offre_has_orientation');
        $liaisons= $query->result();
        $array=array();

        foreach($liaisons as $liaison){
            $idAttribut=$liaison->id_orientation;
            $query = $this->db->select('*')->where('id', $idAttribut)->get('orientation_stage');
            array_push($array, $query->result());
        }

        return $array;
    }

    function getLanguage($idStage){
        $query = $this->db->select('*')->where('id_offre', $idStage)->get('offre_has_language');
        $liaisons= $query->result();
        $array=array();

        foreach($liaisons as $liaison){
            $idAttribut=$liaison->id_language;
            $query = $this->db->select('*')->where('id', $idAttribut)->get('language_stage');
            array_push($array, $query->result());
        }

        return $array;
    }

    function getSysteme($idStage){
        $query = $this->db->select('*')->where('id_offre', $idStage)->get('offre_has_systeme');
        $liaisons= $query->result();
        $array=array();

        foreach($liaisons as $liaison){
            $idAttribut=$liaison->id_systeme;
            $query = $this->db->select('*')->where('id', $idAttribut)->get('systeme_stage');
            array_push($array, $query->result());
        }

        return $array;
    }

    function getLanguages(){
        $query = $this->db->select('*')->get('language_stage');
        return $query->result();
    }

    function getSystemes(){
        $query = $this->db->select('*')->get('systeme_stage');
        return $query->result();
    }

    function getOrientations(){
        $query = $this->db->select('*')->get('orientation_stage');
        return $query->result();
    }
}