<?php if(empty($p_user)) : ?>
      <section class="content">
        
        <div class="card shadow">
            <div class="card-header bg-success font-weight-bold text-light">
              <i class="fa fa-user-plus"></i>  <span>Formulir Pendaftaran</span>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_lengkap">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Tempat lahir</label>
                                <input autocomplete="off" type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Tanggal lahir</label>
                            <input autocomplete="off" type="date"  class="form-control" name="tgl_lahir">
                        </div>
                        <div class="col-md-6">
                            <label for="">Alamat</label>
                            <input autocomplete="off" type="text" class="form-control" name="alamat">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Jenis_kelamin</label>
                            <select id="" class="form-control" name="jenis_kelamin">
                               <option value="Laki-laki">Laki-laki</option>
                               <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Agama</label>
                            <select id="" class="form-control" name="agama">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6">
                            <label for="">No Kartu Keluarga</label>
                            <input autocomplete="off" type="text"  class="form-control" name="no_kk">
                        </div>
                        <div class="col-md-6">
                            <label for="">Program</label>
                            <select id="" class="form-control" name="program">
                                <?php foreach($program as $jrs) : ?>
                                        <option value="<?php echo $jrs['nama_program'] ?>"><?php echo $jrs['nama_program'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Nama Orang tua / Wali</label>
                            <input autocomplete="off" type="text"  class="form-control" name="nama_ortu">
                        </div>
                        <div class="col-md-6">
                            <label for="">No Hp / WA</label>
                            <input autocomplete="off" type="number" class="form-control" name="no_hp">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Foto Kartu Keluarga</label>
                            <input autocomplete="off" type="file"  class="form-control" name="foto_kk">
                        </div>
                        <div class="col-md-6">
                            <label for="">Foto Akte kelahiran</label>
                            <input autocomplete="off" type="file" class="form-control" name="foto_akte">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Foto Anak</label>
                            <input autocomplete="off" type="file"  class="form-control" name="foto_anak">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3" name="daftar"><i class="fa fa-edit"></i> Daftar</button>
                </form>
            </div>
        </div>

    </section>

    <?php elseif(!empty($j_usr_tolak)) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">  
                <h4>Kamu Ditolak</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Kamu Ditolak Karena Nilai Terlalu Rendah, Silahkan Logout <br/>
                  <a href="../../logout.php">Logout ?</a>
                </p>
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div> 

    <?php elseif(!empty($j_user)) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">  
                <h4>Kamu Sudah Mendaftar</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Mendaftar Pada Program <?php echo $usr['program'] ?>  
                </p>
                <!-- <p>
                  Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Mendaftar Pada Jurusan <?php echo $usr['jurusan_1'] ?> Dan <?php echo $usr['jurusan_2'] ?> <br/>
                  Dan Direkomendasikan Masuk Jurusan <?php echo $usr['jurusan_rekomendasi'] ?> 
                </p> -->
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php endif ?>
    

