<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userinfo_model extends CI_Model {

    public $username;
    public $email;
    public $phone;
    public $qq;
    public $wechat;
    public $ipaddress;

    public function get_last_ten_entries()
    {
            $query = $this->db->get('user_info', 10);
            return $query->result();
    }

    public function insert_ld($data)
    {
        $this->username    = $data['username']; // please read the below note
        $this->email  = $data['email'];
        $this->phone  = $data['phone'];
        $this->qq  = $data['qq'];
        $this->wechat  = $data['wechat'];
        $this->ipaddress  = $data['ipaddress'];
        return $this->db->insert('user_info', $this);
    }

    public function check_phone($phone) {
        $sql = "select username from user_info where phone = ?";
        if ($this->db->query($sql, array($phone))) {
            return true;
        }
        return false;
    }

    public function phone_exist($phone) {
        $sql = "select username from user_info where phone = ?";
        if ($this->db->query($sql, array($phone))) {
            return false;
        }
        return true;
    }

    public function check_threeip($ip) {
        $query = $this->db->query("SELECT count(*) as nc FROM user_info where ipaddress = ?", array($address));
        $result = $query->result_array();  
        if ($result[0]['nc'] > 3) {
            return true;
        }
        return false;
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}