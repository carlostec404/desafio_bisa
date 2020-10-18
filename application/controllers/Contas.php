<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {

	public function index()
	{
		$this->load->model("contas_model");

		$data["contas"]= $this->contas_model->index();
		$data['title'] = "Contas - Gestão de Gastos";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/contas', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		
	
		
	}

	public function add(){
		$data['title'] = "Contas - Gestão de Gastos";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-contas', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		
	}

	public function store(){

		$contas = $_POST;
		$this->load->model("contas_model");
		$this->contas_model->store($contas);

		redirect("contas");


	}

	public function edit($id){
		$this->load->model("contas_model");

		$data["contas"]= $this->contas_model->show($id);
		$data['title'] = "Editar Contas - Gestão de Gastos";
		
		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-contas', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function update($id){
		
		$this->load->model("contas_model");
		
		$contas = $_POST;
		$this->contas_model->update($id, $contas);

		redirect("contas");
	}
}