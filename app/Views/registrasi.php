
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Registrasi</title>
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.v4.css">

</head>
<body>

<br><br><br>
        <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">
            <span class="font-weight-bold text-primary">Register</span></h5></div>
            <div class="card-body">
            <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
              <form action="/Registrasi/save" method="post">
              <div class="form-group">
                  <input type="text" name="nama_lengkap" class="form-control" id="InputForEmail" placeholder="Nama Lengkap" >
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" id="InputForName" placeholder="Username" >
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" name="confpassword" class="form-control" id="InputForConfPassword" placeholder="Re-Type Password">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <div>
                <h5 class="text-center">OR</h5>
                </div>
                <a href="<?php echo base_url() ?>/Login" class="text-center">Already Have Account</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url() ?>/assets/js/bootstrap.v4/jquery.js"></script> 
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.v4/popper.js"></script> 
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.v4/bootstrap.js"></script>
</body>