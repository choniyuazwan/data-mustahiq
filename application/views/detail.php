  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Olah Data
        <small>Detail</small>
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
              <form action="" method="" class="form-horizontal">

                <div class="box-body">

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">NIK</label>

                    <div class="col-sm-9">
                      <?= $pic->nik ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Nama</label>

                    <div class="col-sm-9">
                      <?= $pic->nama ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Jenis Program</label>
                    <div class="col-sm-9">
                      <?= $pic->jenisprogram ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Jenis Kelamin</label>

                    <div class="col-sm-9">
                      <?= $pic->jeniskelamin ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Tempat Lahir</label>

                    <div class="col-sm-9">
                      <?= $pic->tempatlahir ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Tanggal Lahir</label>

                    <div class="col-sm-9">
                      <?= $pic->tanggallahir ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Kecamatan</label>

                    <div class="col-sm-9">
                      <?= $pic->kecamatan ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Kelurahan</label>

                    <div class="col-sm-9">
                      <?= $pic->kelurahan ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Alamat</label>

                    <div class="col-sm-9">
                      <?= $pic->alamat ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-xs-12 col-sm-offset-1">Foto Wajah</label>
                    <div class="col-lg-4 col-sm-4 col-xs-4">
                      <a href="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" class="img-responsive"></a>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-xs-12 col-sm-offset-1">Foto Rumah</label>
                    <div class="col-lg-4 col-sm-4 col-xs-4">
                      <a href="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" class="img-responsive"></a>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-sm-offset-1">Keterangan</label>

                    <div class="col-sm-9">
                      <?= $pic->keterangan ?>
                    </div>
                  </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <br>
                  <div class="col-lg-offset-5 col-md-offset-4 col-sm-offset-3 col-xs-offset-0">
                    <a href="<?=base_url();?>" class="btn btn-success">Kembali</a>
                    <a href="<?= base_url(). 'upload/update/' .$pic->id; ?>"" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url(). 'upload/delete/' .$pic->id; ?>" class="btn btn-danger">Hapus</a>
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
