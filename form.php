<?php
class Form extends CI_Controller {
public function __construct() {
parent::__construct();
}

// Show form in view page i.e view_page.php
public function form_show() {
$this->load->view("view_form");
}

// When user submit data on view page, Then this function store data in array.
    public function data_submitted() {
$data = array(
'fname' => $this->input->post('fname'),
'lname' => $this->input->post('lname'),
'school'=> $this->input->post('school')
); 

$this->load->view("hello_world", $data);
}
}
?>