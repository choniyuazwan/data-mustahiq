<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mustahiq</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  

  <!-- DataTables -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href=" <?php echo base_url(). "assets" ?> /fonts/fonts.googleapis.comcssfamily=Source+Sans+Pro300,400,600,700,300italic,400italic,600italic.css">
  
</head>

<body>
  <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="container">
      <!-- Main content -->

            <div class="page-header">
              <h1 class="text-center">Data Mustahiq Kota Bogor</h1>
            </div>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Masuk</h3>
                </div>

                <?php
                  if(isset($_POST['masuk'])) {
                    $u = $this->input->post('usr');
                    $p = $this->input->post('pwd');
                    $this->db_model->getLoginData($u,$p);
                  }
                ?>
                <form class="form-horizontal" method="post" action="">
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="usr" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="pwd" placeholder="">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" name="masuk" class="btn btn-primary col-sm-offset-2">Masuk</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
            </div>
            </div>
    </div>





  </div>
</body>
</html>