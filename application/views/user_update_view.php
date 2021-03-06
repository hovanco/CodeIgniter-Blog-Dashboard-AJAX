<!DOCTYPE html>
<html lang="en">

<head>
  <title>Show List User</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- use bootstrap and css -->
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/user_update_view.css'); ?>">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
	crossorigin="anonymous" />
</head>

<body style="background-color: #ccc;">
  <nav class="navbar navbar-light bg-faded" style="background-color: cyan;">
    <div class="collapse navbar-toggleable-xs " id="exCollapsingNavbar2">
      <div class="style-navbar" style="display: flex; justify-content: space-between;">
        <ul class="navbar-nav" style="list-style-type: none;">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>index.php/post_controller">Post</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>index.php/news_controller">News</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>index.php/category_controller">Category</a>
          </li>
        </ul>

        <ul class="navbar-nav" style="list-style-type: none;">
          <li class="nav-item active">
            <a class="nav-link" href="" style="cursor: context-menu;">
              <i class="fas fa-user"></i>
              <b style="color: blue;"><?= $this->session->userdata('account_session');?></b>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>index.php/login_form_controller/getLogout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="container">
        <div class="text-xs-center">
          <h3 class="display-6">Update User</h3>
          <hr />
        </div>
        <form action="<?= base_url() ?>./index.php/user_controller/update_data_user" method='post'
          enctype="multipart/form-data"  class="form-add-user">

          <?php foreach ($data_result as $key => $value) : ?>

          <div class="form-group row">
            <label for="avatar" class="col-sm-4 form-control-label text-xs-right"><b>Avatar</b></label>
            <div class="col-sm-8">
              <img style="width: 200px; height:120px; object-fit: cover;" src="<?= $value['avatar'] ?>" alt=""
                class="ing-fluid">
              <input name="avatar2" type="text" value="<?= $value['avatar'] ?>" class="form-control" id="avatar">
              <input name="id" hidden type="text" class="form-control" value="<?= $value['id'] ?>" placeholder="1"
                id="id">
              <input name="avatar" type="file"  class="form-control" placeholder="Upload avatar" id="avatar">
            </div>
          </div>

          <div class="form-group row">
            <label for="first_name" class="col-sm-4 form-control-label text-xs-right"><b>First Name</b></label>
            <div class="col-sm-8">
              <input name="first_name" type="text" required value="<?= $value['first_name'] ?>" class="form-control"
                placeholder="Rain" id="first_name">
            </div>
          </div>

          <div class="form-group row">
            <label for="last_name" class="col-sm-4 form-control-label text-xs-right"><b>Last Name</b></label>
            <div class="col-sm-8">
              <input name="last_name" type="text" required value="<?= $value['last_name'] ?>" class="form-control"
                placeholder="Rain" id="last_name">
            </div>
          </div>

          <div class="form-group row">
            <label for="phone_number" class="col-sm-4 form-control-label text-xs-right"><b>Phone Number</b></label>
            <div class="col-sm-8">
              <input name="phone_number" type="number" required value="<?= $value['phone_number'] ?>" class="form-control"
                placeholder="0388884256" id="phone_number">
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-4 form-control-label text-xs-right"><b>Email</b></label>
            <div class="col-sm-8">
              <input name="email" type="text" required value="<?= $value['email'] ?>" class="form-control"
                placeholder="abc@gmail.com" id="email">
            </div>
          </div>

					<div class="form-group row">
            <label for="user_name" class="col-sm-4 form-control-label text-xs-right"><b>User Name</b></label>
            <div class="col-sm-8">
              <input name="user_name" type="text" required value="<?= $value['user_name'] ?>" class="form-control"
                placeholder="username" id="user_name">

								<input name="password" type="password" hidden  value="<?= $value['password'] ?>" class="form-control"
                placeholder="password" id="password">
            </div>
          </div>
          <?php endforeach ?>

          <div class="form-group row">
            <button type="submit" class="btn btn-primary" style="margin-left: 35%; margin-bottom: 45px;">Update</button>
          </div>
      </div>
    </div>
    </form>
  </div>
</body>

</html>
