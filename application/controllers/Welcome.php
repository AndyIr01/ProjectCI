<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function dashboard($nama, $gender)
	{
		$data['nama_lengkap'] = $nama;
		$data['jenis_kelamin'] = $gender;
		$data['title'] = 'Document';
		$this->load->view('beranda', $data);
	}

	public function profil()
	{
		$data['title'] = 'Profil';
		$this->load->view('templates/header', $data);
		$this->load->view('profil');
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$data['title'] = 'Contact';
		$this->load->view('templates/header', $data);
		$this->load->view('contact');
		$this->load->view('templates/footer');
	}

	public function utama()
	{
		$data['title'] = 'Beranda';
		$this->load->view('templates/header', $data);
		$this->load->view('utama');
		$this->load->view('templates/footer');
	}

	public function event()
	{
		$data['title'] = 'Event';
		$this->load->view('templates/header', $data);
		$this->load->view('event');
		$this->load->view('templates/footer');
	}

	public function gallery()
	{
		$data['title'] = 'Koleksi Foto';
		$this->load->view('templates/header', $data);
		$this->load->view('gallery');
		$this->load->view('templates/footer');
	}
}
