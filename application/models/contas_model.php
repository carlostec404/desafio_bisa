<?php

    class Contas_model extends CI_Model{
        public function index(){
          return  $this->db->get("tb_conta")->result_array();
        }

        public function store($contas){
           $this->db->insert('tb_conta', $contas);
        }

        public function show($id){
          return $this->db->get_where("tb_conta", array(
            "id" => $id
          ))->row_array();
        }

        public function update($id, $conta){
          $this->db->where("id", $id);
          
          return $this->db->update("tb_conta", $conta);
        }

        public function destroy($id){
          $this->db->where("id", $id);
          return $this->db->delete("tb_conta");

          redirect("contas");
        }
    }
?>