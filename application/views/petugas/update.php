  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Olah Data
        <small>Tambah Data</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box">

          <?php foreach ($picture_list as $pic): ?>
            <form action="<?=base_url().'petugas/action_update/'.$pic->id;?>" method="post" class="form-horizontal">

              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" disabled value="<?php echo $pic->username ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-9">
                    <?php echo form_error('password', '<span style="color:red;">', '</span>'); ?>
                    <input type="text" name="password" class="form-control" value="<?php echo $pic->password ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                  
                  <div class="radio col-sm-9">
                    <label>
                      <input type="radio" name="status" value="user" <?php if ($pic->status == "user") {echo " checked ";} ?> >User &emsp;
                    </label>
                    <label>
                      <input type="radio" name="status" value="admin" <?php if ($pic->status == "admin") {echo " checked ";} ?> >Admin
                    </label>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-sm-offset-5 col-xs-offset-4">
                  <a href="<?=base_url(). 'petugas';?>" class="btn btn-success">Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              
              </div>
              <!-- /.box-footer -->

            </form>
          <?php endforeach ?>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->