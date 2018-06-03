  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik
        <small>Kecamatan Bogor Tengah</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?= base_url(). 'upload/bogortengah_print' ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

            <div class="box-body">
              <label class="control-label col-sm-3 satu">Babakan : <?= $babakan. ' = ' .$persen_babakan ?> %</label>
              <label class="control-label col-sm-3 dua">Babakan Pasar : <?= $babakan_pasar. ' = ' .$persen_babakan_pasar ?> %</label>
              <label class="control-label col-sm-3 tiga">Cibogor : <?= $cibogor. ' = ' .$persen_cibogor ?> %</label>
              <label class="control-label col-sm-3 empat">Ciwaringin : <?= $ciwaringin. ' = ' .$persen_ciwaringin ?> %</label>
              <label class="control-label col-sm-3 lima">Gudang : <?= $gudang. ' = ' .$persen_gudang ?> %</label>
              <label class="control-label col-sm-3 enam">Kebon Kelapa : <?= $kebon_kelapa. ' = ' .$persen_kebon_kelapa?> %</label>
              <label class="control-label col-sm-3 tujuh">Pabaton : <?= $pabaton. ' = ' .$persen_pabaton?> %</label>
              <label class="control-label col-sm-3 delapan">Paledang : <?= $paledang. ' = ' .$persen_paledang?> %</label>
              <label class="control-label col-sm-3 sembilan">Panaragan : <?= $panaragan. ' = ' .$persen_panaragan?> %</label>
              <label class="control-label col-sm-3 sepuluh">Sempur : <?= $sempur. ' = ' .$persen_sempur?> %</label>
              <label class="control-label col-sm-3 sebelas">Tegallega : <?= $tegallega. ' = ' .$persen_tegallega?> %</label>
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

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->