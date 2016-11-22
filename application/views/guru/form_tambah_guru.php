<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg');?>

<h1 class="page-header"><?=$judul?></h1>

<form class="form-horizontal" method="POST" action="<?php echo site_url('guru/act_tambah'); ?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">
    Nama 	:
    </label>
    <div class="col-sm-4">
      <input type="text" name="nama_guru" class="form-control" id="inputEmail3" placeholder="Masukkan Nama">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">
    Alamat 	:
    </label>
    <div class="col-sm-4">
      <input type="text" name="alamat" class="form-control" id="inputPassword3" placeholder="Masukkan Alamat">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('guru')?>" class="btn btn-info">Kembali</a>
    </div>
  </div>
</form>


</div>