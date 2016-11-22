<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<?php echo $this->session->flashdata('alert_msg');?>

  <h1 class="page-header"><?=$judul?></h1>

  <form class="form-horizontal" method="POST" action="<?php echo site_url('nilai/act_edit'); ?>">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        Nilai 	:
      </label>
      <div class="col-sm-4">
        <input type="hidden" name="id_nilai" value="<?=$data_nilai->id_nilai?>" class="form-control" readonly>
        <input type="text" name="total_nilai" value="<?=$data_nilai->total_nilai?>" class="form-control" id="inputEmail3" placeholder="Masukkan Nilai" required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">
        Mapel  :
      </label>
      <div class="col-sm-4">
       <select class="form-control" name="id_mapel"> <option value="">--pilih mapel--</option>
       <?php foreach ($data_mapel as $key => $value):?>
          <?php 
          if ($value->id_mapel == $data_nilai->id_mapel) {
           $selected = 'selected';
         }
         else
         {
          $selected = '';
        }
        ?>
        <option value="<?=$value->id_mapel?>" <?=$selected?> > <?=$value->nama_mapel?></option>
      <?php endforeach ?>
    </select>
  </div>
</div>

 <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">
        Siswa  :
      </label>
      <div class="col-sm-4">
       <select class="form-control" name="id_siswa"> <option value="">--pilih siswa--</option>
       <?php foreach ($data_siswa as $key => $value):?>
          <?php 
          if ($value->id_siswa == $data_nilai->id_siswa) {
           $selected = 'selected';
         }
         else
         {
          $selected = '';
        }
        ?>
        <option value="<?=$value->id_siswa?>" <?=$selected?> > <?=$value->nama_siswa?></option>
      <?php endforeach ?>
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('nilai')?>" class="btn btn-info">Kembali</a>
  </div>
</div>
</form>


</div>