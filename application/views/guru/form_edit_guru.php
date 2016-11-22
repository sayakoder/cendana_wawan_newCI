<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg');?>

  <h1 class="page-header"><?=$judul?></h1>

  <form class="form-horizontal" method="POST" action="<?php echo site_url('guru/act_edit'); ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        Nama 	:
      </label>
      <div class="col-sm-4">
        <input type="hidden" name="id_guru" value="<?=$data_guru->id_guru?>" class="form-control" readonly>
        <input type="text" name="nama_guru" value="<?=$data_guru->nama_guru?>" class="form-control" id="inputEmail3" placeholder="Masukkan Nama" required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">
        Alamat 	:
      </label>
      <div class="col-sm-4">
        <input type="text" name="alamat" value="<?=$data_guru->alamat?>" class="form-control" id="inputPassword3" placeholder="Masukkan Alamat" required="required">
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