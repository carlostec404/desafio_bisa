<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("contas_model");
	}

	public function index()
	{
		

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
		$contas["user_id"] = '1';
		
		$this->contas_model->store($contas);

		redirect("contas");
	}

	public function edit($id){
		

		$data["conta"]= $this->contas_model->show($id);
		$data['title'] = "Editar Contas";

		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-contas', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function update($id){
	
		$conta = $_POST;
		$this->contas_model->update($id, $conta);
		redirect("contas");

	}

	public function delete($id){
	
		$conta = $_POST;
		$this->contas_model->destroy($id);
		redirect("contas");
	}

}