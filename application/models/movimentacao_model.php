<?php

    class Movimentacao_model extends CI_Model{
        public function index(){
          return  $this->db->get("tb_movimentacao")->result_array();
        }

        public function store($movimentacao){
           $this->db->insert('tb_movimentacao', $movimentacao);
        }

        public function show($id){
          return $this->db->get_where("tb_movimentacao", array(
            "id" => $id
          ))->row_array();
        }

        public function update($id, $movimentacao){
          $this->db->where("id", $id);
          
          return $this->db->update("tb_movimentacao", $movimentacao);
        }

        public function destroy($id){
          $this->db->where("id", $id);
          return $this->db->delete("tb_movimentacao");

          redirect("movimentacao");
        }
    }
?>