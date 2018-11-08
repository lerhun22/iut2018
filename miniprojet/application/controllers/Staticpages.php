<?php
class Staticpages extends CI_Controller {
	public function index(){
		$this->load->view('home');
	}
	public function display($content='home')
	{
		if (!file_exists('application/views/'.$content.'.php'))
		{
			echo "cette page =>" . $content.'.php'. " n'existe pas";
			show_404();
		}
		$data['content']=$content;
		$data['test']='test';
		
		//option 1
		$this->load->view('templates/template',$data);

		//option 2
		//tansformation de $data (tableau associatif) en variable globale
		//$data peut être passé dans view
		/*
		$this->load->vars($data);
		$this->load->view('templates/template');
		*/
	}
}
