<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    
    public function index()
	{
		$footer = [
			'showBanner' => true
		];
		
		$this->load->view('components/header');
		$this->load->view('category');
		$this->load->view('components/footer',$footer);
	}
}