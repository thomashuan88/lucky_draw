<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userinfo_model extends CI_Model {
    function getUsers() {
        $response = array();

        $this->db->select('*');
        $q = $this->db->get('user_info');
        
        return $q->result_array();
    }
}