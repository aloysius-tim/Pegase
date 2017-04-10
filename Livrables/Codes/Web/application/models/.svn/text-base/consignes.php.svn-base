<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consignes extends CI_Model{
    protected $table = 'consigne';

    function __construct(){
        parent::__construct();
    }

    function getConsignes(){
        $query = $this->db->select('*')->where('id', 1)->get($this->table);
        return $query->result();
    }
}