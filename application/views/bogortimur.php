  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mustahiq
        <small>Kecamatan Bogor Timur</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?= base_url(). 'user/bogortimur_print' ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

            <div class="box-body">
              <label class="control-label col-sm-4 satu">Baranangsiang : <?= $baranangsiang. ' = ' .$persen_baranangsiang ?> %</label>
              <label class="control-label col-sm-4 dua">Katulampa : <?= $katulampa. ' = ' .$katulampa ?> %</label>
              <label class="control-label col-sm-4 tiga">Sindangrasa : <?= $sindangrasa. ' = ' .$sindangrasa ?> %</label>
              <label class="control-label col-sm-4 empat">Sindangsari : <?= $sindangsari. ' = ' .$sindangsari ?> %</label>
              <label class="control-label col-sm-4 lima">Sukasari : <?= $sukasari. ' = ' .$sukasari ?> %</label>
              <label class="control-label col-sm-4 enam">Tajur : <?= $tajur. ' = ' .$tajur ?> %</label>
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

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
