<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasaoModel extends CI_Model {

	public function getData($tableName){
		$data = $this->db->query('SELECT * from '.$tableName.' ORDER BY id DESC');
		return $data->result_array();
	}

	public function insertData($tableName, $data){
		$res = $this->db->insert($tableName, $data);
		return $res;
	}

	public function updateData($tableName, $data, $where){
		$res = $this->db->update($tableName, $data, $where);
		return $res;
	}

	public function deleteData($tableName, $where){
		$this->db->delete($tableName, $where);
	}

	public function GetDataId($tableName, $where=""){
		$data = $this->db->query('select * from '.$tableName.' '.$where);
		return $data->result_array();
	}

}
