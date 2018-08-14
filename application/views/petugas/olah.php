  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Olah Data
        <small>Rangkuman</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-body">
              <div class="form-group">
                <!-- <div class="col-xs-offset-5 col-sm-offset-0"> -->
                <div>
                  <a href="<?=base_url().'petugas/add';?>" class="btn btn-success">Tambah Petugas</a>
                </div>
              </div>

						  <table id="example2" class="table table-bordered">
								<thead>
								  <tr>
    							  <th>Aksi</th>
    					      <th>Username</th>
    					      <th>Password</th>
                    <th>Status</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach ($picture_list as $pic): ?>
								  <tr>
								  <td>
<?php 
  if($pic->username != "admin" || $pic->password != "admin") {
?>
                    <a href="<?= base_url(). 'petugas/delete/' .$pic->id; ?>" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></a>
                    <a href="<?= base_url(). 'petugas/update/' .$pic->id; ?>" class="btn btn-warning btn-xs glyphicon glyphicon-pencil"></a>
<?php
  }
?>

                  </td>
                    <td><?=$pic->username;?></td>
                    <td><?=$pic->password;?></td>
                    <td><?=$pic->status;?></td>
								  </tr>
								<?php endforeach ?>
								</tbody>

					      <tfoot>
					      <tr>
                  <td>...............</td>
                  <td></td>
                  <td></td>
                  <td></td>
					      </tr>
					      </tfoot>
						  </table>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
