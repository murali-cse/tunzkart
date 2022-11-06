<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    
    public function index()
	{	
		$footer = [
			'showBanner' => false
		];

		$this->load->view('components/header');
		$this->load->view('cart');
		$this->load->view('components/footer',$footer);
	}
}