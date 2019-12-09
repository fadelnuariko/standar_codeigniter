<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("CustomRest.php");

class RouteController extends CustomRest  {

	public function __construct()
	  {
	  parent::__construct();
		$this->load->helper("rest");
		$this->cek_login();
	  }

	public function index()
	{
		$this->load->view('contents/fadel');
	}

}
