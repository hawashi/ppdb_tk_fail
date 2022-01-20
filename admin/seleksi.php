<!-- Page Heading -->
<h1 class="mb-2 text-gray-900 text-center">Data Seleksi</h1>

<div class="card shadow mb-4">
<div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Datatables selection</h6>
        </div>
  <div class="card-body">
    <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%">
      <thead>
          <tr>
        <th>Nama Lengkap</th>
        <th>Tempat lahir</th>
        <th>Tanggal lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Nama Orang Tua</th>
        <th>No Hp Orang Tua</th>
        <th>No Kartu Keluarga</th>
        <th>Program</th>
        <th>Aksi</th>
      </tr>
</thead>
<tbody>
      <?php foreach($pendaftar as $pdtr) : ?>
        <tr>
          <td><?php echo $pdtr['nama_lengkap'] ?></td>
          <td><?php echo $pdtr['tempat_lahir'] ?></td>
          <td><?php echo $pdtr['tgl_lahir'] ?></td>
          <td><?php echo $pdtr['jenis_kelamin'] ?></td>
          <td><?php echo $pdtr['alamat'] ?></td>
          <td><?php echo $pdtr['agama'] ?></td>
          <td><?php echo $pdtr['nama_ortu'] ?></td>
          <td><?php echo $pdtr['no_hp'] ?></td>
          <td><?php echo $pdtr['no_kk'] ?></td>
          
         
        <td>
          <form action="" method="post">
            <input type="hidden" name="id_pdtr[]" value="<?php echo $pdtr['id_user'] ?>">
            
            <select name="terima_msk[]" id="" class="form-control">
              <?php foreach($program as $jrs) : ?>
                <option value="<?php echo $jrs['nama_program'] ?>"><?php echo $jrs['nama_program'] ?></option>
              <?php endforeach ?>
            </select>
            
              </td>
          <td>
        
              <button type="submit" name="terima" class="btn btn-primary pull-right" ><i class="fa fa-edit"></i>  Terima</button>
              <?php endforeach ?>
            </form>
          </td>
        </tr>
              </tbody>
    </table>
    </div>
  </div>
</div>

