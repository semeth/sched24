<?php
class Dashboard extends CI_Controller{    
    
    public function index(){

        $header['title'] = 'Sched24 | Dashboard';

        $data['header'] = $this->load->view('common/header', $header, true);
        $data['footer'] = $this->load->view('common/footer', '', true);


        return $this->load->view('dashboard/index', $data);
    }

}