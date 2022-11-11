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
				'image'=> 'assets/images/products/cat1.png',
				'title' => 'Ethnic Wear'
			],
			[
				'image'=> 'assets/images/products/cat2.png',
				'title' => 'Activewear'
			],
			[
				'image'=> 'assets/images/products/cat7.png',
				'title' => 'Sportswear'
			],
			[
				'image'=> 'assets/images/products/cat4.png',
				'title' => 'Kidswear'
			],
			[
				'image'=> 'assets/images/products/cat5.png',
				'title' => 'Workwear'
			],
			[
				'image'=> 'assets/images/products/cat6.png',
				'title' => 'Casualwear'
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
		
		$recommended = [
			[
				'image'=>'assets/images/products/allensolly-1.png',
				'category' => 'Men',
				'name'=> 'Allen Solly',
				'original_price'=> '1000',
				'discount_price'=>'800',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> ['#666666','#ff887f','#6699cc','#f3dbc1', '#eaeaec'],
				'sale' => false
			],
			[
				'image'=> 'assets/images/products/louisphillipe-1.png',
				'category' => 'Men',
				'name'=> 'Louis Philippe Sport',
				'original_price'=> '1000',
				'discount_price'=>'0',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> [],
				'sale' => false
			],
			[
				'image'=> 'assets/images/products/saree_mall-1.png',
				'category' => 'Women',
				'name'=> 'Saree Mall',
				'original_price'=> '1000',
				'discount_price'=>'999',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> [],
				'sale' => true
			],
			[
				'image'=> 'assets/images/products/sangria-1.png',
				'category' => 'Women',
				'name'=> 'Saree Mall',
				'original_price'=> '1000',
				'discount_price'=>'999',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> [],
				'sale' => true
			],
			[
				'image'=> 'assets/images/products/louisphillipe-1.png',
				'category' => 'Men',
				'name'=> 'Louis Philippe Sport',
				'original_price'=> '1000',
				'discount_price'=>'0',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> [],
				'sale' => true
			],
			[
				'image'=> 'assets/images/products/saree_mall-1.png',
				'category' => 'Women',
				'name'=> 'Saree Mall',
				'original_price'=> '1000',
				'discount_price'=>'999',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> [],
				'sale' => true
			],
			[
				'image'=> 'assets/images/products/sangria-1.png',
				'category' => 'Women',
				'name'=> 'Saree Mall',
				'original_price'=> '1000',
				'discount_price'=>'999',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> [],
				'sale' => false
			],
			[
				'image'=>'assets/images/products/allensolly-1.png',
				'category' => 'Men',
				'name'=> 'Allen Solly',
				'original_price'=> '1000',
				'discount_price'=>'800',
				'rating'=> '50%',
				'review' => '4',
				'colors'=> ['#666666','#ff887f','#6699cc','#f3dbc1', '#eaeaec'],
				'sale' => true
			],

		];

		$portraitBanner = [
			'image' => 'assets/images/demos/demo-4/banners/banner-4.jpg',
			'redirect_id' => '1',
			'show_ad' => true
		];

		$data = [
			'categories' => $category,
			'newarrival' => $newarrival,
			'banners' => $banners,
			'recommended'=> $recommended,
			'portrait_banner' => $portraitBanner,
		];

		$footer = [
			'showBanner' => true
		];

		$this->load->view('components/header');
		$this->load->view('home',$data);
		$this->load->view('components/footer',$footer);
	}
}