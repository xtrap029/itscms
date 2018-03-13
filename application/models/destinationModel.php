<?php

class destinationmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function list(){
   		return $this->db->query("SELECT * FROM icms_destination WHERE status = 'A' ORDER BY status, id")->result();
    }

    function get($id){
   		return $this->db->query("SELECT * FROM icms_destination WHERE status = 'A' and id = '".$id."'")->row();
    }

    function exists($code, $id = ''){
        $filter = '';
        
        if($id != ''){
            $filter = " and id != '".$id."'";
        }
        return $this->db->query("SELECT * FROM icms_destination WHERE status = 'A' and code = '".$code."' ".$filter)->row();
    }

    function add($code, $description){
    	return $this->db->query("INSERT INTO icms_destination(code, description) VALUES('".$code."','".$description."')");
    }

    function update($id, $code, $description){
    	return $this->db->query("UPDATE icms_destination SET code = '".$code."' , description = '".$description."' WHERE id = '".$id."'");
    }

    function delete($id){
    	return $this->db->query("UPDATE icms_destination SET status = 'i' WHERE id = '".$id."'");
    }
}

?>