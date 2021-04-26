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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>
  .form-style {
    padding-right: 176px;
    padding-top: 50px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px,
      rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px,
      rgba(0, 0, 0, 0.09) 0px -3px 5px;
    width: 50%;
    height: 50%;
    margin: 0 auto;
  }

  .container-box {
    background-color: #ccc;
    width: 100vw;
    height: 100vh;
  }
  </style>
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
            <a class="nav-link" style="font-size: 10px; margin-top: 5px;"
              href="<?= base_url() ?>index.php/login_form_controller/getLogout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="text-xs-center" style="background-color: #ccc;">
    <h3 class="display-6">Add New User</h3>
    <hr />
  </div>
  <div class="container-box">
    <form class="form-style" action="<?=base_url()?>./index.php/user_controller/add_user" method='post'
      enctype="multipart/form-data">

      <div class="form-group row">
        <label for="first_name" class="col-sm-4 form-control-label text-xs-right"><b>First Name</b></label>
        <div class="col-sm-8">
          <input name="first_name" required type="text" class="form-control" placeholder="Rain" id="first_name">
        </div>
      </div>

      <div class="form-group row">
        <label for="last_name" class="col-sm-4 form-control-label text-xs-right"><b>Last Name</b></label>
        <div class="col-sm-8">
          <input name="last_name" required type="text" class="form-control" placeholder="Rain" id="last_name">
        </div>
      </div>

      <div class="form-group row">
        <label for="phone_number" class="col-sm-4 form-control-label text-xs-right"><b>Phone Number</b></label>
        <div class="col-sm-8">
          <input name="phone_number" required type="number" class="form-control" placeholder="0388884256" id="phone_number">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-4 form-control-label text-xs-right"><b>Email</b></label>
        <div class="col-sm-8">
          <input name="email" type="text" required class="form-control" placeholder="abc@gmail.com" id="email">
        </div>
      </div>

      <div class="form-group row">
        <label for="user_name" class="col-sm-4 form-control-label text-xs-right"><b>User Name</b></label>
        <div class="col-sm-8">
          <input name="user_name" required type="text" class="form-control" placeholder="username" id="user_name">
        </div>
      </div>

      <div class="form-group row">
        <label for="password" class="col-sm-4 form-control-label text-xs-right"><b>Password</b></label>
        <div class="col-sm-8">
          <input name="password" required type="password" class="form-control" placeholder="********" id="password">
        </div>
      </div>

			<div class="form-group row">
        <label for="avatar" class="col-sm-4 form-control-label text-xs-right"><b>Avatar</b></label>
        <div class="col-sm-8">
          <input name="avatar" type="file" class="form-control" placeholder="Upload avatar" id="avatar">
        </div>
      </div>

      <div class="form-group row">
        <button type="submit" class="btn btn-primary" style="margin-left: 35%; margin-bottom: 45px;">Add
          New</button>
      </div>

    </form>
  </div>
</body>

</html>
