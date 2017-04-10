<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property email $email
 * @property mixed config
 */
class Mail_pegase extends CI_Model{
    private $config;

    public function __construct(){
        $this->config['protocol'] = 'smtp';
        $this->config['smtp_host'] = 'smtp.googlemail.com';
        $this->config['smtp_port'] = 465;
        $this->config['smtp_user'] = $this->config->item('email_secretariat');
        $this->config['smtp_pass'] = $this->config->item('mdp_email_secretariat');
        $this->config['crlf'] = '\r\n';
        $this->config['newline'] = '\r\n';
        $this->config['mailtype'] = 'html';
        $this->config['charset'] = 'iso-8859-1';

        //$this->email->initialize($this->config);
        //$this->email->set_newline("\r\n");
    }

    public function sendMailSecretariat($emailEtudiant, $nomEtudiant, $subject, $message){
        $this->email->from($emailEtudiant, $nomEtudiant);
        $this->email->to($this->config->item('email_secretariat'));

        $this->email->subject('PEGASE -'.$subject);
        $this->email->message($message);

        $this->email->send();
    }

    function sendEmailDemandeModification($commentaire, $idOffre, $emailEntreprise){

    }

    function sendEmailDemandeModificationFicheEntreprise($username, $commentaire, $emailEtudiant){

    }
}