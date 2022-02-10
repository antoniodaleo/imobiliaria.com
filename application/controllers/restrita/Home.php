<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //Existe uma sessão?
        if (!$this->ion_auth->logged_in() ) {
            redirect('restrita/login');
        }

        if(!$this->ion_auth->is_admin()){
            $this->session->set_flashdata('info','O usuario não tem acesso a esse menu sistema'); 
            redirect('/'); 
        }
    }

    public function index() {

        $data = array(
         
           
        );

//        echo '<pre>';
//        print_r($data);
//        exit();


        $this->load->view('restrita/layout/header');
        $this->load->view('restrita/home/index');
        $this->load->view('restrita/layout/footer');
    }

}
