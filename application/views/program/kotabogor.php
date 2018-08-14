  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Program
        <small>
          <?php 
            if($this->uri->segment(2) == "kotabogor") {echo "Kota Bogor";} elseif ($this->uri->segment(2) == "bogortengah") {echo "Kecamatan Bogor Tengah";} elseif ($this->uri->segment(2) == "bogorutara") {echo "Kecamatan Bogor Utara";} elseif ($this->uri->segment(2) == "bogortimur") {echo "Kecamatan Bogor Timur";} elseif ($this->uri->segment(2) == "bogorselatan") {echo "Kecamatan Bogor Selatan";} elseif ($this->uri->segment(2) == "bogorbarat") {echo "Kecamatan Bogor Barat";} elseif ($this->uri->segment(2) == "tanahsareal") {echo "Kecamatan Tanah Sareal";}
          ?>
        </small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">

            <div class="box-body">
              <div class="col-xs-12">
                <a href="<?php echo base_url(). 'program/'; if($this->uri->segment(2) == "kotabogor") {echo "kotabogor_print";} elseif ($this->uri->segment(2) == "bogortengah") {echo "bogortengah_print";} elseif ($this->uri->segment(2) == "bogorutara") {echo "bogorutara_print";} elseif ($this->uri->segment(2) == "bogortimur") {echo "bogortimur_print";} elseif ($this->uri->segment(2) == "bogorselatan") {echo "bogorselatan_print";} elseif ($this->uri->segment(2) == "bogorbarat") {echo "bogorbarat_print";} elseif ($this->uri->segment(2) == "tanahsareal") {echo "tanahsareal_print";}?>" 
                  target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
              </div>      
            </div>

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

      </div>
    </section>


  </div>
  <!-- /.content-wrapper -->
