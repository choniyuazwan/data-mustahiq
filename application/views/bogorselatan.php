  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mustahiq
        <small>Kecamatan Bogor Selatan</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?= base_url(). 'upload/bogorselatan_print' ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

            <div class="box-body">
              <label class="control-label col-sm-3 satu">Batutulis : <?= $batutulis. ' = ' .$persen_batutulis ?> %</label>
              <label class="control-label col-sm-3 dua">Bojongkerta : <?= $bojongkerta. ' = ' .$persen_bojongkerta ?> %</label>
              <label class="control-label col-sm-3 tiga">Bondongan : <?= $bondongan. ' = ' .$persen_bondongan ?> %</label>
              <label class="control-label col-sm-3 empat">Cikaret : <?= $cikaret. ' = ' .$persen_cikaret ?> %</label>
              <label class="control-label col-sm-3 lima">Cipaku : <?= $cipaku. ' = ' .$persen_cipaku ?> %</label>
              <label class="control-label col-sm-3 enam">Empang : <?= $empang. ' = ' .$persen_empang ?> %</label>
              <label class="control-label col-sm-3 tujuh">Ganteng : <?= $ganteng. ' = ' .$persen_ganteng ?> %</label>
              <label class="control-label col-sm-3 delapan">Harjasari : <?= $harjasari. ' = ' .$persen_harjasari ?> %</label>
              <label class="control-label col-sm-3 sembilan">Kertamaya : <?= $kertamaya. ' = ' .$persen_kertamaya ?> %</label>
              <label class="control-label col-sm-3 sepuluh">Lawang Gintung : <?= $lawang_gintung. ' = ' .$persen_lawang_gintung ?> %</label>
              <label class="control-label col-sm-3 sebelas">Muarasari : <?= $muarasari. ' = ' .$persen_muarasari ?> %</label>
              <label class="control-label col-sm-3 duabelas">Mulyaharja : <?= $mulyaharja. ' = ' .$persen_mulyaharja ?> %</label>
              <label class="control-label col-sm-3 tigabelas">Pakuan : <?= $pakuan. ' = ' .$persen_pakuan ?> %</label>
              <label class="control-label col-sm-3 empatbelas">Pamoyanan : <?= $pamoyanan. ' = ' .$persen_pamoyanan ?> %</label>
              <label class="control-label col-sm-3 limabelas">Rancamaya : <?= $rancamaya. ' = ' .$persen_rancamaya ?> %</label>
              <label class="control-label col-sm-3 enambelas">Ranggamekar : <?= $ranggamekar. ' = ' .$persen_ranggamekar ?> %</label>
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

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
