<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Offre $offre
 * @property Attribut $attribut
 * @property Depot $depot
 * @property Fiche_renseignement $fiche_renseignement
 */
class Ldap extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->cas->force_auth();
        $this->load->model('offre');
        $this->load->model('depot');
        $this->load->model('fiche_renseignement');
    }

	function isStudent($id){
		$data=$this->getUserAttributes($id);
		if($data[4]=='student') return 1;
		return 0;
	}
	
	function isStaff($id){
		$data=$this->getUserAttributes($id);
		if($data[4]=='staff' || $id=='ja301192') return 1;
		return 0;
	}
	
	function isTeacher($id){
		$data=$this->getUserAttributes($id);
		if($data[4]=='faculty') return 1;
		return 0;
	}
	
	function isPersonnel($id){
		if($this->isTeacher($id)==1 || $this->isStaff($id)==1) return 1;
		return 0;
	}

	public function getUserAttributes($id){
		$result= array();
		
		$ds=ldap_connect("ldap.unice.fr");
		
		if ($ds) { 
		    $r=ldap_bind($ds);     
		    
		    $filter="(supannaliaslogin=".$id.")";
		    $sr=ldap_search($ds,"dc=unice, dc=fr", $filter);  
		    $info = ldap_get_entries($ds, $sr);
			
		    $nom=$info[0]["cn"][0];
		    $email=$info[0]["mail"][0];
		    $uid=$info[0]["uid"][0];
		    $role=$info[0]['edupersonprimaryaffiliation'][0];
		    if(isset($info[0]['diplomep'])) $annee=$info[0]['diplomep'][0];
		    else $annee='Not a student';
		    
		    
			array_push($result, $id);
			array_push($result, $nom);
			array_push($result, $email);
			array_push($result, $uid);
			array_push($result, $role);
			array_push($result, $annee);
			
		    ldap_close($ds);
		    
		    return $result;
		} else {
		    show_error('Impossible de se connecter au serveur LDAP.');
		}
	}
	
	public function printUserAttributes($id){
		$result= '';
		
		$ds=ldap_connect("ldap.unice.fr");
		
		if ($ds) { 
		    $r=ldap_bind($ds);     
		    
		    $filter="(supannaliaslogin=".$id.")";
		    $sr=ldap_search($ds,"dc=unice, dc=fr", $filter);  
		    $info = ldap_get_entries($ds, $sr);
			
		    $nom=$info[0]["cn"][0];
		    $email=$info[0]["mail"][0];
		    $uid=$info[0]["uid"][0];
		    $role=$info[0]['edupersonprimaryaffiliation'][0];

			$result='<h3>Hello World '. $nom . '</h3>';
			$result=$result . '<p>Id du compte: ' . $id . '<br/>';
			$result=$result . 'Email du compte: ' . $email . '<br/>';
			$result=$result . 'UID du compte: ' . $uid . '<br/>';
			$result=$result . 'role du compte: ' . $role . '</p>';
			
		    ldap_close($ds);
		    
		    return $result;
		} else {
		    show_error('Impossible de se connecter au serveur LDAP.');
		}
	}

    public function getUid($idUser){
        return $this->getAllUserAttributesFindById($idUser)['uid'][0];
    }
	
	public function getAllUserAttributesFindById($id){
		$result= array();
		
		$ds=ldap_connect("ldap.unice.fr");
		
		if ($ds) { 
		    $r=ldap_bind($ds);     
		    
		    $filter="(supannaliaslogin=".$id.")";
		    $sr=ldap_search($ds,"dc=unice, dc=fr", $filter);  
		    $info = ldap_get_entries($ds, $sr);
			
		    ldap_close($ds);
		    
		    return $info[0];
		} else {
		    show_error('Impossible de se connecter au serveur LDAP.');
		}
	}
	
	public function getAllUserAttributesFindByMail($id){
		$result= array();
		
		$ds=ldap_connect("ldap.unice.fr");
		
		if ($ds) { 
		    $r=ldap_bind($ds);     
		    
		    $filter="(mail=".$id.")";
		    $sr=ldap_search($ds,"dc=unice, dc=fr", $filter);  
		    $info = ldap_get_entries($ds, $sr);
			
		    ldap_close($ds);
		    
		    return $info[0];
		} else {
		    show_error('Impossible de se connecter au serveur LDAP.');
		}
	}
	
	public function getAllUserFromSecondYear(){
		$result= array();
		
		$ds=ldap_connect("ldap.unice.fr");
		
		if ($ds) { 
		    $r=ldap_bind($ds);     
		    
		    $filter="(diplomep=TDFT02-130)";
		    $sr=ldap_search($ds,"dc=unice, dc=fr", $filter);  
		    $info = ldap_get_entries($ds, $sr);
			
		    ldap_close($ds);
		    
		    return $info;
		} else {
		    show_error('Impossible de se connecter au serveur LDAP.');
		}
	}

    public function getUsers(){
        $etudiants= $this->getAllUserFromSecondYear();
        $result=array();

        foreach($etudiants as $etudiant){
            $username=$etudiant['supannaliaslogin'][0];

            $result[$username]['mail']=$etudiant['mail'][0];
            $result[$username]['depots']=$this->depot->getAllFilesStudent($username);
            $result[$username]['fiche_renseignement']=$this->fiche_renseignement->getUser2($username);
            $result[$username]['nom']=$etudiant["cn"][0];
            $result[$username]['username']=$etudiant['supannaliaslogin'][0];
            if(empty($result[$username]['fiche_renseignement'])) $result[$username]['inscrit']=0;
            else $result[$username]['inscrit']=1;
        }

        return $result;
    }

    public function getUsersWithoutAccount(){
        $etudiants= $this->getAllUserFromSecondYear();
        $result=array();

        foreach($etudiants as $etudiant){
            $username=$etudiant['supannaliaslogin'][0];
            $fiche=$this->fiche_renseignement->getUser2($username);

            if(sizeof($fiche)==0) {
                $result[$username]['mail'] = $etudiant['mail'][0];
                $result[$username]['depots'] = $this->depot->getAllFilesStudent($username);
                $result[$username]['fiche_renseignement'] = $fiche;
                $result[$username]['nom'] = $etudiant["cn"][0];
                $result[$username]['username'] = $etudiant['supannaliaslogin'][0];
                if (empty($result[$username]['fiche_renseignement'])) $result[$username]['inscrit'] = 0;
                else $result[$username]['inscrit'] = 1;
            }
        }

        return $result;
    }

    public function getUsersWithoutConvention(){
        $etudiants= $this->getAllUserFromSecondYear();
        $result=array();

        foreach($etudiants as $etudiant){
            $username=$etudiant['supannaliaslogin'][0];
            $fiche=$this->fiche_renseignement->getUser2($username);
            /*echo '<pre>';
            print_r($fiche[0]);
            die;*/
            if(empty($fiche) || intval($fiche[0]->valide) == 0) {
                $result[$username]['mail'] = $etudiant['mail'][0];
                $result[$username]['depots'] = $this->depot->getAllFilesStudent($username);
                $result[$username]['fiche_renseignement'] = $fiche;
                $result[$username]['nom'] = $etudiant["cn"][0];
                $result[$username]['username'] = $etudiant['supannaliaslogin'][0];
                if (empty($result[$username]['fiche_renseignement'])) $result[$username]['inscrit'] = 0;
                else $result[$username]['inscrit'] = 1;
            }
        }
        return $result;
    }
	
	public function getAllUserFromSecondYearDecale(){
		$result= array();
		
		$ds=ldap_connect("ldap.unice.fr");
		
		if ($ds) { 
		    $r=ldap_bind($ds);     
		    
		    $filter="(diplomep=TDFT4D-130)";
		    $sr=ldap_search($ds,"dc=unice, dc=fr", $filter);  
		    $info = ldap_get_entries($ds, $sr);
			
		    ldap_close($ds);
		    
		    return $info;
		} else {
		    show_error('Impossible de se connecter au serveur LDAP.');
		}
	}
	
	public function isUserInSecondYear($id){
		if($this->isStudent($id) && $this->getUserAttributes($id)[5]=='TDFT02-130') return 1;
		return 0;
	}
	
	public function isUserInSecondYearDecale($id){
		if($this->isStudent($id) && $this->getUserAttributes($id)[5]=='TDFT4D-130') return 1;
		return 0;
	}


}