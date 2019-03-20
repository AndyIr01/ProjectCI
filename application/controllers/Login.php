<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller
    {
        public function loginUser()
        {
            $this->load->model('Login_user');

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Login';
                $this->load->view('login/login_view', $data);
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
    
                $where = array( 'username' => $username,
                                'password' => $password);
    
            $cek = $this->Login_user->cek_login($where);  
            //harus dimasukkan kedalam else index supaya dapat masuk login index
            if ($cek > 0) {
                $data_session = array(
                        'status' => 'logged in'
                );
                $this->session->set_userdata($data_session);

                redirect('Program/masuk');
            }
            else {
                $this->session->set_flashdata('pesan', 'Username dan password <strong>salah!</strong>');

                redirect('Program/login');
            }
            }
    }

    public function logout()
    { 
        $this->session->sess_destroy();
        redirect('Program/userLogin');
    }
    }
    
    
    /* End of file Login.php */
    
?>