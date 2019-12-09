<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomRest extends CI_Controller {

	public function cek_login()
	{
		// if(!isset($_SESSION['token'])){
		// 	header("location:".base_url()."/logout");
		// }
		// $header=array("Authorization: Bearer ".$_SESSION['token']);
		// $cektoken=sendcurl(host()."/portal/api/check",null,"post",$header);
    //
		// if($cektoken['message']=="false" || !isset($cektoken)){
		// 	header("location:".base_url()."/logout");
		// }
	}
	public function user_data()
	{
		// $header=array("Authorization: Bearer ".$_SESSION['token']);
		// $cektoken=sendcurl(host()."/portal/api/check",null,"post",$header);
    //
		// return $cektoken;
	}
	public function cek_unlogin()
	{
		// if(isset($_SESSION['token'])){
		// 	header("location:".base_url());
		// }
	}
}
