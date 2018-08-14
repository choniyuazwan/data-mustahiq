
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Grafik Kota Bogor
          <?php date_default_timezone_set("Asia/Jakarta"); ?>
          <small class="pull-right">Tanggal : <?= date("d/m/Y") ?></small>
          <small class="pull-right">Waktu : <?= date("H:i:s") ?> &nbsp;</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>

    <div class="row invoice-info">
        <div class="col-md-12">
            <table id="example2" class="table table-bordered">
                <thead>
                  <tr>
                  <th>Aksi</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Program</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Kecamatan</th>
                  <th>Kelurahan</th>
                  <th>Alamat</th>
                  <th>Foto Wajah</th>
                  <th>Foto Rumah</th>
                  <th>Keterangan</th>
                  <!-- <th>Foto Rumah</th> -->
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($picture_list as $pic): ?>
                  <tr>
                  <td>

                    <a href="<?= base_url(). 'upload/delete/' .$pic->id; ?>" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></a>
                    <a href="<?= base_url(). 'upload/update/' .$pic->id; ?>" class="btn btn-warning btn-xs glyphicon glyphicon-pencil"></a>
                    <a href="<?= base_url(). 'upload/detail/' .$pic->id; ?>" class="btn btn-info btn-xs glyphicon glyphicon-eye-open"></a>

                  </td>
                  <td><?=$pic->nik;?></td>
                  <td><?=$pic->nama;?></td>
                  <td><?=$pic->jenisprogram;?></td>
                  <td><?=$pic->jeniskelamin;?></td>
                  <td><?=$pic->tempatlahir;?></td>
                  <td><?=$pic->tanggallahir;?></td>
                  <td><?=$pic->kecamatan;?></td>
                  <td><?=$pic->kelurahan;?></td>
                  <td><?=$pic->alamat;?></td>
                  
                  <td><a href="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/wajah/'.$pic->fotowajah;?>" width="100"></a></td>

                  <td><a href="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" target="_blank"><img src="<?=base_url().'assets/uploads/rumah/'.$pic->fotorumah;?>" width="100"></a></td>
                  
                  <td><?=$pic->keterangan;?></td>
                  </tr>
                <?php endforeach ?>
                </tbody>

                <tfoot>
                <tr>
                  <td>.......................</td>
                  <td></td>
                  <td>............................</td>
                  <td>............................</td>
                  <td></td>
                  <td>............................</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>............................</td>
                  <td></td>
                  <td></td>
                </tr>
                </tfoot>
              </table>
        </div>
    </div>
  </section>
