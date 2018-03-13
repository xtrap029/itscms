<?php

class homemodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getGospels(){
   		return $this->db->query("SELECT * FROM gospels")->result();
    }

    function getGospel($id){
    	return $this->db->query("SELECT * FROM gospels WHERE id = '".$id."'")->row();
    }

    function addGospel($title,$content){
    	return $this->db->query("INSERT INTO gospels(title,content) VALUES('".$title."','".$content."')");
    }

    function updateGospel($id,$title,$content){
    	return $this->db->query("UPDATE gospels SET title = '".$title."' , content = '".$content."' WHERE id = '".$id."'");
    }

    function deleteGospel($id){
    	return $this->db->query("DELETE FROM gospels WHERE id = '".$id."'");
    }

    function login($username,$password){
    	return $this->db->query("SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'")->row();
    }
}

?>