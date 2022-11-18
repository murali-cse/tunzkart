<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {
    
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('category_model');
    }

    public function imageupload_post()
	{	

        $config['upload_path']          = './uploads/category';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = 'tunzkart_cat_'.time();
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());
            $this->response([
                'status'=> 'FAILED',
                'data'=> $error
            ],400);
        }
        else {
            $data = array('upload_data' => $this->upload->data());
            $name = $this->input->post('name');
            $data = $this->category_model->addCategory($name,'image');
            if($data){
                $this->response([
                    'status' => 'OK',
                    'data' => $data,
                ],200);
            }
            else {
                $this->response([
                    'status' => 'FAILED',
                    'data' => 'Something went wrong'
                ],400);
            }
        }

        
		
	}
}