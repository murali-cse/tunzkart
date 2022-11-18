<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function addCategory($name, $image){
        $data = [
            'image' => $image,
            'name' => $name,
            'status' => 'aaactive',
            'createdat' => date("Y-m-d H:i:s"),
            'updatedat' => date("Y-m-d H:i:s"),
        ];

        return $this->db->insert('category', $data);
    }
}