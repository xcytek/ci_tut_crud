<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorial_model extends CI_Model{

	public function insertar_persona($persona){

		if ( $this->db->insert('tb_personas', $persona) )
			return true;		
		else
			return false;

	}

	public function leer_persona(){

		$this->db->order_by('id DESC');

		$query = $this->db->get('tb_personas');

		return $query->result();
	}

	public function traer_persona($id){

		$this->db->where('id', $id);

		$query = $this->db->get('tb_personas');

		return $query->row();
	}

	public function actualiza_persona($id, $persona){

		$this->db->where('id', $id);

		if( $this->db->update('tb_personas', $persona) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_persona($id){

		$this->db->where('id', $id);

		if( $this->db->delete('tb_personas') )
			return true;		
		else
			return false;		
		
	}

}