<h1 class="mb-2 text-gray-900 text-center">Data Terima</h1>
<div class="card shadow mb-4">
<div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Datatables selection</h6>
        </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable">
      <thead>
      <tr>
      <th>Nama Lengkap</th>
        <th>Tempat lahir</th>
        <!-- <th>Tanggal lahir</th> -->
        <!-- <th>Jenis Kelamin</th> -->
        <th>Alamat</th>
        <th>Agama</th>
        <th>Nama Orang Tua</th>
        <th>No Hp Orang Tua</th>
        <th>No Kartu Keluarga</th>
        <th>Program</th>
      </tr>
</thead>
<tbody>
    <?php foreach($terima as $trm) : ?>
        <tr>
            <td><?php echo $trm['nama_lengkap'] ?></td>
            <td><?php echo $trm['tempat_lahir'] ?></td>
            <!-- <td><?php echo $trm['tgl_lahir'] ?></td> -->
            <!-- <td><?php echo $trm['jenis_kelamin'] ?></td> -->
            <td><?php echo $trm['alamat'] ?></td>
            <td><?php echo $trm['agama'] ?></td>
            <td><?php echo $trm['nama_ortu'] ?></td>
            <td><?php echo $trm['no_hp'] ?></td>
            <td><?php echo $trm['no_kk'] ?></td>
            <td><?php echo $trm['program'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
    </table>
  </div>
</div>
    </div>