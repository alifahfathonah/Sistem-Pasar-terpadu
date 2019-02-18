<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="card">
    <div class="card-body">
      <?php echo $this->session->flashdata('msg');?>
      <a href="<?php echo base_url()?>Pedagang/tambah_pedagang" class="btn btn-outline-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
      <hr/>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Posisi</th>
              <th>No Los</th>
              <th>Status Bangunan</th>
              <th>Los</th>
              <th>Jenis Dagangan</th>
              <th>info Kontak</th>
              <th>Keterangan</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($result as $item){ ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $item->nama_pedagang ?></td>
                <td><?php echo $item->block ?></td>
                <td><?php echo $item->no_kios ?></td>
                <td><?php echo $item->status_bangunan ?></td>
                <td><?php echo $item->loss ?></td>
                <td><?php echo $item->jenis_dagangan ?></td>
                <td><?php echo $item->no_kontak ?></td>
                <td><?php echo $item->keterangan ?></td>
                <td>
                  <a href="<?php echo base_url()?>Pedagang/hapus_pedagang/<?php echo $item->id_kios?>" onclick="return confirm('Hapus Data ini Dari Database ?')" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
  </div>
</div>