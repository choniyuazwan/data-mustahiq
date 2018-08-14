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
            <form action="<?=base_url().'user/file_data';?>" method="post" class="form-horizontal" enctype="multipart/form-data">

              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>

                  <div class="col-sm-9">
                    <?php echo form_error('nik', '<span style="color:red;">', '</span>'); ?>
                    <input type="text" name="nik" class="form-control" value="<?= set_value('nik'); ?>"  id="inputEmail3" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>"  id="inputEmail3" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Program</label>
                  <div class="col-sm-9">

                    <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                      <label>
                        <input type="checkbox" name="jenisprogram[]" value="Bogor Sehat" <?php echo set_checkbox('jenisprogram[]', 'Bogor Sehat'); ?> >Bogor Sehat
                      </label>
                    </div>

                    <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                      <label>
                        <input type="checkbox" name="jenisprogram[]" value="Bogor Cerdas" <?php echo set_checkbox('jenisprogram[]', 'Bogor Cerdas'); ?> >Bogor Cerdas
                      </label>
                    </div>

                    <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                      <label>
                        <input type="checkbox" name="jenisprogram[]" value="Bogor Peduli" <?php echo set_checkbox('jenisprogram[]', 'Bogor Peduli'); ?> >Bogor Peduli
                      </label>
                    </div>

                    <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                      <label>
                        <input type="checkbox" name="jenisprogram[]" value="Bogor Berdakwah" <?php echo set_checkbox('jenisprogram[]', 'Bogor Berdakwah'); ?> >Bogor Berdakwah
                      </label>
                    </div>

                    <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                      <label>
                        <input type="checkbox" name="jenisprogram[]" value="Bogor Berkah" <?php echo set_checkbox('jenisprogram[]', 'Bogor Berkah'); ?> >Bogor Berkah
                      </label>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  
                  <div class="radio col-sm-9">
                    <label>
                      <input type="radio" name="jeniskelamin" value="Laki-laki" <?php echo  set_radio('jeniskelamin', 'Laki-laki', TRUE); ?> >Laki-laki &emsp;
                    </label>
                    <label>
                      <input type="radio" name="jeniskelamin" value="Perempuan" <?php echo  set_radio('jeniskelamin', 'Perempuan'); ?> >Perempuan
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-9">
                    <input type="text" name="tempatlahir" class="form-control" value="<?= set_value('tempatlahir'); ?>"  id="inputEmail3" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-9 date">
                    <input type="text" name="tanggallahir" class="form-control" value="<?= set_value('tanggallahir'); ?>"  data-toggle="datepicker" id="datepicker">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>

                  <div class="col-sm-9">
                      <select id="kecamatan" name="kecamatan" class="form-control">
                        <option value="Bogor-Tengah" <?php echo  set_select('kecamatan', 'Bogor-Tengah');?> >Bogor Tengah</option>
                        <option value="Bogor-Utara" <?php echo  set_select('kecamatan', 'Bogor-Utara');?> >Bogor Utara</option>
                        <option value="Bogor-Timur" <?php echo  set_select('kecamatan', 'Bogor-Timur');?> >Bogor Timur</option>
                        <option value="Bogor-Selatan" <?php echo  set_select('kecamatan', 'Bogor-Selatan');?> >Bogor Selatan</option>
                        <option value="Bogor-Barat" <?php echo  set_select('kecamatan', 'Bogor-Barat');?> >Bogor Barat</option>
                        <option value="Tanah-Sareal" <?php echo  set_select('kecamatan', 'Tanah-Sareal');?> >Tanah Sareal</option>
                      </select>
                  </div>
                
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kelurahan</label>

                  <div class="col-sm-9">
                    <select id="kelurahan" name="kelurahan" class="form-control">
                      <option value="Babakan" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Babakan');?> >Babakan</option>
                      <option value="Babakan Pasar" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Babakan Pasar');?> >Babakan Pasar</option>
                      <option value="Cibogor" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Cibogor');?> >Cibogor</option>
                      <option value="Ciwaringin" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Ciwaringin');?> >Ciwaringin</option>
                      <option value="Gudang" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Gudang');?> >Gudang</option>
                      <option value="Kebon Kelapa" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Kebon Kelapa');?> >Kebon Kelapa</option>
                      <option value="Pabaton" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Pabaton');?> >Pabaton</option>
                      <option value="Paledang" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Paledang');?> >Paledang</option>
                      <option value="Panaragan" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Panaragan');?> >Panaragan</option>
                      <option value="Sempur" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Sempur');?> >Sempur</option>
                      <option value="Tegallega" data-chained="Bogor-Tengah" <?php echo  set_select('kelurahan', 'Tegallega');?> >Tegallega</option>

                      <option value="Bantarjati" data-chained="Bogor-Utara">Bantarjati</option>
                      <option value="Cibuluh" data-chained="Bogor-Utara" <?php echo  set_select('kelurahan', 'Cibuluh');?> >Cibuluh</option>
                      <option value="Ciluar" data-chained="Bogor-Utara" <?php echo  set_select('kelurahan', 'Ciluar');?> >Ciluar</option>
                      <option value="Cimahpar" data-chained="Bogor-Utara" <?php echo  set_select('kelurahan', 'Cimahpar');?> >Cimahpar</option>
                      <option value="Ciparigi" data-chained="Bogor-Utara" <?php echo  set_select('kelurahan', 'Ciparigi');?> >Ciparigi</option>
                      <option value="Kedung Halang" data-chained="Bogor-Utara" <?php echo  set_select('kelurahan', 'Kedung Halang');?> > Kedung Halang</option>
                      <option value="Tanah Baru" data-chained="Bogor-Utara" <?php echo  set_select('kelurahan', 'Tanah Baru');?> >Tanah Baru</option>
                      <option value="Tegal Gundil" data-chained="Bogor-Utara" <?php echo  set_select('kelurahan', 'Tegal Gundil');?> >Tegal Gundil</option>

                      <option value="Baranangsiang" data-chained="Bogor-Timur" <?php echo  set_select('kelurahan', 'Baranangsiang');?> >Baranangsiang</option>
                      <option value="Katulampa" data-chained="Bogor-Timur" <?php echo  set_select('kelurahan', 'Katulampa');?> >Katulampa</option>
                      <option value="Sindangrasa" data-chained="Bogor-Timur" <?php echo  set_select('kelurahan', 'Sindangrasa');?> >Sindangrasa</option>
                      <option value="Sindangsari" data-chained="Bogor-Timur" <?php echo  set_select('kelurahan', 'Sindangsari');?> >Sindangsari</option>
                      <option value="Sukasari" data-chained="Bogor-Timur" <?php echo  set_select('kelurahan', 'Sukasari');?> >Sukasari</option>
                      <option value="Tajur" data-chained="Bogor-Timur" <?php echo  set_select('kelurahan', 'Tajur');?> >Tajur</option>

                      <option value="Batutulis" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Batutulis');?> >Batutulis</option>
                      <option value="Bojongkerta" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Bojongkerta');?> >Bojongkerta</option>
                      <option value="Bondongan" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Bondongan');?> >Bondongan</option>
                      <option value="Cikaret" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Cikaret');?> >Cikaret</option>
                      <option value="Cipaku" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Cipaku');?> >Cipaku</option>
                      <option value="Empang" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Empang');?> >Empang</option>
                      <option value="Ganteng" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Ganteng');?> >Ganteng</option>
                      <option value="Harjasari" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Harjasari');?> >Harjasari</option>
                      <option value="Kertamaya" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Kertamaya');?> >Kertamaya</option>
                      <option value="Lawang Gintung" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Lawang Gintung'); ?> >Lawang Gintung</option>
                      <option value="Muarasari" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Muarasari'); ?> >Muarasari</option>
                      <option value="Mulyaharja" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Mulyaharja'); ?> >Mulyaharja</option>
                      <option value="Pakuan" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Pakuan'); ?> >Pakuan</option>
                      <option value="Pamoyanan" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Pamoyanan'); ?> >Pamoyanan</option>
                      <option value="Rancamaya" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Rancamaya'); ?> >Rancamaya</option>
                      <option value="Ranggamekar" data-chained="Bogor-Selatan" <?php echo  set_select('kelurahan', 'Ranggamekar'); ?> >Ranggamekar</option>

                      <option value="Balumbang Jaya" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Balumbang Jaya'); ?> >Balumbang Jaya</option>
                      <option value="Bubulak" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Bubulak'); ?> >Bubulak</option>
                      <option value="Cilendek Barat" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Cilendek Barat'); ?> >Cilendek Barat</option>
                      <option value="Cilendek Timur" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Cilendek Timur'); ?> >Cilendek Timur</option>
                      <option value="Curuk" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Curuk'); ?> >Curuk</option>
                      <option value="Curug Mekar" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Curug Mekar'); ?> >Curug Mekar</option>
                      <option value="Gunung Batu" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Gunung Batu'); ?> >Gunung Batu</option>
                      <option value="Loji" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Loji'); ?> >Loji</option>
                      <option value="Margajaya" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Margajaya'); ?> >Margajaya</option>
                      <option value="Menteng" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Menteng'); ?> >Menteng</option>
                      <option value="Pasir Jaya" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Pasir Jaya'); ?> >Pasir Jaya</option>
                      <option value="Pasir Kuda" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Pasir Kuda'); ?> >Pasir Kuda</option>
                      <option value="Pasir Mulya" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Pasir Mulya'); ?> >Pasir Mulya</option>
                      <option value="Semplak" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Semplak'); ?> >Semplak</option>
                      <option value="Sindang Barang" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Sindang Barang'); ?> >Sindang Barang</option>
                      <option value="Situ" data-chained="Bogor-Barat" <?php echo  set_select('kelurahan', 'Situ'); ?> >Situ</option>

                      <option value="Cibadak" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Cibadak'); ?> >Cibadak</option>
                      <option value="Kayumanis" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Kayumanis'); ?> >Kayumanis</option>
                      <option value="Kebon Pedes" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Kebon Pedes'); ?> >Kebon Pedes</option>
                      <option value="Kedung Badak" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Kedung Badak'); ?> >Kedung Badak</option>
                      <option value="Kedung Jaya" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Kedung Jaya'); ?> >Kedung Jaya</option>
                      <option value="Kedug Waringin" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Kedug Waringin'); ?> >Kedug Waringin</option>
                      <option value="Kencana" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Kencana'); ?> >Kencana</option>
                      <option value="Mekarwangi" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Mekarwangi'); ?> >Mekarwangi</option>
                      <option value="Sukadamai" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Sukadamai'); ?> >Sukadamai</option>
                      <option value="Sukaresmi" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Sukaresmi'); ?> >Sukaresmi</option>
                      <option value="Tanah Sareal" data-chained="Tanah-Sareal" <?php echo  set_select('kelurahan', 'Tanah Sareal'); ?> >Tanah Sareal</option>

                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-9">
                    <input type="text" name="alamat" class="form-control" value="<?= set_value('alamat'); ?>"  id="inputEmail3" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Foto Wajah</label>

                  <div class="col-sm-9">
                    <input type="file" name="fotowajah" class="form-control" id="fotowajah">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Foto Rumah</label>

                  <div class="col-sm-9">
                    <input type="file" name="fotorumah" class="form-control" id="fotorumah">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-9">
                    <textarea name="keterangan" class="form-control" rows="3"><?= set_value('keterangan'); ?></textarea>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-sm-offset-5 col-xs-offset-4">
                  <a href="<?=base_url();?>" class="btn btn-success">Batal</a>
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