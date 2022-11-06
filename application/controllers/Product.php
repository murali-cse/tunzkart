<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function index()
	{	
		$footer = [
			'showBanner' => true
		];

		$this->load->view('components/header');
		$this->load->view('product');
		$this->load->view('components/footer',$footer);
	}
}