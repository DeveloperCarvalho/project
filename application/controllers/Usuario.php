<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
         parent::__construct();
	}

	public function index()
	{
      	$this->data['titulo'] = "login de acesso ao sistema";
      	if(isset($_POST))
      		$error = $this->verifica_login($_POST);

      	$this->load->view('login', $this->data);

	}
	public function home()
	{
		$this->load->view('login');
	}
	public function verifica_login($data)
	{
		echo'<pre>';
		var_dump($data);
	
		$this->load->view('usuario', $this->data);
	}
}
