<?php
class Firm extends CI_Controller{
    public function index(){

        $data['header'] = $this->load->view('common/header', '', true);
        $data['footer'] = $this->load->view('common/footer', '', true);

        $this->load->view('firm/index', $data);
    }

    public function employees(){
        $data['header'] = $this->load->view('common/header', '', true);
        $data['footer'] = $this->load->view('common/footer', '', true);

        $this->load->view('firm/employees', $data);
    }
}