
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Mustahiq Kecamatan Bogor Selatan
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
                <label class="control-label col-sm-3 invoice-col satu">Batutulis : <?= $batutulis. ' = ' .$persen_batutulis ?> %</label>
                <label class="control-label col-sm-3 invoice-col dua">Bojongkerta : <?= $bojongkerta. ' = ' .$persen_bojongkerta ?> %</label>
                <label class="control-label col-sm-3 invoice-col tiga">Bondongan : <?= $bondongan. ' = ' .$persen_bondongan ?> %</label>
                <label class="control-label col-sm-3 invoice-col empat">Cikaret : <?= $cikaret. ' = ' .$persen_cikaret ?> %</label>
                <label class="control-label col-sm-3 invoice-col lima">Cipaku : <?= $cipaku. ' = ' .$persen_cipaku ?> %</label>
                <label class="control-label col-sm-3 invoice-col enam">Empang : <?= $empang. ' = ' .$persen_empang ?> %</label>
                <label class="control-label col-sm-3 invoice-col tujuh">Ganteng : <?= $ganteng. ' = ' .$persen_ganteng ?> %</label>
                <label class="control-label col-sm-3 invoice-col delapan">Harjasari : <?= $harjasari. ' = ' .$persen_harjasari ?> %</label>
                <label class="control-label col-sm-3 invoice-col sembilan">Kertamaya : <?= $kertamaya. ' = ' .$persen_kertamaya ?> %</label>
                <label class="control-label col-sm-3 invoice-col sepuluh">Lawang Gintung : <?= $lawang_gintung. ' = ' .$persen_lawang_gintung ?> %</label>
                <label class="control-label col-sm-3 invoice-col sebelas">Muarasari : <?= $muarasari. ' = ' .$persen_muarasari ?> %</label>
                <label class="control-label col-sm-3 invoice-col duabelas">Mulyaharja : <?= $mulyaharja. ' = ' .$persen_mulyaharja ?> %</label>
                <label class="control-label col-sm-3 invoice-col tigabelas">Pakuan : <?= $pakuan. ' = ' .$persen_pakuan ?> %</label>
                <label class="control-label col-sm-3 invoice-col empatbelas">Pamoyanan : <?= $pamoyanan. ' = ' .$persen_pamoyanan ?> %</label>
                <label class="control-label col-sm-3 invoice-col limabelas">Rancamaya : <?= $rancamaya. ' = ' .$persen_rancamaya ?> %</label>
                <label class="control-label col-sm-3 invoice-col enambelas">Ranggamekar : <?= $ranggamekar. ' = ' .$persen_ranggamekar ?> %</label>
            </div>
            
            <div class="col-md-7">
                <div class="box-body">
                  <div id="bogorselatan-chart" style="height: 400px;"></div>
                </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="bogorSelatan" style="height:400px"></canvas>
              </div>
            </div>
        </div>
    </div>
  </section>
