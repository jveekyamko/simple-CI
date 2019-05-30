<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_Student extends CI_Controller {

public function add_form(){
		$this->load->view('addStudent');
	}
}?>