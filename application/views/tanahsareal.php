  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik
        <small>Kecamatan Tanah Sareal</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?= base_url(). 'upload/tanahsareal_print' ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

            <div class="box-body">
              <label class="control-label col-sm-3 satu">Cibadak : <?= $cibadak. ' = ' .$persen_cibadak ?> %</label>
              <label class="control-label col-sm-3 dua">Kayumanis : <?= $kayumanis. ' = ' .$persen_kayumanis ?> %</label>
              <label class="control-label col-sm-3 tiga">Kebon Pedes : <?= $kebon_pedes. ' = ' .$persen_kebon_pedes ?> %</label>
              <label class="control-label col-sm-3 empat">Kedung Badak : <?= $kedung_badak. ' = ' .$persen_kedung_badak ?> %</label>
              <label class="control-label col-sm-3 lima">Kedung Jaya : <?= $kedung_jaya. ' = ' .$persen_kedung_jaya ?> %</label>
              <label class="control-label col-sm-3 enam">Kedug Waringin : <?= $kedug_waringin. ' = ' .$persen_kedug_waringin ?> %</label>
              <label class="control-label col-sm-3 tujuh">Kencana : <?= $kencana. ' = ' .$persen_kencana ?> %</label>
              <label class="control-label col-sm-3 delapan">Mekarwangi : <?= $mekarwangi. ' = ' .$persen_mekarwangi ?> %</label>
              <label class="control-label col-sm-3 sembilan">Sukadamai : <?= $sukadamai. ' = ' .$persen_sukadamai ?> %</label>
              <label class="control-label col-sm-3 sepuluh">Sukaresmi : <?= $sukaresmi. ' = ' .$persen_sukaresmi ?> %</label>
              <label class="control-label col-sm-3 sebelas">Tanah Sareal : <?= $tanah_sareal. ' = ' .$persen_tanah_sareal ?> %</label>
            </div>

            <div class="col-md-7">
                <div class="box-body">
                  <div id="tanahsareal-chart" style="height: 400px;"></div>
                </div>
            </div>

            <div class="box-body">
              <div class="chart">
                <canvas id="tanahSareal" style="height:400px"></canvas>
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
