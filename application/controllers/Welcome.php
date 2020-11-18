<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public $data_header = [];
	

	public function index()
	{	
		$this->load->view('welcome_message');		
	}
	
	public function login()
	{	
		$this->data_header['nome_Empresa'] = 'Nintendo';
		
		$this->load->view('header', $this->data_header);		
		$this->load->view('login');		
	}

	public function entrar()
	{	
		// condição: $login === 'andrew', $se>nha ==== '123456';

		// view: sucesso
		// view: erro_login

		
		$login = $this->input->post();
		
		if($login['login']== 'andrew' && $login['senha']== '12345'){
			$this->load->view('welcome_message');	
		}else {
			echo'login ou senha invalido';
			$this->data_header['nome_Empresa'] = 'Nintendo';
			$this->load->view('header', $this->data_header);
			$this->load->view('login');	
		}
		
		
		
		
	}
}

