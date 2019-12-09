<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("CustomRest.php");
class Logout extends CustomRest {
	public function __construct()
	  {
	    parent::__construct();
	       // Your own constructor code
		$this->load->helper("rest");
	  }

	public function index()
	{
		session_destroy();
		header('location:'.base_url()."login");
	}
}
