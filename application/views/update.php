  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Olah Data
        <small>Edit Data</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box">
            <div class="form-group" style="color:red">
              <label for="inputEmail3" class="col-sm-12 control-label"><?php echo validation_errors(); ?><?php if(isset($error)){print $error;}?></label>
            </div>

            <?php foreach ($picture_list as $pic): ?>
              <form action="<?=base_url().'upload/action_update/'.$pic->id;?>" method="post" class="form-horizontal" enctype="multipart/form-data">

              <div class="box-body">

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>

                    <div class="col-sm-9">
                      <input type="text" name="nik" class="form-control" disabled value="<?= $pic->nik ?>"  id="inputEmail3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-9">
                      <input type="text" name="nama" class="form-control" value="<?php echo $pic->nama ?>"  id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Program</label>
                    <div class="col-sm-9">
                      <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                        <label>
                          <input type="checkbox" name="jenisprogram[]" value="Bogor Cerdas" <?php if (preg_match('/(Bogor Cerdas)/', $pic->jenisprogram)) {echo " checked ";}  ?> >Bogor Cerdas
                        </label>
                      </div>

                      <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                        <label>
                          <input type="checkbox" name="jenisprogram[]" value="Bogor Sehat" <?php if (preg_match('/(Bogor Sehat)/', $pic->jenisprogram)) {echo " checked ";} ?> >Bogor Sehat
                        </label>
                      </div>

                      <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                        <label>
                          <input type="checkbox" name="jenisprogram[]" value="Bogor Sejahtera" <?php if (preg_match('/(Bogor Sejahtera)/', $pic->jenisprogram)) {echo " checked ";}  ?> >Bogor Sejahtera
                        </label>
                      </div>

                      <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                        <label>
                          <input type="checkbox" name="jenisprogram[]" value="Bogor Aman" <?php if (preg_match('/(Bogor Aman)/', $pic->jenisprogram)) {echo " checked ";}  ?> >Bogor Aman
                        </label>
                      </div>

                      <div class="checkbox col-sm-6 col-md-4 col-xl-2">
                        <label>
                          <input type="checkbox" name="jenisprogram[]" value="Bogor Bahagia" <?php if (preg_match('/(Bogor Bahagia)/', $pic->jenisprogram)) {echo " checked ";}  ?> >Bogor Bahagia
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                    
                    <div class="radio col-sm-9">
                      <label>
                        <input type="radio" name="jeniskelamin" value="Laki-laki" <?php if ($pic->jeniskelamin == "Laki-laki") {echo " checked ";} ?> >Laki-laki &emsp;
                      </label>
                      <label>
                        <input type="radio" name="jeniskelamin" value="Perempuan" <?php if ($pic->jeniskelamin == "Perempuan") {echo " checked ";} ?> >Perempuan
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir</label>

                    <div class="col-sm-9">
                      <input type="text" name="tempatlahir" class="form-control" value="<?= $pic->tempatlahir ?>"  id="inputEmail3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>

                    <div class="col-sm-9 date">
                      <input type="text" name="tanggallahir" class="form-control" value="<?= $pic->tanggallahir ?>"  data-toggle="datepicker" id="datepicker">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>

                    <div class="col-sm-9">
                        <select id="kecamatan" name="kecamatan" class="form-control">
                          <option <?php if ($pic->kecamatan == "Bogor-Tengah") {echo " selected ";} ?> value="Bogor-Tengah">Bogor-Tengah</option>
                          <option <?php if ($pic->kecamatan == "Bogor-Utara") {echo " selected ";} ?> value="Bogor-Utara">Bogor Utara</option>
                          <option <?php if ($pic->kecamatan == "Bogor-Timur") {echo " selected ";} ?> value="Bogor-Timur">Bogor Timur</option>
                          <option <?php if ($pic->kecamatan == "Bogor-Selatan") {echo " selected ";} ?> value="Bogor-Selatan">Bogor Selatan</option>
                          <option <?php if ($pic->kecamatan == "Bogor-Barat") {echo " selected ";} ?> value="Bogor-Barat">Bogor Barat</option>
                          <option <?php if ($pic->kecamatan == "Bogor-Sareal") {echo " selected ";} ?> value="Tanah-Sareal">Tanah Sareal</option>
                        </select>
                    </div>
                  
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kelurahan</label>

                    <div class="col-sm-9">
                      <select id="kelurahan" name="kelurahan" class="form-control">
                        <option <?php if ($pic->kelurahan == "Babakan") {echo " selected ";} ?> value="Babakan" data-chained="Bogor-Tengah">Babakan</option>
                        <option <?php if ($pic->kelurahan == "Babakan Pasar") {echo " selected ";} ?> value="Babakan Pasar" data-chained="Bogor-Tengah">Babakan Pasar</option>
                        <option <?php if ($pic->kelurahan == "Cibogor") {echo " selected ";} ?> value="Cibogor" data-chained="Bogor-Tengah">Cibogor</option>
                        <option <?php if ($pic->kelurahan == "Ciwaringin") {echo " selected ";} ?> value="Ciwaringin" data-chained="Bogor-Tengah">Ciwaringin</option>
                        <option <?php if ($pic->kelurahan == "Gudang") {echo " selected ";} ?> value="Gudang" data-chained="Bogor-Tengah">Gudang</option>
                        <option <?php if ($pic->kelurahan == "Kebon Kelapa") {echo " selected ";} ?> value="Kebon Kelapa" data-chained="Bogor-Tengah">Kebon Kelapa</option>
                        <option <?php if ($pic->kelurahan == "Pabaton") {echo " selected ";} ?> value="Pabaton" data-chained="Bogor-Tengah">Pabaton</option>
                        <option <?php if ($pic->kelurahan == "Paledang") {echo " selected ";} ?> value="Paledang" data-chained="Bogor-Tengah">Paledang</option>
                        <option <?php if ($pic->kelurahan == "Panaragan") {echo " selected ";} ?> value="Panaragan" data-chained="Bogor-Tengah">Panaragan</option>
                        <option <?php if ($pic->kelurahan == "Sempur") {echo " selected ";} ?> value="Sempur" data-chained="Bogor-Tengah">Sempur</option>
                        <option <?php if ($pic->kelurahan == "Tegallega") {echo " selected ";} ?> value="Tegallega" data-chained="Bogor-Tengah">Tegallega</option>

                        <option <?php if ($pic->kelurahan == "Bantarjati") {echo " selected ";} ?> value="Bantarjati" data-chained="Bogor-Utara">Bantarjati</option>
                        <option <?php if ($pic->kelurahan == "Cibuluh") {echo " selected ";} ?> value="Cibuluh" data-chained="Bogor-Utara">Cibuluh</option>
                        <option <?php if ($pic->kelurahan == "Ciluar") {echo " selected ";} ?> value="Ciluar" data-chained="Bogor-Utara">Ciluar</option>
                        <option <?php if ($pic->kelurahan == "Cimahpar") {echo " selected ";} ?> value="Cimahpar" data-chained="Bogor-Utara">Cimahpar</option>
                        <option <?php if ($pic->kelurahan == "Ciparigi") {echo " selected ";} ?> value="Ciparigi" data-chained="Bogor-Utara">Ciparigi</option>
                        <option <?php if ($pic->kelurahan == "Kedung Halang") {echo " selected ";} ?> value="Kedung Halang" data-chained="Bogor-Utara"> Kedung Halang</option>
                        <option <?php if ($pic->kelurahan == "Tanah Baru") {echo " selected ";} ?> value="Tanah Baru" data-chained="Bogor-Utara">Tanah Baru</option>
                        <option <?php if ($pic->kelurahan == "Tegal Gundil") {echo " selected ";} ?> value="Tegal Gundil" data-chained="Bogor-Utara">Tegal Gundil</option>

                        <option <?php if ($pic->kelurahan == "Baranangsiang") {echo " selected ";} ?> value="Baranangsiang" data-chained="Bogor-Timur">Baranangsiang</option>
                        <option <?php if ($pic->kelurahan == "Katulampa") {echo " selected ";} ?> value="Katulampa" data-chained="Bogor-Timur">Katulampa</option>
                        <option <?php if ($pic->kelurahan == "Sindangrasa") {echo " selected ";} ?> value="Sindangrasa" data-chained="Bogor-Timur">Sindangrasa</option>
                        <option <?php if ($pic->kelurahan == "Sindangsari") {echo " selected ";} ?> value="Sindangsari" data-chained="Bogor-Timur">Sindangsari</option>
                        <option <?php if ($pic->kelurahan == "Sukasari") {echo " selected ";} ?> value="Sukasari" data-chained="Bogor-Timur">Sukasari</option>
                        <option <?php if ($pic->kelurahan == "Tajur") {echo " selected ";} ?> value="Tajur" data-chained="Bogor-Timur">Tajur</option>

                        <option <?php if ($pic->kelurahan == "Batutulis") {echo " selected ";} ?> value="Batutulis" data-chained="Bogor-Selatan">Batutulis</option>
                        <option <?php if ($pic->kelurahan == "Bojongkerta") {echo " selected ";} ?> value="Bojongkerta" data-chained="Bogor-Selatan">Bojongkerta</option>
                        <option <?php if ($pic->kelurahan == "Bondongan") {echo " selected ";} ?> value="Bondongan" data-chained="Bogor-Selatan">Bondongan</option>
                        <option <?php if ($pic->kelurahan == "Cikaret") {echo " selected ";} ?> value="Cikaret" data-chained="Bogor-Selatan">Cikaret</option>
                        <option <?php if ($pic->kelurahan == "Cipaku") {echo " selected ";} ?> value="Cipaku" data-chained="Bogor-Selatan">Cipaku</option>
                        <option <?php if ($pic->kelurahan == "Empang") {echo " selected ";} ?> value="Empang" data-chained="Bogor-Selatan">Empang</option>
                        <option <?php if ($pic->kelurahan == "Ganteng") {echo " selected ";} ?> value="Ganteng" data-chained="Bogor-Selatan">Ganteng</option>
                        <option <?php if ($pic->kelurahan == "Harjasari") {echo " selected ";} ?> value="Harjasari" data-chained="Bogor-Selatan">Harjasari</option>
                        <option <?php if ($pic->kelurahan == "Kertamaya") {echo " selected ";} ?> value="Kertamaya" data-chained="Bogor-Selatan">Kertamaya</option>
                        <option <?php if ($pic->kelurahan == "Lawang Gintung") {echo " selected ";} ?> value="Lawang Gintung" data-chained="Bogor-Selatan">Lawang Gintung</option>
                        <option <?php if ($pic->kelurahan == "Muarasari") {echo " selected ";} ?> value="Muarasari" data-chained="Bogor-Selatan">Muarasari</option>
                        <option <?php if ($pic->kelurahan == "Mulyaharja") {echo " selected ";} ?> value="Mulyaharja" data-chained="Bogor-Selatan">Mulyaharja</option>
                        <option <?php if ($pic->kelurahan == "Pakuan") {echo " selected ";} ?> value="Pakuan" data-chained="Bogor-Selatan">Pakuan</option>
                        <option <?php if ($pic->kelurahan == "Pamoyanan") {echo " selected ";} ?> value="Pamoyanan" data-chained="Bogor-Selatan">Pamoyanan</option>
                        <option <?php if ($pic->kelurahan == "Rancamaya") {echo " selected ";} ?> value="Rancamaya" data-chained="Bogor-Selatan">Rancamaya</option>
                        <option <?php if ($pic->kelurahan == "Ranggamekar") {echo " selected ";} ?> value="Ranggamekar" data-chained="Bogor-Selatan">Ranggamekar</option>

                        <option <?php if ($pic->kelurahan == "Balumbang Jaya") {echo " selected ";} ?> value="Balumbang Jaya" data-chained="Bogor-Barat">Balumbang Jaya</option>
                        <option <?php if ($pic->kelurahan == "Bubulak") {echo " selected ";} ?> value="Bubulak" data-chained="Bogor-Barat">Bubulak</option>
                        <option <?php if ($pic->kelurahan == "Cilendek Barat") {echo " selected ";} ?> value="Cilendek Barat" data-chained="Bogor-Barat">Cilendek Barat</option>
                        <option <?php if ($pic->kelurahan == "Cilendek Timur") {echo " selected ";} ?> value="Cilendek Timur" data-chained="Bogor-Barat">Cilendek Timur</option>
                        <option <?php if ($pic->kelurahan == "Curuk") {echo " selected ";} ?> value="Curuk" data-chained="Bogor-Barat">Curuk</option>
                        <option <?php if ($pic->kelurahan == "Curug Mekar") {echo " selected ";} ?> value="Curug Mekar" data-chained="Bogor-Barat">Curug Mekar</option>
                        <option <?php if ($pic->kelurahan == "Gunung Batu") {echo " selected ";} ?> value="Gunung Batu" data-chained="Bogor-Barat">Gunung Batu</option>
                        <option <?php if ($pic->kelurahan == "Loji") {echo " selected ";} ?> value="Loji" data-chained="Bogor-Barat">Loji</option>
                        <option <?php if ($pic->kelurahan == "Margajaya") {echo " selected ";} ?> value="Margajaya" data-chained="Bogor-Barat">Margajaya</option>
                        <option <?php if ($pic->kelurahan == "Menteng") {echo " selected ";} ?> value="Menteng" data-chained="Bogor-Barat">Menteng</option>
                        <option <?php if ($pic->kelurahan == "Pasir Jaya") {echo " selected ";} ?> value="Pasir Jaya" data-chained="Bogor-Barat">Pasir Jaya</option>
                        <option <?php if ($pic->kelurahan == "Pasir Kuda") {echo " selected ";} ?> value="Pasir Kuda" data-chained="Bogor-Barat">Pasir Kuda</option>
                        <option <?php if ($pic->kelurahan == "Pasir Mulya") {echo " selected ";} ?> value="Pasir Mulya" data-chained="Bogor-Barat">Pasir Mulya</option>
                        <option <?php if ($pic->kelurahan == "Semplak") {echo " selected ";} ?> value="Semplak" data-chained="Bogor-Barat">Semplak</option>
                        <option <?php if ($pic->kelurahan == "Sindang Barang") {echo " selected ";} ?> value="Sindang Barang" data-chained="Bogor-Barat">Sindang Barang</option>
                        <option <?php if ($pic->kelurahan == "Situ") {echo " selected ";} ?> value="Situ" data-chained="Bogor-Barat">Situ</option>

                        <option <?php if ($pic->kelurahan == "Cibadak") {echo " selected ";} ?> value="Cibadak" data-chained="Tanah-Sareal">Cibadak</option>
                        <option <?php if ($pic->kelurahan == "Kayumanis") {echo " selected ";} ?> value="Kayumanis" data-chained="Tanah-Sareal">Kayumanis</option>
                        <option <?php if ($pic->kelurahan == "Kebon Pedes") {echo " selected ";} ?> value="Kebon Pedes" data-chained="Tanah-Sareal">Kebon Pedes</option>
                        <option <?php if ($pic->kelurahan == "Kedung Badak") {echo " selected ";} ?> value="Kedung Badak" data-chained="Tanah-Sareal">Kedung Badak</option>
                        <option <?php if ($pic->kelurahan == "Kedung Jaya") {echo " selected ";} ?> value="Kedung Jaya" data-chained="Tanah-Sareal">Kedung Jaya</option>
                        <option <?php if ($pic->kelurahan == "Kedug Waringin") {echo " selected ";} ?> value="Kedug Waringin" data-chained="Tanah-Sareal">Kedug Waringin</option>
                        <option <?php if ($pic->kelurahan == "Kencana") {echo " selected ";} ?> value="Kencana" data-chained="Tanah-Sareal">Kencana</option>
                        <option <?php if ($pic->kelurahan == "Mekarwangi") {echo " selected ";} ?> value="Mekarwangi" data-chained="Tanah-Sareal">Mekarwangi</option>
                        <option <?php if ($pic->kelurahan == "Sukadamai") {echo " selected ";} ?> value="Sukadamai" data-chained="Tanah-Sareal">Sukadamai</option>
                        <option <?php if ($pic->kelurahan == "Sukaresmi") {echo " selected ";} ?> value="Sukaresmi" data-chained="Tanah-Sareal">Sukaresmi</option>
                        <option <?php if ($pic->kelurahan == "Tanah Sareal") {echo " selected ";} ?> value="Tanah Sareal" data-chained="Tanah-Sareal">Tanah Sareal</option>

                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-9">
                      <input type="text" name="alamat" class="form-control" value="<?= $pic->alamat ?>"  id="inputEmail3" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-xs-12 control-label">Foto Wajah</label>
                    <div class="col-lg-4 col-sm-4 col-xs-4">
                      <a href="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" class="img-responsive"></a>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                      <input type="file" name="fotowajah" class="form-control" id="fotowajah">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-xs-12 control-label">Foto Rumah</label>
                    <div class="col-lg-4 col-sm-4 col-xs-4">
                      <a href="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" class="img-responsive"></a>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                      <input type="file" name="fotorumah" class="form-control" id="fotorumah">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-9">
                      <textarea name="keterangan" class="form-control" rows="3"><?= $pic->keterangan ?></textarea>
                    </div>
                  </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <div class="col-sm-offset-5 col-xs-offset-0">
                    <a href="<?=base_url();?>" class="btn btn-success">Batal</a>
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