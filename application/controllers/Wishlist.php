<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {
    
    public function index()
	{
		$this->load->view('components/header');
		$this->load->view('wishlist');
		$this->load->view('components/footer');
	}
}