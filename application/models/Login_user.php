<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model
{   
    public function cek_login($where)
    {
        $query = $this->db->get_where('users', $where)->num_rows();
        return $query;
    }

    public function insertUser()
    {
        $this->input->post('username');
        $this->input->post('fname');
        $this->input->post('email');
        $this->input->post('contact');
        $this->input->post('nis');
        $this->input->post('password');

        $data = array(
                    'username' => $this->input->post('username'),
                    'fname' => $this->input->post('fname'),
                    'email' => $this->input->post('email'),
                    'contact' => $this->input->post('contact'),
                    'nis' => $this->input->post('nis'),
                    'password' => $this->input->post('password'));
                    $this->db->insert('users', $data);
                }
}
?>