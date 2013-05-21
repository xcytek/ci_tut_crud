<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorial extends CI_Controller{	

	public function insertar(){

		$persona = array(
			'nombre' => $this->input->post('nombre'),
			'edad' => $this->input->post('edad'),
			'email' => $this->input->post('email'),
			'pais' => $this->input->post('pais')
			);

		$this->load->model('tutorial_model');
		if ( $this->tutorial_model->insertar_persona($persona) )
			redirect('tutorial');	 
	}

	public function actualizar(){
		$persona = array(
			'nombre' => $this->input->post('nombre'),
			'edad' => $this->input->post('edad'),
			'email' => $this->input->post('email'),
			'pais' => $this->input->post('pais')
			);
		$id = $this->input->post('id');

		$this->load->model('tutorial_model');
		if( $this->tutorial_model->actualiza_persona($id, $persona) )
			redirect('tutorial');		
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('tutorial_model');
		if( $this->tutorial_model->eliminar_persona($id) )
			redirect('tutorial');
	}

	public function index(){		
		$data['title'] = 'Inicio';
		$data['main_content'] = 'inicio';

		$this->load->model('tutorial_model');
		$data['personas'] = $this->tutorial_model->leer_persona();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['persona_actualizar']	= $this->tutorial_model->traer_persona($id);
		}

		$this->load->view('main_template',$data);
	}		

}