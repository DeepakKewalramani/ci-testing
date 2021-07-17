<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First_model extends CI_Model {

  function getUsers(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('users');
    $response = $q->result_array();

    return $response;
  }
  function create_user($data){
    $insert=$this->db->insert('users',$data);
    return $insert;
  }
  function check_username($username){
    //$this->db->count_all_results('users');
    $this->db->like('USERNAME',$username);
    $this->db->from('users');
    $qry = $this->db->count_all_results();
    return $qry;
  }
  function check_user($data){
    $qry = $this->db->get_where('users',$data)->row();
    return $qry;
  }
  function update_user($data){
  $this->db->where('ID',$data['ID']);
  $qry=$this->db->update('users',$data);
    return $qry;
  }
  function delete($user_id){
    $this->db->where('ID',$user_id);
  $qry = $this->db->delete('users');
return $qry;
  }

}