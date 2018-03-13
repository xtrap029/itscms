<?php

class loginModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function login($username,$password){
    	return $this->db->query("SELECT * FROM icms_user WHERE username = '".$username."' AND password = '".$password."'")->row();
    }
}

?>