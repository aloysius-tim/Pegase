<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fiche_renseignement extends CI_Model{
    protected $table = 'fiche_renseignement';

    function __construct(){
        parent::__construct();
    }

    function isUserExist($identifiant){
        $query = $this->db->get_where($this->table, array('identifiant' => $identifiant));
        if(sizeof($query->result())==0) return false;
        return true;
    }

    function createUser($identifiant){
        if($this->isUserExist($identifiant)==false){
            $data = array(
                'identifiant'=>$identifiant
            );
            $this->db->insert($this->table, $data);
        }
    }

    function getUser($identifiant){
        $query = $this->db->select('*')->where('identifiant', $identifiant)->get($this->table);
        return $query->result()[0];
    }

    function getUser2($identifiant){
        $query = $this->db->select('*')->where('identifiant', $identifiant)->get($this->table);
        return $query->result();
    }

    function getAllUsersWithConvention(){
        $query = $this->db->select('*')->where('valide', 1)->get($this->table);
        return $query->result();
    }

    public function setSoumis($valeur, $username)
    {
        $data = array(
            'soumis' => $valeur
        );

        $this->db->where('identifiant', $username);
        $this->db->update($this->table, $data);
    }

    public function valider($username)
    {
        $data = array(
            'valide' => 1
        );

        $this->db->where('identifiant', $username);
        $this->db->update($this->table, $data);
    }

    public function refuser($username)
    {
        $data = array(
            'valide' => 0,
            'soumis' => 0
        );

        $this->db->where('identifiant', $username);
        $this->db->update($this->table, $data);
    }
}