<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class First_model extends CI_Model
{

  function getUsers()
  {

    $response = array();

    // Select record
    $this->db->select('*');
    $q = $this->db->get('users');
    $response = $q->result_array();

    return $response;
  }
  function create_user($data)
  {
    $qry = $this->db->insert('users', $data);
    return $qry;
  }
  function check_username($username, $id = 0)
  {
    $this->db->where('USERNAME', $username);
    $this->db->where('ID !=', $id);
    $this->db->from('users');
    $qry = $this->db->count_all_results();
    return $qry;
  }
  function check_user($data)
  {
    $qry = $this->db->get_where('users', $data)->row();
    return $qry;
  }
  function view_one($id)
  {
    $qry = $this->db->get_where('users', array('ID' => $id), 1)->row();
    $arr = [
      'id' => $qry->ID,
      'name' => $qry->NAME,
      'username' => $qry->USERNAME,
      'password' => $qry->PASSWORD
    ];
    return $arr;
  }
  function update_user($data)
  {
    $this->db->where('ID', $data['ID']);
    $qry = $this->db->update('users', $data);
    return $qry;
  }

  function delete($user_id=0)
  {
    if($user_id==0){
      redirect('login');
    }else{
    $this->db->where('ID', $user_id);
    $qry = $this->db->delete('users');
    return $qry;
  }}

  function upload_img($user_id,$data){
    if(isset($user_id) and isset($data)){
    $this->db->where('ID', $user_id);
    $data=['PROFILE_PATH'=>$data];
    $qry = $this->db->update('users', $data);
    return $qry;
  }else{
    redirect('login');
  }
}
}