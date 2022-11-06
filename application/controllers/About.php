<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    public function index()
	{	
		$footer = [
			'showBanner' => true
		];

		$this->load->view('components/header');
		$this->load->view('about');
		$this->load->view('components/footer',$footer);
	}
}