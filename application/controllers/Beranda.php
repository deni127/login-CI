<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			echo "<script>alert('Silahkan login terlebih dahulu!');
        window.location.href='auth';
        </script>";
		}
	}
	public function index()
	{
		$this->load->view('beranda.php');
	}
	
}
