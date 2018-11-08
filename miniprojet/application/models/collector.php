<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Collector extends CI_Model{
    function __construct() {
        $this->userTbl = '_collector';
    }
    /*
     * get rows from the users table
     */
    function getRows($params = array()){

        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $result=$this->db->where($key,$value);
            }
        }else{
			$query = $this->db->get('_collector');
			$result = $query->result();
		}
        
        //return fetched data
        return $result;
    }
    
    /*
     * Insert user information
     */
    public function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

}
