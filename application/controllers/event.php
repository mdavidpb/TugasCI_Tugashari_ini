<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {
	public function index(){
		$data['konten']="v_event";
		$this->load->view('template', $data);
	}
}
?>
