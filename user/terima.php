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
                <h4>Kamu Sudah Diterima</h4>
              <?php foreach($terima as $trm) : ?>
                <p>
                    Selamat <?php echo $trm['nama_lengkap'] ?> Anak Anda Sudah Diterima Di SEKOLAH ISLAM BINA INSANI <br/>
                    pada program <?php echo $trm['program'] ?>
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