<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

 <?php echo $this->session->flashdata('alert_msg');?>
 
 <h1 class="page-header"><?=$judul ?></h1>

 <a href="<?php echo site_url('nilai/add_nilai'); ?>" class="btn btn-info">Tambah Nilai</a>
 <br><br>
 <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr class="danger">
        <th>id</th>
        <th>nilai</th>
        <th>mapel</th>
        <th>siswa</th>
        <th colspan="2" style="
        text-align: center;
        ">aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_nilai as $key => $value){?>
      <tr>
        <td class="danger"><?= $value->id_nilai ?></td>
        <td class="info"><?= $value->total_nilai?></td>
        <td class="warning"><?= $value->nama_mapel ?></td>
        <td class="danger"><?= $value->nama_siswa ?></td>
        <td style ="text-align: center;"  class="success">
          <a href="<?php echo site_url('nilai/edit/'. $value->id_nilai); ?>" class="btn btn-warning">click to edit</a>
          <a href="<?php echo site_url('nilai/hapus/'. $value->id_nilai); ?>" class="btn btn-danger" onclick = "return confirm('apakah anda yakin ingin menghapus field ini ??')">click to delete</a>
        </td>
      </tr>
      <?php } ?> <!-- tutup foreach -->
    </tbody>
  </table>
</div>
</div>