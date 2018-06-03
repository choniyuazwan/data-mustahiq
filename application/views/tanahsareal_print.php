
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Grafik Kecamatan Bogor Selatan
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
                <label class="control-label col-sm-3 invoice-col satu">Cibadak : <?= $cibadak. ' = ' .$persen_cibadak ?> %</label>
                <label class="control-label col-sm-3 invoice-col dua">Kayumanis : <?= $kayumanis. ' = ' .$persen_kayumanis ?> %</label>
                <label class="control-label col-sm-3 invoice-col tiga">Kebon Pedes : <?= $kebon_pedes. ' = ' .$persen_kebon_pedes ?> %</label>
                <label class="control-label col-sm-3 invoice-col empat">Kedung Badak : <?= $kedung_badak. ' = ' .$persen_kedung_badak ?> %</label>
                <label class="control-label col-sm-3 invoice-col lima">Kedung Jaya : <?= $kedung_jaya. ' = ' .$persen_kedung_jaya ?> %</label>
                <label class="control-label col-sm-3 invoice-col enam">Kedug Waringin : <?= $kedug_waringin. ' = ' .$persen_kedug_waringin ?> %</label>
                <label class="control-label col-sm-3 invoice-col tujuh">Kencana : <?= $kencana. ' = ' .$persen_kencana ?> %</label>
                <label class="control-label col-sm-3 invoice-col delapan">Mekarwangi : <?= $mekarwangi. ' = ' .$persen_mekarwangi ?> %</label>
                <label class="control-label col-sm-3 invoice-col sembilan">Sukadamai : <?= $sukadamai. ' = ' .$persen_sukadamai ?> %</label>
                <label class="control-label col-sm-3 invoice-col sepuluh">Sukaresmi : <?= $sukaresmi. ' = ' .$persen_sukaresmi ?> %</label>
                <label class="control-label col-sm-3 invoice-col sebelas">Tanah Sareal : <?= $tanah_sareal. ' = ' .$persen_tanah_sareal ?> %</label>
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
  </section>
