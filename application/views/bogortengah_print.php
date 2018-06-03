
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Grafik Kecamatan Bogor Tengah
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
                <label class="control-label col-sm-4 invoice-col satu">Babakan : <?= $babakan. ' = ' .$persen_babakan ?> %</label>
                <label class="control-label col-sm-4 invoice-col dua">Babakan Pasar : <?= $babakan_pasar. ' = ' .$persen_babakan_pasar ?> %</label>
                <label class="control-label col-sm-4 invoice-col tiga">Cibogor : <?= $cibogor. ' = ' .$persen_cibogor ?> %</label>
                <label class="control-label col-sm-4 invoice-col empat">Ciwaringin : <?= $ciwaringin. ' = ' .$persen_ciwaringin ?> %</label>
                <label class="control-label col-sm-4 invoice-col lima">Gudang : <?= $gudang. ' = ' .$persen_gudang ?> %</label>
                <label class="control-label col-sm-4 invoice-col enam">Kebon Kelapa : <?= $kebon_kelapa. ' = ' .$persen_kebon_kelapa?> %</label>
                <label class="control-label col-sm-4 invoice-col tujuh">Pabaton : <?= $pabaton. ' = ' .$persen_pabaton?> %</label>
                <label class="control-label col-sm-4 invoice-col delapan">Paledang : <?= $paledang. ' = ' .$persen_paledang?> %</label>
                <label class="control-label col-sm-4 invoice-col sembilan">Panaragan : <?= $panaragan. ' = ' .$persen_panaragan?> %</label>
                <label class="control-label col-sm-4 invoice-col sepuluh">Sempur : <?= $sempur. ' = ' .$persen_sempur?> %</label>
                <label class="control-label col-sm-4 invoice-col sebelas">Tegallega : <?= $tegallega. ' = ' .$persen_tegallega?> %</label>
            </div>
            
            <div class="col-md-7">
                <div class="box-body">
                  <div id="bogortengah-chart" style="height: 400px;"></div>
                </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="bogorTengah" style="height:400px"></canvas>
              </div>
            </div>
        </div>
    </div>
  </section>
