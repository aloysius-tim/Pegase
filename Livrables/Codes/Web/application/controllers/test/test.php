<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->library('cas');
		$this->load->model('ldap');
		$this->load->library('table');
	}
	
	public function userSecondYear(){
		$result=$this->ldap->getAllUserFromSecondYear();
		
		$this->table->set_heading('Name', 'Email', 'Role');

		if(sizeof($result)>0)
			for($i=0;$i<sizeof($result)-1;$i++)
				$this->table->add_row($result[$i]["cn"][0], $result[$i]["mail"][0], $result[$i]['edupersonprimaryaffiliation'][0]);
		
		echo $this->table->generate();
	}
	
	public function userSecondYearDecale(){
		$result=$this->ldap->getAllUserFromSecondYearDecale();
		
		$this->table->set_heading('Name', 'Email', 'Role');
		
		if(sizeof($result)>0)
			for($i=0;$i<sizeof($result)-1;$i++)
				$this->table->add_row($result[$i]["cn"][0], $result[$i]["mail"][0], $result[$i]['edupersonprimaryaffiliation'][0]);
			
		
		echo $this->table->generate();
	}
	 
	public function index(){		
		echo('<a href="http://134.59.28.162/welcome/login">LOGIN</a><br/><br/><br/>');
		echo('<a href="http://134.59.28.162/welcome/logout">LOGOUT</a>');	
	}
	
	public function testIsUser(){
		echo ("kt303942 est etudiant ? -> ".$this->ldap->isStudent('kt303942')."<br/>");
		echo ("kt303942 est staff ? -> ".$this->ldap->isStaff('kt303942')."<br/>");
		echo ("bbrun est staff ? -> ".$this->ldap->isStaff('bbrun')."<br/>");
		echo ("bbrun est étudiante ? -> ".$this->ldap->isStudent('bbrun')."<br/>");
		echo ("rey est staff ? -> ".$this->ldap->isStaff('rey')."<br/>");
		echo ("rey est teacher ? -> ".$this->ldap->isTeacher('rey')."<br/>");
		echo ("rey est personnel ? -> ".$this->ldap->isPersonnel('rey')."<br/>");
	}
	
	public function testUserAttributes(){
		$result=$this->ldap->isUserInSecondYear('kt303942');
		echo('kt303942 is a second year ? '. $result.'<br/>');
		
		$result=$this->ldap->isUserInSecondYear('bbrun');
		echo('bbrun is a second year ? '. $result);
		
		$result=$this->ldap->getUserAttributes('bbrun');
		echo("<pre>");
		print_r($result);
		
		$result=$this->ldap->getUserAttributes('kt303942');
		echo("<pre>");
		print_r($result);
		
		/*$result=$this->ldap->getAllUserAttributesFindByMail('Beatrice.BRUN@unice.fr');
		echo("<pre>");
		print_r($result);*/
		
		/*$result=$this->ldap->getAllUserAttributesFindById('kt303942');
		echo("<pre>");
		print_r($result);*/
	}
	
	public function login(){
		$this->cas->force_auth();
		$user = $this->cas->user();	    
	    
	    echo $this->ldap->printUserAttributes($user->userlogin);
	    
	    echo('<a href="http://134.59.28.162/index.php/welcome/logout">LOGOUT</a>');	
	}
	
	public function logout(){
		$this->cas->logout('http://134.59.28.162');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */