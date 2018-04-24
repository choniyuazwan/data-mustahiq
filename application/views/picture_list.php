
  <header class="main-header">
    <!-- Logo -->
    <a href=" <?php echo base_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <!-- <div class="col-xs-offset-5 col-sm-offset-0"> -->
                <div>
                  <a href="<?=base_url().'upload/form';?>" class="btn btn-success">Tambah Data</a>
                </div>
              </div>

              <form action="<?= base_url(). 'upload/daerah' ?>" method="post" class="form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-xs-3 col-sm-2 col-md-2 col-lg-1 control-label">Kecamatan</label>
                  <div class="col-xs-9 col-sm-10 col-md-3 col-lg-2">

                      <select id="filter_kecamatan" name="filter_kecamatan" class="form-control">
                        <option value="">Semua</option>
                        <option <?php if ($filter_kecamatan == "Bogor-Tengah") {echo " selected ";} ?> value="Bogor-Tengah">Bogor-Tengah</option>
                        <option <?php if ($filter_kecamatan == "Bogor-Utara") {echo " selected ";} ?> value="Bogor-Utara">Bogor Utara</option>
                        <option <?php if ($filter_kecamatan == "Bogor-Timur") {echo " selected ";} ?> value="Bogor-Timur">Bogor Timur</option>
                        <option <?php if ($filter_kecamatan == "Bogor-Selatan") {echo " selected ";} ?> value="Bogor-Selatan">Bogor Selatan</option>
                        <option <?php if ($filter_kecamatan == "Bogor-Barat") {echo " selected ";} ?> value="Bogor-Barat">Bogor Barat</option>
                        <option <?php if ($filter_kecamatan == "Bogor-Sareal") {echo " selected ";} ?> value="Tanah-Sareal">Tanah Sareal</option>
                      </select>
                  </div>

                  <label for="inputEmail3" class="col-xs-3 col-sm-2 col-md-2 col-lg-1 control-label">Kelurahan</label>

                  <div class="col-xs-9 col-sm-10 col-md-4 col-lg-3">
                    <select id="filter_kelurahan" name="filter_kelurahan" class="form-control">
                      <option value="" data-chained="Bogor-Tengah Bogor-Utara Bogor-Timur Bogor-Selatan Bogor-Barat Tanah-Sareal">Semua</option>

                      <option <?php if ($filter_kelurahan == "Babakan") {echo " selected ";} ?> value="Babakan" data-chained="Bogor-Tengah">Babakan</option>
                      <option <?php if ($filter_kelurahan == "Babakan Pasar") {echo " selected ";} ?> value="Babakan Pasar" data-chained="Bogor-Tengah">Babakan Pasar</option>
                      <option <?php if ($filter_kelurahan == "Cibogor") {echo " selected ";} ?> value="Cibogor" data-chained="Bogor-Tengah">Cibogor</option>
                      <option <?php if ($filter_kelurahan == "Ciwaringin") {echo " selected ";} ?> value="Ciwaringin" data-chained="Bogor-Tengah">Ciwaringin</option>
                      <option <?php if ($filter_kelurahan == "Gudang") {echo " selected ";} ?> value="Gudang" data-chained="Bogor-Tengah">Gudang</option>
                      <option <?php if ($filter_kelurahan == "Kebon Kelapa") {echo " selected ";} ?> value="Kebon Kelapa" data-chained="Bogor-Tengah">Kebon Kelapa</option>
                      <option <?php if ($filter_kelurahan == "Pabaton") {echo " selected ";} ?> value="Pabaton" data-chained="Bogor-Tengah">Pabaton</option>
                      <option <?php if ($filter_kelurahan == "Paledang") {echo " selected ";} ?> value="Paledang" data-chained="Bogor-Tengah">Paledang</option>
                      <option <?php if ($filter_kelurahan == "Panaragan") {echo " selected ";} ?> value="Panaragan" data-chained="Bogor-Tengah">Panaragan</option>
                      <option <?php if ($filter_kelurahan == "Sempur") {echo " selected ";} ?> value="Sempur" data-chained="Bogor-Tengah">Sempur</option>
                      <option <?php if ($filter_kelurahan == "Tegallega") {echo " selected ";} ?> value="Tegallega" data-chained="Bogor-Tengah">Tegallega</option>

                      <option <?php if ($filter_kelurahan == "Bantarjati") {echo " selected ";} ?> value="Bantarjati" data-chained="Bogor-Utara">Bantarjati</option>
                      <option <?php if ($filter_kelurahan == "Cibuluh") {echo " selected ";} ?> value="Cibuluh" data-chained="Bogor-Utara">Cibuluh</option>
                      <option <?php if ($filter_kelurahan == "Ciluar") {echo " selected ";} ?> value="Ciluar" data-chained="Bogor-Utara">Ciluar</option>
                      <option <?php if ($filter_kelurahan == "Cimahpar") {echo " selected ";} ?> value="Cimahpar" data-chained="Bogor-Utara">Cimahpar</option>
                      <option <?php if ($filter_kelurahan == "Ciparigi") {echo " selected ";} ?> value="Ciparigi" data-chained="Bogor-Utara">Ciparigi</option>
                      <option <?php if ($filter_kelurahan == "Kedung Halang") {echo " selected ";} ?> value="Kedung Halang" data-chained="Bogor-Utara"> Kedung Halang</option>
                      <option <?php if ($filter_kelurahan == "Tanah Baru") {echo " selected ";} ?> value="Tanah Baru" data-chained="Bogor-Utara">Tanah Baru</option>
                      <option <?php if ($filter_kelurahan == "Tegal Gundil") {echo " selected ";} ?> value="Tegal Gundil" data-chained="Bogor-Utara">Tegal Gundil</option>

                      <option <?php if ($filter_kelurahan == "Baranangsiang") {echo " selected ";} ?> value="Baranangsiang" data-chained="Bogor-Timur">Baranangsiang</option>
                      <option <?php if ($filter_kelurahan == "Katulampa") {echo " selected ";} ?> value="Katulampa" data-chained="Bogor-Timur">Katulampa</option>
                      <option <?php if ($filter_kelurahan == "Sindangrasa") {echo " selected ";} ?> value="Sindangrasa" data-chained="Bogor-Timur">Sindangrasa</option>
                      <option <?php if ($filter_kelurahan == "Sindangsari") {echo " selected ";} ?> value="Sindangsari" data-chained="Bogor-Timur">Sindangsari</option>
                      <option <?php if ($filter_kelurahan == "Sukasari") {echo " selected ";} ?> value="Sukasari" data-chained="Bogor-Timur">Sukasari</option>
                      <option <?php if ($filter_kelurahan == "Tajur") {echo " selected ";} ?> value="Tajur" data-chained="Bogor-Timur">Tajur</option>

                      <option <?php if ($filter_kelurahan == "Batutulis") {echo " selected ";} ?> value="Batutulis" data-chained="Bogor-Selatan">Batutulis</option>
                      <option <?php if ($filter_kelurahan == "Bojongkerta") {echo " selected ";} ?> value="Bojongkerta" data-chained="Bogor-Selatan">Bojongkerta</option>
                      <option <?php if ($filter_kelurahan == "Bondongan") {echo " selected ";} ?> value="Bondongan" data-chained="Bogor-Selatan">Bondongan</option>
                      <option <?php if ($filter_kelurahan == "Cikaret") {echo " selected ";} ?> value="Cikaret" data-chained="Bogor-Selatan">Cikaret</option>
                      <option <?php if ($filter_kelurahan == "Cipaku") {echo " selected ";} ?> value="Cipaku" data-chained="Bogor-Selatan">Cipaku</option>
                      <option <?php if ($filter_kelurahan == "Empang") {echo " selected ";} ?> value="Empang" data-chained="Bogor-Selatan">Empang</option>
                      <option <?php if ($filter_kelurahan == "Ganteng") {echo " selected ";} ?> value="Ganteng" data-chained="Bogor-Selatan">Ganteng</option>
                      <option <?php if ($filter_kelurahan == "Harjasari") {echo " selected ";} ?> value="Harjasari" data-chained="Bogor-Selatan">Harjasari</option>
                      <option <?php if ($filter_kelurahan == "Kertamaya") {echo " selected ";} ?> value="Kertamaya" data-chained="Bogor-Selatan">Kertamaya</option>
                      <option <?php if ($filter_kelurahan == "Lawang Gintung") {echo " selected ";} ?> value="Lawang Gintung" data-chained="Bogor-Selatan">Lawang Gintung</option>
                      <option <?php if ($filter_kelurahan == "Muarasari") {echo " selected ";} ?> value="Muarasari" data-chained="Bogor-Selatan">Muarasari</option>
                      <option <?php if ($filter_kelurahan == "Mulyaharja") {echo " selected ";} ?> value="Mulyaharja" data-chained="Bogor-Selatan">Mulyaharja</option>
                      <option <?php if ($filter_kelurahan == "Pakuan") {echo " selected ";} ?> value="Pakuan" data-chained="Bogor-Selatan">Pakuan</option>
                      <option <?php if ($filter_kelurahan == "Pamoyanan") {echo " selected ";} ?> value="Pamoyanan" data-chained="Bogor-Selatan">Pamoyanan</option>
                      <option <?php if ($filter_kelurahan == "Rancamaya") {echo " selected ";} ?> value="Rancamaya" data-chained="Bogor-Selatan">Rancamaya</option>
                      <option <?php if ($filter_kelurahan == "Ranggamekar") {echo " selected ";} ?> value="Ranggamekar" data-chained="Bogor-Selatan">Ranggamekar</option>

                      <option <?php if ($filter_kelurahan == "Balumbang Jaya") {echo " selected ";} ?> value="Balumbang Jaya" data-chained="Bogor-Barat">Balumbang Jaya</option>
                      <option <?php if ($filter_kelurahan == "Bubulak") {echo " selected ";} ?> value="Bubulak" data-chained="Bogor-Barat">Bubulak</option>
                      <option <?php if ($filter_kelurahan == "Cilendek Barat") {echo " selected ";} ?> value="Cilendek Barat" data-chained="Bogor-Barat">Cilendek Barat</option>
                      <option <?php if ($filter_kelurahan == "Cilendek Timur") {echo " selected ";} ?> value="Cilendek Timur" data-chained="Bogor-Barat">Cilendek Timur</option>
                      <option <?php if ($filter_kelurahan == "Curuk") {echo " selected ";} ?> value="Curuk" data-chained="Bogor-Barat">Curuk</option>
                      <option <?php if ($filter_kelurahan == "Curug Mekar") {echo " selected ";} ?> value="Curug Mekar" data-chained="Bogor-Barat">Curug Mekar</option>
                      <option <?php if ($filter_kelurahan == "Gunung Batu") {echo " selected ";} ?> value="Gunung Batu" data-chained="Bogor-Barat">Gunung Batu</option>
                      <option <?php if ($filter_kelurahan == "Loji") {echo " selected ";} ?> value="Loji" data-chained="Bogor-Barat">Loji</option>
                      <option <?php if ($filter_kelurahan == "Margajaya") {echo " selected ";} ?> value="Margajaya" data-chained="Bogor-Barat">Margajaya</option>
                      <option <?php if ($filter_kelurahan == "Menteng") {echo " selected ";} ?> value="Menteng" data-chained="Bogor-Barat">Menteng</option>
                      <option <?php if ($filter_kelurahan == "Pasir Jaya") {echo " selected ";} ?> value="Pasir Jaya" data-chained="Bogor-Barat">Pasir Jaya</option>
                      <option <?php if ($filter_kelurahan == "Pasir Kuda") {echo " selected ";} ?> value="Pasir Kuda" data-chained="Bogor-Barat">Pasir Kuda</option>
                      <option <?php if ($filter_kelurahan == "Pasir Mulya") {echo " selected ";} ?> value="Pasir Mulya" data-chained="Bogor-Barat">Pasir Mulya</option>
                      <option <?php if ($filter_kelurahan == "Semplak") {echo " selected ";} ?> value="Semplak" data-chained="Bogor-Barat">Semplak</option>
                      <option <?php if ($filter_kelurahan == "Sindang Barang") {echo " selected ";} ?> value="Sindang Barang" data-chained="Bogor-Barat">Sindang Barang</option>
                      <option <?php if ($filter_kelurahan == "Situ") {echo " selected ";} ?> value="Situ" data-chained="Bogor-Barat">Situ</option>

                      <option <?php if ($filter_kelurahan == "Cibadak") {echo " selected ";} ?> value="Cibadak" data-chained="Tanah-Sareal">Cibadak</option>
                      <option <?php if ($filter_kelurahan == "Kayumanis") {echo " selected ";} ?> value="Kayumanis" data-chained="Tanah-Sareal">Kayumanis</option>
                      <option <?php if ($filter_kelurahan == "Kebon Pedes") {echo " selected ";} ?> value="Kebon Pedes" data-chained="Tanah-Sareal">Kebon Pedes</option>
                      <option <?php if ($filter_kelurahan == "Kedung Badak") {echo " selected ";} ?> value="Kedung Badak" data-chained="Tanah-Sareal">Kedung Badak</option>
                      <option <?php if ($filter_kelurahan == "Kedung Jaya") {echo " selected ";} ?> value="Kedung Jaya" data-chained="Tanah-Sareal">Kedung Jaya</option>
                      <option <?php if ($filter_kelurahan == "Kedug Waringin") {echo " selected ";} ?> value="Kedug Waringin" data-chained="Tanah-Sareal">Kedug Waringin</option>
                      <option <?php if ($filter_kelurahan == "Kencana") {echo " selected ";} ?> value="Kencana" data-chained="Tanah-Sareal">Kencana</option>
                      <option <?php if ($filter_kelurahan == "Mekarwangi") {echo " selected ";} ?> value="Mekarwangi" data-chained="Tanah-Sareal">Mekarwangi</option>
                      <option <?php if ($filter_kelurahan == "Sukadamai") {echo " selected ";} ?> value="Sukadamai" data-chained="Tanah-Sareal">Sukadamai</option>
                      <option <?php if ($filter_kelurahan == "Sukaresmi") {echo " selected ";} ?> value="Sukaresmi" data-chained="Tanah-Sareal">Sukaresmi</option>
                      <option <?php if ($filter_kelurahan == "Tanah Sareal") {echo " selected ";} ?> value="Tanah Sareal" data-chained="Tanah-Sareal">Tanah Sareal</option>

                    </select>
                  </div>

                  <div class="col-xs-offset-6">
                    <button type="submit" class="btn btn-success">Filter</button>
                  </div>
                  
                </div>
              </form>

              <br>

						  <table id="example2" class="table table-bordered">
								<thead>
								  <tr>
								  <th>Aksi</th>
						      <th>NIK</th>
						      <th>Nama</th>
                  <th>Jenis Program</th>
						      <th>Jenis Kelamin</th>
						      <th>Tempat Lahir</th>
						      <th>Tanggal Lahir</th>
						      <th>Kecamatan</th>
						      <th>Kelurahan</th>
						      <th>Alamat</th>
						      <th>Foto Wajah</th>
						      <th>Foto Rumah</th>
						      <!-- <th>Foto Rumah</th> -->
								  </tr>
								</thead>
								<tbody>
								<?php foreach ($picture_list as $pic): ?>
								  <tr>
								  <td>

                    <a href="<?= base_url(). 'upload/detail/' .$pic->id; ?>" class="btn btn-info btn-xs glyphicon glyphicon-eye-open"></a>
                    <a href="<?= base_url(). 'upload/update/' .$pic->id; ?>" class="btn btn-warning btn-xs glyphicon glyphicon-pencil"></a>
                    <a href="<?= base_url(). 'upload/delete/' .$pic->id; ?>" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></a>

                  </td>
                  <td><?=$pic->nik;?></td>
                  <td><?=$pic->nama;?></td>
									<td><?=$pic->jenisprogram;?></td>
									<td><?=$pic->jeniskelamin;?></td>
									<td><?=$pic->tempatlahir;?></td>
									<td><?=$pic->tanggallahir;?></td>
									<td><?=$pic->kecamatan;?></td>
									<td><?=$pic->kelurahan;?></td>
									<td><?=$pic->alamat;?></td>
									
									<td><a href="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" width="100"></a></td>

									<td><a href="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" width="100"></a></td>
								  </tr>
								<?php endforeach ?>
								</tbody>

					      <tfoot>
					      <tr>
                  <td>.......................</td>
                  <td></td>
                  <td>............................</td>
					        <td>............................</td>
                  <td></td>
                  <td>............................</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>............................</td>
                  <td></td>
                  <td></td>
					      </tr>
					      </tfoot>
						  </table>

							<br /><br />
							<p class="footer" style="bottom:0">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>


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


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

