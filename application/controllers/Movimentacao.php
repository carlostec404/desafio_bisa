<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movimentacao extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("movimentacao_model");
	}

	public function index()
	{
		

		$data["movimentacao"]= $this->movimentacao_model->index();
		$data['title'] = "Movimentação - Gestão de Gastos";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/movimentacao', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		
	
		
	}

	public function add(){
		$data['title'] = "Movimentação - Gestão de Gastos";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-movimentacao', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		
	}

	public function store(){

		$movimentacao = $_POST;
		$movimentacaos["user_id"] = '1';
		
		$this->movimentacao_model->store($movimentacao);

		redirect("movimentacao");
	}

	public function edit($id){
		

		$data["movimentacao"]= $this->moviemntacao_model->show($id);
		$data['title'] = "Editar Movimentação";

		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-movimentacao', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function update($id){
	
		$movimentacao = $_POST;
		$this->contas_model->update($id, $movimentacao);
		redirect("movimentacao");

	}

	public function delete($id){
	
		$movimentacao = $_POST;
		$this->movimentacao_model->destroy($id);
		redirect("movimentacao");
	}
}