<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$category = [
			[
				'image'=> 'assets/images/demos/demo-4/cats/1.png',
				'title' => 'Computer & Laptop'
			],
			[
				'image'=> 'assets/images/demos/demo-4/cats/2.png',
				'title' => 'Digital Cameras'
			],
			[
				'image'=> 'assets/images/demos/demo-4/cats/3.png',
				'title' => 'Smart Phones'
			],
			[
				'image'=> 'assets/images/demos/demo-4/cats/4.png',
				'title' => 'Televisions'
			],
			[
				'image'=> 'assets/images/demos/demo-4/cats/5.png',
				'title' => 'Audio'
			],
			[
				'image'=> 'assets/images/demos/demo-4/cats/6.png',
				'title' => 'Smart Watches'
			],
		];

		$newarrival = [
			[
				'image'=> 'assets/images/products/louisphillipe-1.png',
				'category' => 'Men',
				'title' => 'Louis Philippe Sport',
				'price' => '1,999',
				'review_count' => '4',
				'rating' => '80%',
				'isLabel' => true,
				'labelText' => 'Top' 
			],
			[
				'image'=> 'assets/images/products/saree_mall-1.png',
				'category' => 'Women',
				'title' => 'Saree mall',
				'price' => '999',
				'review_count' => '4',
				'rating' => '50%',
				'isLabel' => false,
				'labelText' => 'New'
			],
			[
				'image'=> 'assets/images/products/sangria-1.png',
				'category' => 'Women',
				'title' => 'Sangria',
				'price' => '2,499',
				'review_count' => '4',
				'rating' => '30%',
				'isLabel' => false,
				'labelText' => 'Sale' 
			],
			[
				'image'=> 'assets/images/products/uspolo-1.png',
				'category' => 'Men',
				'title' => 'U.S. Polo Assn',
				'price' => '899',
				'review_count' => '4',
				'rating' => '40%',
				'isLabel' => true,
				'labelText' => 'New' 
			],
			[
				'image'=> 'assets/images/products/allensolly-1.png',
				'category' => 'Men',
				'title' => 'Allen Solly',
				'price' => '799',
				'review_count' => '10',
				'rating' => '90%',
				'isLabel' => true,
				'labelText' => 'New' 
			],
		];

		$banners = [
			[
				'image'=> 'assets/images/banners/banner-1.jpeg',
				'redirect_id' => '1',
				'device' => 'desktop'
			],
			[
				'image'=> 'assets/images/demos/demo-4/slider/slide-2.png',
				'redirect_id' => '1',
				'device' => 'mobile'
			]
		];

		$data = [
			'categories' => $category,
			'newarrival' => $newarrival,
			'banners' => $banners,
		];

		$footer = [
			'showBanner' => true
		];

		$this->load->view('components/header');
		$this->load->view('home',$data);
		$this->load->view('components/footer',$footer);
	}
}