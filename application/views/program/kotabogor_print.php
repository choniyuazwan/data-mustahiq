
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Program
          <?php 
            if($this->uri->segment(2) == "kotabogor_print") {echo "Kota Bogor";} elseif ($this->uri->segment(2) == "bogortengah_print") {echo "Kecamatan Bogor Tengah";} elseif ($this->uri->segment(2) == "bogorutara_print") {echo "Kecamatan Bogor Utara";} elseif ($this->uri->segment(2) == "bogortimur_print") {echo "Kecamatan Bogor Timur";} elseif ($this->uri->segment(2) == "bogorselatan_print") {echo "Kecamatan Bogor Selatan";} elseif ($this->uri->segment(2) == "bogorbarat_print") {echo "Kecamatan Bogor Barat";} elseif ($this->uri->segment(2) == "tanahsareal_print") {echo "Kecamatan Tanah Sareal";}
          ?>
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
              <label class="control-label col-sm-4 satu">Bogor Cerdas : <?= $bogor_cerdas. ' = ' .$persen_bogor_cerdas?> %</label>
              <label class="control-label col-sm-4 dua">Bogor Sehat : <?= $bogor_sehat. ' = ' .$persen_bogor_sehat?> %</label>
              <label class="control-label col-sm-4 tiga">Bogor Berdakwah : <?= $bogor_berdakwah. ' = ' .$persen_bogor_berdakwah?> %</label>
              <label class="control-label col-sm-4 empat">Bogor Peduli : <?= $bogor_peduli. ' = ' .$persen_bogor_peduli?> %</label>
              <label class="control-label col-sm-4 lima">Bogor Berkah : <?= $bogor_berkah. ' = ' .$persen_bogor_berkah?> %</label>
            </div>

            <div class="box-body">
              <div class="chart">
                <canvas id="program-kotabogor" style="height:400px"></canvas>
              </div>
            </div>        

        </div>
    </div>
  </section>
