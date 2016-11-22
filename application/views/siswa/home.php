<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

 <?php echo $this->session->flashdata('alert_msg');?>
 
 <h1 class="page-header"><?=$judul ?></h1>

 <a href="<?php echo site_url('siswa/add_siswa'); ?>" class="btn btn-info">Tambah Siswa</a>
 <br><br>
 <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr class="danger">
        <th>id</th>
        <th>nama</th>
        <th>alamat</th>
        <th>kelas</th>
        <th colspan="2" style="
        text-align: center;
        ">aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_siswa as $key => $value){?>
      <tr>
        <td class="danger"><?= $value->id_siswa ?></td>
        <td class="info"><?= $value->nama_siswa?></td>
        <td class="warning"><?= $value->alamat ?></td>
        <td class="danger"><?= $value->nama_kelas ?></td>
        <td style ="text-align: center;"  class="success">
          <a href="<?php echo site_url('siswa/edit/'. $value->id_siswa); ?>" class="btn btn-warning">click to edit</a>
          <a href="<?php echo site_url('siswa/hapus/'. $value->id_siswa); ?>" class="btn btn-danger" onclick = "return confirm('apakah anda yakin ingin menghapus field ini ??')">click to delete</a>
        </td>
      </tr>
      <?php } ?> <!-- tutup foreach -->
    </tbody>
  </table>
</div>
</div>