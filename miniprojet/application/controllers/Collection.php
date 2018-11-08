<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('collection_model');
	}
	public function index(){
		$data['pokemons']=[];
		$data['pokemons']=$this->collection_model->getall();
/* 		$this->load->view('home',$data); */		
/* 		$data['content']='home';
		$this->load->view('templates/template',$data); */

		$this->load->view('header');
		$this->load->view('collection',$data);
		$this->load->view('footer');
	}

	public function add()
	{
		$data = array( 
			'identifier' => $this->input->post('identifier'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			'base_experience' => $this->input->post('base_experience'), 
		);
		$insert = $this->collection_model->add($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($id)
	{
		$data = $this->collection_model->get_by_id($id);
		echo json_encode($data);
	}

	public function update()
	{
		$data = array( 
			'identifier' => $this->input->post('identifier'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			'base_experience' => $this->input->post('base_experience'), 
		);
		$this->collection_model->update(array('pokemon_id' => $this->input->post('pokemon_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function delete_by_id($id)
	{
		$this->collection_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
}
