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
            <form action="<?=base_url().'petugas/action_add';?>" method="post" class="form-horizontal">

              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-9">
                    <?php echo form_error('username', '<span style="color:red;">', '</span>'); ?>
                    <input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-9">
                    <?php echo form_error('password', '<span style="color:red;">', '</span>'); ?>
                    <input type="text" name="password" class="form-control" value="<?= set_value('password'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  
                  <div class="radio col-sm-9">
                    <label>
                      <input type="radio" name="status" value="user" <?php echo  set_radio('status', 'user', TRUE); ?> >User &emsp;
                    </label>
                    <label>
                      <input type="radio" name="status" value="admin" <?php echo  set_radio('status', 'admin'); ?> >Admin
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