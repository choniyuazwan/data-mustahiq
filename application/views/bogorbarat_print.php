
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Mustahiq Kecamatan Bogor Barat
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
                <label class="control-label col-sm-3 invoice-col satu">Balumbang Jaya : <?= $balumbang_jaya. ' = ' .$persen_balumbang_jaya ?> %</label>
                <label class="control-label col-sm-3 invoice-col dua">Bubulak : <?= $bubulak. ' = ' .$persen_bubulak ?> %</label>
                <label class="control-label col-sm-3 invoice-col tiga">Cilendek Barat : <?= $cilendek_barat. ' = ' .$persen_cilendek_barat ?> %</label>
                <label class="control-label col-sm-3 invoice-col empat">Cilendek Timur : <?= $cilendek_timur. ' = ' .$persen_cilendek_timur ?> %</label>
                <label class="control-label col-sm-3 invoice-col lima">Curuk : <?= $curuk. ' = ' .$persen_curuk ?> %</label>
                <label class="control-label col-sm-3 invoice-col enam">Curug Mekar : <?= $curug_mekar. ' = ' .$persen_curug_mekar ?> %</label>
                <label class="control-label col-sm-3 invoice-col tujuh">Gunung Batu : <?= $gunung_batu. ' = ' .$persen_gunung_batu ?> %</label>
                <label class="control-label col-sm-3 invoice-col delapan">Loji : <?= $loji. ' = ' .$persen_loji ?> %</label>
                <label class="control-label col-sm-3 invoice-col sembilan">Margajaya : <?= $margajaya. ' = ' .$persen_margajaya ?> %</label>
                <label class="control-label col-sm-3 invoice-col sepuluh">Menteng Gintung : <?= $menteng. ' = ' .$persen_menteng ?> %</label>
                <label class="control-label col-sm-3 invoice-col sebelas">Pasir Jaya : <?= $pasir_jaya. ' = ' .$persen_pasir_jaya ?> %</label>
                <label class="control-label col-sm-3 invoice-col duabelas">Pasir Kuda : <?= $pasir_kuda. ' = ' .$persen_pasir_kuda ?> %</label>
                <label class="control-label col-sm-3 invoice-col tigabelas">Pasir Mulya : <?= $pasir_mulya. ' = ' .$persen_pasir_mulya ?> %</label>
                <label class="control-label col-sm-3 invoice-col empatbelas">Semplak : <?= $semplak. ' = ' .$persen_semplak ?> %</label>
                <label class="control-label col-sm-3 invoice-col limabelas">Sindang Barang : <?= $sindang_barang. ' = ' .$persen_sindang_barang ?> %</label>
                <label class="control-label col-sm-3 invoice-col enambelas">Situ : <?= $situ. ' = ' .$persen_situ ?> %</label>
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
  </section>
