<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg');?>

  <h1 class="page-header"><?=$judul?></h1>

  <form class="form-horizontal" method="POST" action="<?php echo site_url('siswa/act_edit'); ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        nama 	:
      </label>
      <div class="col-sm-4">
        <input type="hidden" name="id_siswa" value="<?=$data_siswa->id_siswa?>" class="form-control" readonly>
        <input type="text" name="nama_siswa" value="<?=$data_siswa->nama_siswa?>" class="form-control" id="inputEmail3" placeholder="Masukkan nama_siswa" required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">
        Alamat 	:
      </label>
      <div class="col-sm-4">
        <input type="text" name="alamat" value="<?=$data_siswa->alamat?>" class="form-control" id="inputPassword3" placeholder="Masukkan Alamat" required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">
        Kelas  :
      </label>
      <div class="col-sm-4">
       <select class="form-control" name="id_kelas"> <option value="">--pilih kelas--</option>
       <?php foreach ($data_kelas as $key => $value):?>
          <?php 
          if ($value->id_kelas == $data_siswa->id_kelas) {
           $selected = 'selected';
         }
         else
         {
          $selected = '';
        }
        ?>
        <option value="<?=$value->id_kelas?>" <?=$selected?> > <?=$value->nama_kelas?></option>
      <?php endforeach ?>
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('siswa')?>" class="btn btn-info">Kembali</a>
  </div>
</div>
</form>


</div>