<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg');?>

  <h1 class="page-header"><?=$judul?></h1>

  <form class="form-horizontal" method="POST" action="<?php echo site_url('mapel/act_edit'); ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        Mapel 	:
      </label>
      <div class="col-sm-4">
        <input type="hidden" name="id_mapel" value="<?=$data_mapel->id_mapel?>" class="form-control" readonly>
        <input type="text" name="nama_mapel" value="<?=$data_mapel->nama_mapel?>" class="form-control" id="inputEmail3" placeholder="Masukkan mapel" required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">
        guru  :
      </label>
      <div class="col-sm-4">
       <select class="form-control" name="id_guru"> <option value="">--pilih guru--</option>
       <?php foreach ($data_guru as $key => $value):?>
          <?php 
          if ($value->id_guru == $data_mapel->id_guru) {
           $selected = 'selected';
         }
         else
         {
          $selected = '';
        }
        ?>
        <option value="<?=$value->id_guru?>" <?=$selected?> > <?=$value->nama_guru?></option>
      <?php endforeach ?>
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('mapel')?>" class="btn btn-info">Kembali</a>
  </div>
</div>
</form>


</div>