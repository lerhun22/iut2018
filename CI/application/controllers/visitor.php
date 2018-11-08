<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->load->model('pokemon_model');
    }

	public function index()
	{
        $data['nb_rows']=$this->pokemon_model->getNbRec();
        $data['pokemons']=$this->pokemon_model->getall();    
        $data['free_pokemons']=$this->pokemon_model->get_free_pokemon();    
        $data['identifier']= $this->pokemon_model->get_identifier_by_pokemon_id(10);
        $this->load->view('home',$data);
    }
    
    public function register()
	{
		$this->load->view('home');
    }

    public function login()
	{
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
        }
    }

    public function collection(){
        //$data['collections']= $this->pokemon_model->display_collection();  
        //$data['collections']= $this->pokemon_model->display_collection_from('admin');       
        $data['collection']= $this->pokemon_model->get_collection_by_collector('admin');           
        $this->load->view('collection',$data);
    }
}