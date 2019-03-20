<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Program extends CI_Controller {
    
        public function index()
        {
            $data['title'] = 'Masuk kUy';
            $this->load->view('viewprogram', $data);
        }

        public function masuk()
        {
        $data['title'] = 'Profil';
        $this->load->view('templates/header', $data);
        $this->load->view('profil');
        }

        public function userLogin()
        {
            $this->load->view('login/login_view');
        }

        public function userReg()
        {
            $this->load->view('login/register_view');
        }
    
    }
    
    /* End of file Program.php */
    
?>