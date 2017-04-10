<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Depot extends CI_Model{
    protected $depots=array();
    protected $table='depot';

    function __construct(){
        parent::__construct();
        $this->load->config('pegase');

        $this->depots=$this->config->item('depot');
    }

    function isDepotValide($idDepot){
        $now = date('Y-m-d');
        $now = new DateTime( $now );
        $now = $now->format('Ymd');

        foreach($this->depots as $depot){
            $expire = date($depot['date_limite']);
            $expire = new DateTime( $expire );
            $expire = $expire->format('Ymd');

            if($now < $expire && $depot['id']==$idDepot){
                return $depot;
            }
        }
        return false;
    }

    function getDepotsValides($username){
        $array=array();

        $now = date('Y-m-d');
        $now = new DateTime( $now );
        $now = $now->format('Ymd');

        foreach($this->depots as $depot){
            $expire = date($depot['date_limite']);
            $expire = new DateTime( $expire );
            $expire = $expire->format('Ymd');

            if($now < $expire){
                $depot['existe']=$this->depotExist($depot['id'], $username);
                $array[]=$depot;
            }
        }
        return $array;
    }

    function getDepotsNonValides($username){
        $array=array();

        $now = date('Y-m-d');
        $now = new DateTime( $now );
        $now = $now->format('Ymd');

        foreach($this->depots as $depot){
            $expire = date($depot['date_limite']);
            $expire = new DateTime( $expire );
            $expire = $expire->format('Ymd');

            if($now > $expire){
                $depot['existe']=$this->depotExist($depot['id'], $username);
                $array[]=$depot;
            }
        }
        return $array;
    }

    function depotExist($idType, $username){
        $query = $this->db->select('*')->where('username', $username)->where('id_depot', $idType)->get($this->table);
        if(sizeof($query->result())>0) return 1;
        return 0;
    }

    public function addFile($username, $commentaire, $id_depot) {
        $upload_data = $this->upload->data();

        $data = array(
            'username' => $username ,
            'commentaire' => $commentaire ,
            'id_depot' => $id_depot,
            'path' => 'assets/dwnld/depots/'.$upload_data['file_name']
        );
        $this->db->insert($this->table, $data);
    }

    public function getFiles($username, $idDepot){
        $query = $this->db->select('*')->where('username', $username)->where('id_depot', $idDepot)->get($this->table);
        return $query->result();
    }

    public function getAllFiles($idDepot){
        $date=date("Y").'-01-01 00:00:00';
        $query = $this->db->select('*')->where('id_depot', $idDepot)->where('date >=',$date)->get($this->table);
        return $query->result();
    }

    public function getAllAndOldFiles($idDepot){
        $query = $this->db->select('*')->where('id_depot', $idDepot)->get($this->table);
        return $query->result();
    }

    public function getAllFilesStudent($usernameStudent){
        $query = $this->db->select('*')->where('username', $usernameStudent)->get($this->table);
        return $query->result();
    }

    public function delete($username, $idFile){
        $this->db->delete($this->table, array('username' => $username, 'id' => $idFile));
    }
}