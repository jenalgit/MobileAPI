<?php

class Api_model extends CI_Model {

    function __construct() {
        
    }

    public function getUser() {
        $sql="";
        $retval = $this->db->query($sql);

        return $retval->result_array();
    }

    public function save($data,$table) {
        $retval = $this->db->insert($table, $data);
        return $retval;
    }

    public function del($id,$table) {
        //array('user_id' => $id)
        return $this->db->delete($table, $id);
    }

}

?>