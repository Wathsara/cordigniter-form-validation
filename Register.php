<?php
if (! Defined ('BASEPATH')) exit ('No direct script access allowed');

Class Register extends CI_Controller{
    public function index(){
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->view('register');
    }

    public  function submit(){
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('depertment', 'Depertment', 'required');
        $this->form_validation->set_rules('sname', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Passwor' , 'required');
        $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }
        else
        {
            echo "Form Validation Success";
        }

    }
}


?>
