<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category_model extends CI_Model {

  public $variable;

  public function __construct()
  {
    parent::__construct();
  }

	public function insertCategory($name)
	{
		$data = array(
			'name' => $name
		);
		$this->db->insert('categories',$data);
		return $this->db->insert_id();
	}

	public function getCategories()
  {
    $this->db->select('*');
    $query = $this->db->get('categories');
    $categories = $query->result_array();
    return $categories;
  }

	public function getCategoryByID($id)
  {
    $this->db->select('*');
    $this->db->where('id',$id);
    $query = $this->db->get('categories');
    $category = $query->result_array();
    return $category;
  }

	public function updateCategoryByID($id,$name)
  {
    $data = array(
      'id' => $id,
      'name' => $name
    );
    $this->db->where('id',$id);
    return $this->db->update('categories',$data);
  }

	public function removeCategory($id)
  {
    $this->db->where('id',$id);
    return $this->db->delete('categories');
  }

	// ==========================  insert by modal =======================

	public function get_Categories()
	{
		$query = $this->db->get('categories');
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}

	public function insert_entry($data)
	{
		return $this->db->insert('categories',$data);
	}

	public function delete_entry($id)
	{
		return $this->db->delete('categories',array('id' => $id));
	}

	public function edit_entry($id)
	{
		$this->db->select('*');
		$this->db->from("categories");
		$this->db->where('id',$id);
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}

	public function update_entry($data)
	{
		return $this->db->update('categories',$data, array('id' => $data['id']));
	}


	

}
