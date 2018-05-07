<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Renungan_model extends CI_Model {
	public $table = 'tbl_renungan';
	public $id = 'id';
	public $slug_renungan = 'slug_renungan';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
	} 

	function paging_data($num, $offset)
    {
      $this->db->order_by('id', 'DESC');
       $data = $this->db->get($this->table, $num, $offset);
       return $data->result();
   }

	function get_allLimit5()
    {
		$this->db->order_by($this->id, "RANDOM()");
		$this->db->limit(7);
        return $this->db->get($this->table)->result();
	} 
	
	function get_by_id($id,$slug)
    {
        $this->db->where($this->id, $id);
        $this->db->where($this->slug_renungan, $slug);
        return $this->db->get($this->table)->row();
    }

	public function insert_renungan($data)
	{
        $this->db->insert($this->table, $data);
	}
	
}
