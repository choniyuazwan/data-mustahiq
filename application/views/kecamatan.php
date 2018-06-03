  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik
        <small>Kota Bogor</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?= base_url(). 'upload/kecamatan_print' ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

            <div class="box-body">
              <label class="control-label col-sm-4 satu">Bogor Tengah : <?= $bogor_tengah. ' = ' .$persen_bogor_tengah?> %</label>
              <label class="control-label col-sm-4 dua">Bogor Utara : <?= $bogor_utara. ' = ' .$persen_bogor_utara?> %</label>
              <label class="control-label col-sm-4 tiga">Bogor Timur : <?= $bogor_timur. ' = ' .$persen_bogor_timur?> %</label>
              <label class="control-label col-sm-4 empat">Bogor Selatan : <?= $bogor_selatan. ' = ' .$persen_bogor_selatan?> %</label>
              <label class="control-label col-sm-4 lima">Bogor Barat : <?= $bogor_barat. ' = ' .$persen_bogor_barat?> %</label>
              <label class="control-label col-sm-4 enam">Tanah Sareal : <?= $bogor_sareal. ' = ' .$persen_bogor_sareal?> %</label>
            </div>

            <div class="col-md-7">
                <div class="box-body">
                  <div id="donut-chart" style="height: 400px;"></div>
                </div>
            </div>

            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:400px"></canvas>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>


  </div>
  <!-- /.content-wrapper -->
