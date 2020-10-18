<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movimentacao extends CI_Controller {

	public function index()
	{
		

		
		$data['title'] = "Movimentação - Gestão de Gastos";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/movimentacao', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		
	
		
	}
}