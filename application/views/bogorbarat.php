  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik
        <small>Kecamatan Bogor Barat</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?= base_url(). 'upload/bogorbarat_print' ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

            <div class="box-body">
              <label class="control-label col-sm-3 satu">Balumbang Jaya : <?= $balumbang_jaya. ' = ' .$persen_balumbang_jaya ?> %</label>
              <label class="control-label col-sm-3 dua">Bubulak : <?= $bubulak. ' = ' .$persen_bubulak ?> %</label>
              <label class="control-label col-sm-3 tiga">Cilendek Barat : <?= $cilendek_barat. ' = ' .$persen_cilendek_barat ?> %</label>
              <label class="control-label col-sm-3 empat">Cilendek Timur : <?= $cilendek_timur. ' = ' .$persen_cilendek_timur ?> %</label>
              <label class="control-label col-sm-3 lima">Curuk : <?= $curuk. ' = ' .$persen_curuk ?> %</label>
              <label class="control-label col-sm-3 enam">Curug Mekar : <?= $curug_mekar. ' = ' .$persen_curug_mekar ?> %</label>
              <label class="control-label col-sm-3 tujuh">Gunung Batu : <?= $gunung_batu. ' = ' .$persen_gunung_batu ?> %</label>
              <label class="control-label col-sm-3 delapan">Loji : <?= $loji. ' = ' .$persen_loji ?> %</label>
              <label class="control-label col-sm-3 sembilan">Margajaya : <?= $margajaya. ' = ' .$persen_margajaya ?> %</label>
              <label class="control-label col-sm-3 sepuluh">Menteng Gintung : <?= $menteng. ' = ' .$persen_menteng ?> %</label>
              <label class="control-label col-sm-3 sebelas">Pasir Jaya : <?= $pasir_jaya. ' = ' .$persen_pasir_jaya ?> %</label>
              <label class="control-label col-sm-3 duabelas">Pasir Kuda : <?= $pasir_kuda. ' = ' .$persen_pasir_kuda ?> %</label>
              <label class="control-label col-sm-3 tigabelas">Pasir Mulya : <?= $pasir_mulya. ' = ' .$persen_pasir_mulya ?> %</label>
              <label class="control-label col-sm-3 empatbelas">Semplak : <?= $semplak. ' = ' .$persen_semplak ?> %</label>
              <label class="control-label col-sm-3 limabelas">Sindang Barang : <?= $sindang_barang. ' = ' .$persen_sindang_barang ?> %</label>
              <label class="control-label col-sm-3 enambelas">Situ : <?= $situ. ' = ' .$persen_situ ?> %</label>
            </div>

            <div class="col-md-7">
                <div class="box-body">
                  <div id="bogorbarat-chart" style="height: 400px;"></div>
                </div>
            </div>

            <div class="box-body">
              <div class="chart">
                <canvas id="bogorBarat" style="height:400px"></canvas>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->