<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('cas');
		$this->load->model('ldap');
		$this->load->library('table');
	}
	
	function index(){
		echo "panel admin";
	}
}