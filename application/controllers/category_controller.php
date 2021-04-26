<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class category_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

		// add by modal
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation'));
		$this->load->model('category_model');

  }

  public function index()
  {
		// show categories
		$this->load->model('category_model');
    $query = $this->category_model->getCategories();
    $categories = array("categories" => $query);

		// check session user have already loged or no
		if ($this->session->userdata('account_session')) {
			// $this->load->view('category_view', $categories);
			$this->load->view('CategoryView', $categories);

		} else {
			redirect('http://localhost:8080/blog/index.php/login_form_controller');
		}
  }

	public function add_category_form()
	{
		$this->load->view('category_view');
	}

	public function addCategory()
	{
		$name = $this->input->post('name');
		$this->load->model('category_model');
    $result = $this->category_model->insertCategory($name);
    if ($result) {
			redirect("http://localhost:8080/blog/index.php/category_controller");
    } else {
      echo "fail";
    }
	}
	
	public function editCategory($id)
	{
		$this->load->model('category_model');
		$query = $this->category_model->getCategoryByID($id);
		$category_id = array('category_id' => $query);

		// check session user have already loged or no
		if ($this->session->userdata('account_session')) {
			$this->load->view('category_update_view', $category_id, false);
		} else {
			redirect('http://localhost:8080/blog/index.php/login_form_controller');
		}
	}

	public function updateCategory()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$this->load->model('category_model');
    if ($this->category_model->updateCategoryByID($id,$name)) {
      redirect("http://localhost:8080/blog/index.php/category_controller");
    } else {
      echo "false";
    }
	}

	public function deleteCategory($id)
	{
		$this->load->model('category_model');
		$result = $this->category_model->removeCategory($id);
    if ($result) {
      redirect("http://localhost:8080/blog/index.php/category_controller");
    } else {
      echo "fail";
    }
	}


// =============================== add by modal =================================

	public function insert()
	{
		if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('name','Name','required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			}else {
				$ajax_data = $this->input->post();
				if ($this->category_model->insert_entry($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Category added Successfully');
				}else {
					$data = array('responce' => 'error', 'message' => 'Failed to add');
				}
			}
			echo json_encode($data);
		}else {
			echo "No direct script access allowed";
		}
	}

	// public function fetch()
	// {
	// 	if ($this->input->is_ajax_request()) {
	// 		if ($categories = $this->category_model->get_Categories()) {
	// 			$data = array('responce' => 'success', 'categories' => $categories);
	// 		}else {
	// 			$data = array('responce' => 'error', 'message' => 'Failed to fetch data');
	// 		}
	// 		echo json_encode($data);
	// 	}else {
	// 		echo "No direct script access allowed";
	// 	}
	// }

	public function fetch()
	{
		if ($this->input->is_ajax_request()) {
			$categories = $this->category_model->get_Categories();
			$data = array('responce' => 'success', 'categories' => $categories);
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function delete()
	{
		if ($this->input->is_ajax_request()) {
			$delete_id = $this->input->post('delete_id');

			if ($this->category_model->delete_entry($delete_id)) {
				$data = array('responce' => 'success');
			}else{
				$data = array('responce' => 'error');
			}
			echo json_encode($data);
		}else {
			echo "No direct script access allowed";
		}
	}

	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($category = $this->category_model->edit_entry($edit_id)) {
				$data = array('responce' => 'success', 'category' => $category);
			}else{
				$data = array('responce' => 'error', 'message' => 'Failed to fetch data');
			}
			echo json_encode($data);
		}else {
			echo "No direct script access allowed";
		}
	}

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_name','Name','required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			}else {
				$data['id'] = $this->input->post('edit_record_id');
			  $data['name'] = $this->input->post('edit_name');
				
				if ($this->category_model->update_entry($data)) {
					$data = array('responce' => 'success', 'message' => 'Category update Successfully');
				}else {
					$data = array('responce' => 'error', 'message' => 'Failed to update');
				}
			}
			echo json_encode($data);
		}else {
			echo "No direct script access allowed";
		}
	}
	
}
