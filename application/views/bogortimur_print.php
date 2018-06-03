
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Grafik Kecamatan Bogor Timur
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
                <label class="control-label col-sm-4 invoice-col satu">Baranangsiang : <?= $baranangsiang. ' = ' .$persen_baranangsiang ?> %</label>
                <label class="control-label col-sm-4 invoice-col dua">Katulampa : <?= $katulampa. ' = ' .$katulampa ?> %</label>
                <label class="control-label col-sm-4 invoice-col tiga">Sindangrasa : <?= $sindangrasa. ' = ' .$sindangrasa ?> %</label>
                <label class="control-label col-sm-4 invoice-col empat">Sindangsari : <?= $sindangsari. ' = ' .$sindangsari ?> %</label>
                <label class="control-label col-sm-4 invoice-col lima">Sukasari : <?= $sukasari. ' = ' .$sukasari ?> %</label>
                <label class="control-label col-sm-4 invoice-col enam">Tajur : <?= $tajur. ' = ' .$tajur ?> %</label>
            </div>
            
            <div class="col-md-7">
                <div class="box-body">
                  <div id="bogortimur-chart" style="height: 400px;"></div>
                </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="bogorTimur" style="height:400px"></canvas>
              </div>
            </div>
        </div>
    </div>
  </section>
