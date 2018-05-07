<?php
class Upload_model extends CI_Model
{

	function get_ramdom_foto20()
	{
		$this->db->order_by('id', 'RANDOM');
		$this->db->limit(20);
		$query = $this->db->get('tbl_gallery');
		return $query->result();

	}
	function upload_image($nama_foto,$nama_album,$keterangan){
		$data = array(
			'nama_foto' => $nama_foto,
			'nama_album' => $nama_album, 
			'keterangan' => $keterangan, 
		);
		$result=$this->db->insert('tbl_gallery',$data);
		return $result;
	}

	public function paging_data($num, $offset)
    {
      $this->db->order_by('id', 'DESC');
       $data = $this->db->get('tbl_gallery', $num, $offset);
       return $data->result();
   }

	function get_all_images()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tbl_gallery')->result();
	}

	function get_all_nama_album()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_album')->result();
	}
	
	function get_all_by_album($album)
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('nama_album', $album);
		return $this->db->get('tbl_gallery')->result();
	}
	function get_by_id($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_gallery')->result();
	}

	function get_nama_album()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_album')->result();
	}

	public function Delete_gallery($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('tbl_gallery');
	}

	function upload_slider($nama_slide_show,$pesan,$tanggal_create){
		$data = array(
			'nama_slide_show' => $nama_slide_show,
			'pesan' => $pesan, 
			'tanggal_create' => $tanggal_create, 
		);
		$result=$this->db->insert('tbl_slideShow',$data);
		return $result;
	}

	function get_all_slide_show()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tbl_slideShow')->result();
	}
}