<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokemon_model extends CI_Model{
    function getall(){
        $query= $this->db->get('_pokemon');
        return $query->result();
    }

    function get_free_pokemon(){
        $query=$this->db->query("select * from _pokemon where pokemon_id NOT IN (SELECT pokemon_id from _collect)");
        return $query->result();
    }

    function getNbRec(){
        $query= $this->db->get('_pokemon');
        $rows=$query->num_rows();
        return $rows;
    }

    function get_identifier_by_pokemon_id($id){
        $q = "select identifier from _pokemon where pokemon_id=" .$id;
        $query=$this->db->query($q);
        return $query->row();
    }

    function display_collection(){
        $query=$this->db->query("select * from _pokemon where pokemon_id IN (SELECT pokemon_id from _collect)");
        return $query->result();
    }

    function display_collection_from($name){
        $q = "select * from _pokemon, _collect where _pokemon.pokemon_id IN (SELECT pokemon_id from _collect) AND collector_login = '" . $name . "'";
        $query=$this->db->query($q);
        return $query->result();
    }

    function get_collection_by_collector($name){
//        $q = "select * from _collect, _pokemon where _collect.pokemon_id = _pokemon.pokemon_id AND _collect.collector_login='" .$name . "'";
//        $query=$this->db->query($q);

        $this->db->select("*");
        $this->db->from('_collect');
        $this->db->from('_pokemon');
        $this->db->where('_collect.pokemon_id = _pokemon.pokemon_id' );       
        $this->db->where('_collect.collector_login', $name);
        $query = $this->db->get();
        return $query->result();
    }
}