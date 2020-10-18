<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deshboard extends CI_Controller {

	public function index()
	{
		
		$this->load->model("contas_model");		
		$data['contas'] = $this->contas_model->index();
		$data['title'] = "Deshboard - Gestão de Gastos";
	
				

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/deshboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);

		
	}
}