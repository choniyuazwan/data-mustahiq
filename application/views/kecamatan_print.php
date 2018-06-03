
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Grafik Kota Bogor
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
              <label class="control-label col-sm-4 invoice-col satu">Bogor Tengah : <?= $bogor_tengah. ' = ' .$persen_bogor_tengah?> %</label>
              <label class="control-label col-sm-4 invoice-col dua">Bogor Utara : <?= $bogor_utara. ' = ' .$persen_bogor_utara?> %</label>
              <label class="control-label col-sm-4 invoice-col tiga">Bogor Timur : <?= $bogor_timur. ' = ' .$persen_bogor_timur?> %</label>
              <label class="control-label col-sm-4 invoice-col empat">Bogor Selatan : <?= $bogor_selatan. ' = ' .$persen_bogor_selatan?> %</label>
              <label class="control-label col-sm-4 invoice-col lima">Bogor Barat : <?= $bogor_barat. ' = ' .$persen_bogor_barat?> %</label>
              <label class="control-label col-sm-4 invoice-col enam">Tanah Sareal : <?= $bogor_sareal. ' = ' .$persen_bogor_sareal?> %</label>
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
  </section>
