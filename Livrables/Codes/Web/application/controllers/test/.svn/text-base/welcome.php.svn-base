<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property Cas $cas
 * @property ldap $ldap
 */
class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	 
	public function index(){
        //echo('<h3>Hello you</h3>');
		//echo('<a href="http://134.59.28.162/welcome/login">LOGIN</a><br/><br/><br/>');
		//echo('<a href="http://134.59.28.162/welcome/logout">LOGOUT</a>');
        $this->load->view('jury/detail-etudiant');
	}
	
	public function login(){
		$this->cas->force_auth();
		$user = $this->cas->user();

		if($this->ldap->isUserInSecondYear($user->userlogin) || $this->ldap->isUserInSecondYearDecale($user->userlogin)){
			redirect('/stage/', 'refresh');
		}else{
			redirect('/admin/', 'refresh');
		}    
	    
	    echo $this->ldap->printUserAttributes($user->userlogin);
	    echo('<a href="http://134.59.28.162/index.php/welcome/logout">LOGOUT</a>');	
	}
	
	public function logout(){
		$this->cas->logout('http://134.59.28.162');
	}
}