<?php include('h.php');?>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    
        <?php include('menu_l.php');?>
      
    <div class="content-wrapper">
    <div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
  <br>
<img class="profile-user-img img-fluid img-circle" src="../m_img/5034118120221228_200720.jpg" alt="User Image">
</div>
<h3 class="profile-username text-center"><?php echo $m_name; ?></h3>
<p class="text-muted text-center">Software Engineer</p>
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Quick Example</h3>
</div>


<form>
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="form-group">
<label for="exampleInputFile">File input</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
<span class="input-group-text">Upload</span>
</div>
</div>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>

</div>
</div>
      </body>
  </html>
  <?php include('footerjs.php');?>