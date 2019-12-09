<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("CustomRest.php");
class Login extends CustomRest {
	public function __construct()
	  {
	    parent::__construct();
	       // Your own constructor code
		$this->load->helper("rest");
		// $this->cek_unlogin();
	  }

	public function index()
	{
		$this->load->view('login');
	}

  public function aksi_login(){

  }
}
