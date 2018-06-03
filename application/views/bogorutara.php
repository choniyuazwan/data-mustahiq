  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik
        <small>Kecamatan Bogor Utara</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?= base_url(). 'upload/bogorutara_print' ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

            <div class="box-body">
              <label class="control-label col-sm-3 satu">Bantarjati : <?= $bantarjati. ' = ' .$persen_bantarjati ?> %</label>
              <label class="control-label col-sm-3 dua">Cibuluh : <?= $cibuluh. ' = ' .$persen_cibuluh ?> %</label>
              <label class="control-label col-sm-3 tiga">Ciluar : <?= $ciluar. ' = ' .$persen_ciluar ?> %</label>
              <label class="control-label col-sm-3 empat">Cimahpar : <?= $cimahpar. ' = ' .$persen_cimahpar ?> %</label>
              <label class="control-label col-sm-3 lima">Ciparigi : <?= $ciparigi. ' = ' .$persen_ciparigi ?> %</label>
              <label class="control-label col-sm-3 enam">Kedung Halang : <?= $kedung_halang. ' = ' .$persen_kedung_halang ?> %</label>
              <label class="control-label col-sm-3 tujuh">Tanah Baru : <?= $tanah_baru. ' = ' .$persen_tanah_baru ?> %</label>
              <label class="control-label col-sm-3 delapan">Tegal Gundil : <?= $tegal_gundil. ' = ' .$persen_tegal_gundil ?> %</label>
            </div>

            <div class="col-md-7">
                <div class="box-body">
                  <div id="bogorutara-chart" style="height: 400px;"></div>
                </div>
            </div>

            <div class="box-body">
              <div class="chart">
                <canvas id="bogorUtara" style="height:400px"></canvas>
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