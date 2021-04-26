<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
		// add by modal
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('user_model');
  }
  
	// public function index()
	// {
  //   // call func getAllData from model
  //   $this->load->model('user_model');
  //   $result = $this->user_model->getAllData();
  //   $result = array("arr_result" => $result);

  //   // check session user have already loged or no
  //   if ($this->session->userdata('account_session')) {
  //     $this->load->view('user_view',$result);
  //   }else {
  //     redirect('http://localhost:8080/blog/index.php/login_form_controller');
  //   }
	// }

	public function index()
	{
		$this->load->model('user_model');
		$result = $this->user_model->getAllData();
		$result = array("arr_result" => $result);
		$this->load->view('tables-data-view',$result);

	}

	public function add_user_form()
	{
		$this->load->view('user_view');
	}


  public function add_user()
  {
    // handle upload image
    $target_dir = "Fileupload/";
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["avatar"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
   
    if ($_FILES["avatar"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    // get data by atribute name form from user view
    $first_name = $this->input->post('first_name');
    $last_name = $this->input->post('last_name');
    $phone_number = $this->input->post('phone_number');
    $email = $this->input->post('email');
    $avatar = base_url()."Fileupload/".basename($_FILES[("avatar")]["name"]);
    $user_name = $this->input->post('user_name');
		$password = md5($this->input->post('password'));

    // call model
    $this->load->model('user_model');
    $result = $this->user_model->inserDataToDB($first_name,$last_name,$phone_number,$email,$avatar,$user_name,$password);
    if($result){
      redirect("http://localhost:8080/blog/index.php/user_controller");
    }else{
      echo "fail";
    }
  }

  // call func getDataById from model
  public function update_user($id)
  {
    $this->load->model('user_model');
    $this->user_model->getDataById($id);
    $data = $this->user_model->getDataById($id);
    $data = array('data_result' => $data);
    $this->load->view('user_update_view',$data, FALSE);
  }

  // get data from at form update and pass to DB
  public function update_data_user()
  {
    // get data form view edit
    $id = $this->input->post('id');
    $first_name = $this->input->post('first_name');
    $last_name = $this->input->post('last_name');
    $phone_number = $this->input->post('phone_number');
    $email = $this->input->post('email');
    $user_name = $this->input->post('user_name');
    $password = md5($this->input->post('password'));

    
    // handle upoad file image
    $target_dir = "Fileupload/";
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["avatar"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    if ($_FILES["avatar"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
   
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
    } else {
      if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
      } else {
      }
    }

    $avatar = basename($_FILES["avatar"]["name"]);

    if($avatar) 
    {
      $avatar = base_url()."Fileupload/".basename($_FILES["avatar"]["name"]);
    }else { // se lay anh avatar2 trong input hidden
      $avatar = $this->input->post('avatar2');
    }

    // call model  
    $this->load->model('user_model');
    if($this->user_model->updateByID($id,$first_name,$last_name,$phone_number,$email,$avatar,$user_name,$password))
    {
      redirect("http://localhost:8080/blog/index.php/user_controller");
    }else{
      echo "false";
    }
  }

  // call func removeDataByID from model, pass id user want to delete
  public function delete_user($id)
  {
    $this->load->model('user_model');
    if($this->user_model->removeDataByID($id))
    {
      redirect("http://localhost:8080/blog/index.php/user_controller");
    }else{
      echo "fail";
    }
  }



	// =============================== add by modal =================================

	// public function fetch_user()
	// {
	// 	$this->load->model("user_model");
	// 	$fetch_data = $this->user_model->make_datatables();
	// 	$data = array();
	// 	foreach ($fetch_data as $row) {
	// 		$sub_array = array();
	// 		//  $sub_array[] = '<img src="'.base_url().'upload/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
	// 		$sub_array[] = '<img src="' . $row->avatar . '" class="img-thumbnail" width="100" height="50" />';
	// 		$sub_array[] = $row->first_name;
	// 		$sub_array[] = $row->last_name;
	// 		$sub_array[] = $row->phone_number;
	// 		$sub_array[] = $row->email;
	// 		$sub_array[] = $row->user_name;
	// 		$sub_array[] = '<button type="button" name="update" id="' . $row->id . '" class="btn btn-warning btn-xs">Update</button>';
	// 		$sub_array[] = '<button type="button" name="delete" id="' . $row->id . '" class="btn btn-danger btn-xs">Delete</button>';
	// 		$data[] = $sub_array;
	// 	}
	// 	$output = array(
	// 		"draw"                    =>     intval($_POST["draw"]),
	// 		"recordsTotal"          =>      $this->user_model->get_all_data(),
	// 		"recordsFiltered"     =>     $this->user_model->get_filtered_data(),
	// 		"data"                    =>     $data
	// 	);
	// 	echo json_encode($output);
	// }



	// // add
	// public function user_action()
	// {
	// 	if ($_POST["action"] == "Add") {
	// 		$insert_data = array(
	// 			'first_name'          =>     $this->input->post('first_name'),
	// 			'last_name'               =>     $this->input->post("last_name"),
	// 			'phone_number'               =>     $this->input->post("phone_number"),
	// 			'email'               =>     $this->input->post("email"),
	// 			'user_name'               =>     $this->input->post("user_name"),
	// 			'avatar'                    =>     $this->upload_image()
	// 		);
	// 		$this->load->model('user_model');
	// 		$this->user_model->insert_entry($insert_data);
	// 		echo 'Data Inserted';
	// 	}
	// }

	// public function upload_image()
	// {
	// 	if (isset($_FILES["avatar"])) {
	// 		$extension = explode('.', $_FILES['avatar']['name']);
	// 		$new_name = rand() . '.' . $extension[1];
	// 		$destination = '../../assets/images' . $new_name;
	// 		move_uploaded_file($_FILES['avatar']['tmp_name'], $destination);
	// 		return $new_name;
	// 	}
	// }  
	
	// =================================== CRUD AJAX ====================================

	// public  function fetch()
	// {
	// 	if ($this->input->is_ajax_request()) {
	// 		$users = $this->user_model->get_entry();
	// 		$data = array('responce' => 'success', 'users' => $users);
	// 		echo json_encode($data);
	// 	} else {
	// 		echo "No direct script access allowed";
	// 	}
	// }

	// public function fetch()
	// {
	// 	$users = $this->user_model->get_entry();
	// 	echo json_encode($users);
	// }

	// public function insert()
	// {
	// 	if ($this->input->is_ajax_request()) {
	// 		$this->form_validation->set_rules('first_name', 'First_Name', 'required');
	// 		$this->form_validation->set_rules('last_name', 'Last_Name', 'required');
	// 		$this->form_validation->set_rules('phone_number', 'Phone_Number', 'required');
	// 		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// 		$this->form_validation->set_rules('user_name', 'User_Name', 'required');

	// 		if ($this->form_validation->run() == FALSE) {
	// 			$data = array('res' => "error", 'message' => validation_errors());
	// 		} else {
				
	// 			$config['upload_path'] =  'Fileupload/';
	// 			// $config['upload_path'] = base_url().'/assets/images';
	// 			// $config['upload_path'] = APPPATH . '../assets/uploads/';
	// 			$config['allowed_types'] = 'gif|jpg|png';
	// 			$config['max_size']     = '100000';
	// 			$this->load->library('upload', $config);

	// 			if (!$this->upload->do_upload("avatar")) {
	// 				$data = array('res' => "error", 'message' => $this->upload->display_errors());
	// 			} else {
	// 				$ajax_data = $this->input->post();
	// 				$ajax_data['avatar'] = $this->upload->data('file_name'); // chi luu ten img
	// 				// $ajax_data['avatar'] = 'http://localhost:8080/blog/Fileupload/'.$this->upload->data('file_name');


	// 				if ($this->user_model->insert_entry($ajax_data)) {
	// 					$data = array('res' => "success", 'message' => "Data added successfully");
	// 				} else {
	// 					$data = array('res' => "error", 'message' => "Failed to add data");
	// 				}
	// 			}
	// 		}
	// 		echo json_encode($data);
	// 	} else {
	// 		echo "No direct script access allowed";
	// 	}
	// }


	// // delete
	// public function delete()
	// {
	// 	if ($this->input->is_ajax_request()) {

	// 		$delete_id = $this->input->post('delete_id');

	// 		$post = $this->user_model->single_entry($delete_id);

	// 		unlink(APPPATH . 'Fileupload/' . $post->avatar);

	// 		if ($this->user_model->delete_entry($delete_id)) {
	// 			$data = array('res' => "success", 'message' => "Data delete successfully");
	// 		} else {
	// 			$data = array('res' => "error", 'message' => "Delete query errors");
	// 		}
	// 		echo json_encode($data);
	// 	} else {
	// 		echo "No direct script access allowed";
	// 	}
	// }



	// public function edit()
	// {
	// 	if ($this->input->is_ajax_request()) {
	// 		$edit_id = $this->input->get('edit_id');
	// 		if ($post = $this->user_model->single_entry($edit_id)) {
	// 			$data = array('res' => "success", 'post' => $post);
	// 		} else {
	// 			$data = array('res' => "error", 'message' => "Failed to fetch data");
	// 		}
	// 		echo json_encode($data);
	// 	} else {
	// 		echo "No direct script access allowed";
	// 	}
	// }

	// /* -------------------------------------------------------------------------- */
	// /*                               Update Records                               */
	// /* -------------------------------------------------------------------------- */

	// public function update()
	// {
	// 	if ($this->input->is_ajax_request()) {
	// 		$this->form_validation->set_rules('first_name', 'First_Name', 'required');
	// 		$this->form_validation->set_rules('last_name', 'Last_Name', 'required');
	// 		$this->form_validation->set_rules('phone_number', 'Phone_Number', 'required');
	// 		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// 		$this->form_validation->set_rules('user_name', 'User_Name', 'required');

	// 		if ($this->form_validation->run() == FALSE) {
	// 			$data = array('res' => "error", 'message' => validation_errors());
	// 		} else {
	// 			if (isset($_FILES["edit_avatar"]["name"])) {
	// 				$config['upload_path'] =  'Fileupload/';
	// 				$config['allowed_types'] = 'gif|jpg|png';
	// 				$config['max_size']     = '100000';
	// 				$this->load->library('upload', $config);

	// 				if (!$this->upload->do_upload("edit_avatar")) {
	// 					$data = array('res' => "error", 'message' => $this->upload->display_errors());
	// 				} else {
	// 					$edit_id = $this->input->post('edit_id');
	// 					if ($post = $this->user_model->single_entry($edit_id)) {
	// 						unlink(APPPATH . 'Fileupload/' . $post->avatar);
	// 						$ajax_data['avatar'] = $this->upload->data('file_name');
	// 					}
	// 				}
	// 			}
	// 			$id = $this->input->post('edit_id');
	// 			$ajax_data['first_name'] = $this->input->post('first_name');
	// 			$ajax_data['last_name'] = $this->input->post('last_name');
	// 			$ajax_data['phone_number'] = $this->input->post('phone_number');
	// 			$ajax_data['email'] = $this->input->post('email');
	// 			$ajax_data['user_name'] = $this->input->post('user_name');
	// 			if ($this->user_model->update_entry($id, $ajax_data)) {
	// 				$data = array('res' => "success", 'message' => "Data update successfully");
	// 			} else {
	// 				$data = array('res' => "error", 'message' => "Failed to update data");
	// 			}
	// 		}
	// 		echo json_encode($data);
	// 	} else {
	// 		echo "No direct script access allowed";
	// 	}
	// }

	// =====================  CRUD AJAX OK ==============

	public function fetch()
	{
		$users = $this->user_model->get_users();
		echo json_encode($users);
	}


	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('first_name', 'First_Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last_Name', 'required');
			$this->form_validation->set_rules('phone_number', 'Phone_Number', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('user_name', 'User_Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
			// $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				$config['upload_path'] =  'Fileupload/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '100000';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload("avatar")) {
					$data = array('res' => "error", 'message' => $this->upload->display_errors());
				} else {
					$ajax_data = $this->input->post();
					$ajax_data['avatar'] = $this->upload->data('file_name');

					if ($this->user_model->insert_entry($ajax_data)) {
						$data = array('res' => "success", 'message' => "Data added successfully");
					} else {
						$data = array('res' => "error", 'message' => "Failed to add data");
					}
				}
			}
			echo json_encode($data); // 
		} else {
			echo "No direct script access allowed";
		}
	}


	// delete
	// public function delete()
	// {
	// 	if ($this->input->is_ajax_request()) {

	// 		$del_id = $this->input->post('del_id');

	// 		$post = $this->user_model->single_entry($del_id);

	// 		// unlink(APPPATH . '../assets/uploads/' . $post->avatar);
	// 		// ok  unlink(APPPATH . 'Fileupload' . $post->avatar);

	// 		unlink(APPPATH . 'Fileupload' . $post->avatar);

			

	// 		if ($this->user_model->delete_entry($del_id)) {
	// 			$data = array('res' => "success", 'message' => "Data delete successfully");
	// 		} else {
	// 			$data = array('res' => "error", 'message' => "Delete query errors");
	// 		}
	// 		echo json_encode($data);
	// 	} else {
	// 		echo "No direct script access allowed";
	// 	}
	// }

	public function delete()
	{
		if ($this->input->is_ajax_request()) {
			$del_id = $this->input->post('del_id');

			if ($this->user_model->delete_entry($del_id)) {
				$data = array('responce' => 'success');
			}else{
				$data = array('responce' => 'error');
			}
			echo json_encode($data);
		}else {
			echo "No direct script access allowed";
		}
	}




	// edit
	public function edit()
	{
		if ($this->input->is_ajax_request()) {

			$edit_id = $this->input->get('edit_id');

			if ($post = $this->user_model->single_entry($edit_id)) {
				$data = array('res' => "success", 'post' => $post);
			} else {
				$data = array('res' => "error", 'message' => "Failed to fetch data");
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	
	/* Update Records */
	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('first_name', 'First_Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last_Name', 'required');
			$this->form_validation->set_rules('phone_number', 'Phone_Number', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('user_name', 'User_Name.', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				if (isset($_FILES["edit_avatar"]["name"])) {
					$config['upload_path'] =  'Fileupload/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '100000';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload("edit_avatar")) {
						$data = array('res' => "error", 'message' => $this->upload->display_errors());
					} else {
						$edit_id = $this->input->post('edit_id');
						if ($post = $this->user_model->single_entry($edit_id)) {
							unlink('Fileupload/' . $post->avatar);
							// unlink(APPPATH . 'Fileupload' . $post->avatar);
							$ajax_data['avatar'] = $this->upload->data('file_name');
						}
					}
				}
				$id = $this->input->post('edit_id');
				$ajax_data['first_name'] = $this->input->post('first_name');
				$ajax_data['last_name'] = $this->input->post('last_name');
				$ajax_data['phone_number'] = $this->input->post('phone_number');
				$ajax_data['email'] = $this->input->post('email');
				$ajax_data['user_name'] = $this->input->post('user_name');
				if ($this->user_model->update_entry($id, $ajax_data)) {
					$data = array('res' => "success", 'message' => "Data update successfully");
				} else {
					$data = array('res' => "error", 'message' => "Failed to update data");
				}
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	
}
