<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {
    
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function imageupload_post()
	{	

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
      
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

                // $this->load->view('upload_form', $error);
                $this->response([
                    'status'=> 'error',
                    'data'=> $error
                ],200);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                // $this->load->view('upload_success', $data);
                $this->response([
                    'status'=> 'ok',
                    'data'=> 'done'
                ],200);
        }

		
	}
}