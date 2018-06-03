
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Grafik Kecamatan Bogor Utara
          <?php date_default_timezone_set("Asia/Jakarta"); ?>
          <small class="pull-right">Tanggal : <?= date("d/m/Y") ?></small>
          <small class="pull-right">Waktu : <?= date("H:i:s") ?> &nbsp;</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>

    <div class="row invoice-info">
        <div class="col-md-12">
            <div class="box-body">
                <label class="control-label col-sm-3 invoice-col satu">Bantarjati : <?= $bantarjati. ' = ' .$persen_bantarjati ?> %</label>
                <label class="control-label col-sm-3 invoice-col dua">Cibuluh : <?= $cibuluh. ' = ' .$persen_cibuluh ?> %</label>
                <label class="control-label col-sm-3 invoice-col tiga">Ciluar : <?= $ciluar. ' = ' .$persen_ciluar ?> %</label>
                <label class="control-label col-sm-3 invoice-col empat">Cimahpar : <?= $cimahpar. ' = ' .$persen_cimahpar ?> %</label>
                <label class="control-label col-sm-3 invoice-col lima">Ciparigi : <?= $ciparigi. ' = ' .$persen_ciparigi ?> %</label>
                <label class="control-label col-sm-3 invoice-col enam">Kedung Halang : <?= $kedung_halang. ' = ' .$persen_kedung_halang ?> %</label>
                <label class="control-label col-sm-3 invoice-col tujuh">Tanah Baru : <?= $tanah_baru. ' = ' .$persen_tanah_baru ?> %</label>
                <label class="control-label col-sm-3 invoice-col delapan">Tegal Gundil : <?= $tegal_gundil. ' = ' .$persen_tegal_gundil ?> %</label>
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
  </section>
