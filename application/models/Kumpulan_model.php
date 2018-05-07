<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kumpulan_model extends CI_Model
{

    public $table = 'tbl_kumpulan';
    public $id = 'id';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    } 
    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function paging_data($num, $offset)
    {
      $this->db->order_by($this->id, $this->order);
      $data = $this->db->get('tbl_kumpulan', $num, $offset);
      return $data->result();
  }
  function update($id, $data)
  {
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
}

function insert($data)
  {
    $this->db->insert($this->table, $data);
}

    // delete data
function delete($id)
{
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
}


}
