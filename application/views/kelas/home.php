<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

 <?php echo $this->session->flashdata('alert_msg');?>
 
 <h1 class="page-header"><?=$judul ?></h1>

 <a href="<?php echo site_url('kelas/add_kelas'); ?>" class="btn btn-info">Tambah kelas</a>
 <br><br>
 <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr class="danger">
        <th>id</th>
        <th>kelas</th>
        <th colspan="2" style="
        text-align: center;
        ">aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_kelas as $key => $value){?>
      <tr>
        <td class="danger"><?= $value->id_kelas ?></td>
        <td class="info"><?= $value->nama_kelas?></td>


        <td style ="text-align: center;"  class="success">
          <a href="<?php echo site_url('kelas/edit/'. $value->id_kelas); ?>" class="btn btn-warning">click to edit</a>
          <a href="<?php echo site_url('kelas/hapus/'. $value->id_kelas); ?>" class="btn btn-danger" onclick = "return confirm('apakah anda yakin ingin menghapus field ini ??')">click to delete</a>
        </td>
      </tr>
      <?php } ?> <!-- tutup foreach -->
    </tbody>
  </table>
</div>
</div>