<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg');?>

  <h1 class="page-header"><?=$judul?></h1>

  <form class="form-horizontal" method="POST" action="<?php echo site_url('kelas/act_edit'); ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        Kelas 	:
      </label>
      <div class="col-sm-4">
        <input type="hidden" name="id_kelas" value="<?=$data_kelas->id_kelas?>" class="form-control" readonly>
        <input type="text" name="nama_kelas" value="<?=$data_kelas->nama_kelas?>" class="form-control" id="inputEmail3" placeholder="Masukkan Kelas" required="required">
      </div>
    </div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('kelas')?>" class="btn btn-info">Kembali</a>
  </div>
</div>
</form>


</div>