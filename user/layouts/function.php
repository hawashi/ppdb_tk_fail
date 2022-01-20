<?php
$conn = mysqli_connect("localhost", "root", "", "ppdb_tk");
date_default_timezone_get();

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

    function daftar($data) {
        global $conn;
        
        $nama = !empty($data['nama_lengkap']) ? $data['nama_lengkap'] : '';
        // $nama ??= $data['nama_lengkap'];
        $tempat_lahir = !empty($data['tempat_lahir']) ? $data['tempat_lahir'] : '';
        // $tempat_lahir = $data['tempat_lahir'];
        $tgl_lahir = !empty($data['tgl_lahir']) ? $data['tgl_lahir'] : '';
        // $tgl_lahir = $data['tgl_lahir'];
        $no_kk = !empty($data['no_kk']) ? $data['no_kk'] : '';
        // $no_kk = $data['no_kk'];
        $alamat = !empty($data['alamat']) ? $data['alamat'] : '';
        // $alamat = $data['alamat'];
        $jenis_kelamin = !empty($data['jenis_kelamin']) ? $data['jenis_kelamin'] : '';
        // $jenis_kelamin = $data['jenis_kelamin'];
        $agama = !empty($data['agama']) ? $data['agama'] : '';
        // $agama = $data['agama'];
        $nama_ortu = !empty($data['nama_ortu']) ? $data['nama_ortu'] : '';
        // $nama_ortu = $data['nama_ortu'];
        $no_hp = !empty($data['no_hp']) ? $data['no_hp'] : '';
        // $no_hp = $data['no_hp'];
        // $foto_kk = $data['foto_kk'];
        $program = !empty($data['nama_program']) ? $data['nama_program'] : '';
        // $program =strtolower($data['program']);
        // $jurusan_2 = strtolower($data['jurusan_2']);
        $foto_kk = !empty($data['foto_kk']) ? $data['foto_kk'] : '';
        $foto_akte = !empty($data['foto_akte']) ? $data['foto_akte'] : '';
        $foto_anak = !empty($data['foto_anak']) ? $data['foto_anak'] : '';
        $id_user = $_SESSION['id_user'];
        $no_kk = $_SESSION['no_kk'];
        $nama_user = $_SESSION['nama'];
        $tgl_daftar = date('Y-m-d H:m:s');
        
        //upload foto kk
        $ekstensi_diperbolehkan	= array('png','jpg');
        $foto_kk = $_FILES['foto_kk']['name'];
        $x = explode('.', $foto_kk);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto_kk']['size'];
        $file_tmp = $_FILES['foto_kk']['tmp_name'];
        //upload foto akte
        $ekstensi_diperbolehkan	= array('png','jpg');
        $foto_akte = $_FILES['foto_akte']['name'];
        $x = explode('.', $foto_akte);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto_akte']['size'];
        $file_tmp = $_FILES['foto_akte']['tmp_name'];
        //upload foto anak
        $ekstensi_diperbolehkan	= array('png','jpg');
        $foto_anak = $_FILES['foto_anak']['name'];
        $x = explode('.', $foto_anak);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto_anak']['size'];
        $file_tmp = $_FILES['foto_anak']['tmp_name'];

       
            $stat = 'Menunggu Keputusan';
        // }

        // elseif($nilai < 60) {
        //     $jr = null;
        //     $stat = "Ditolak";
        // }
             //cek file
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 9999999){			
                move_uploaded_file($file_tmp, '../../file/'.$foto_kk);
                move_uploaded_file($file_tmp, '../../file/'.$foto_akte);
                move_uploaded_file($file_tmp, '../../file/'.$foto_anak);
                $q_insert = "INSERT INTO pendaftar VALUES (null, '$id_user', '$nama', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$alamat', '$agama', '$nama_ortu', '$no_hp', '$no_kk', '$stat', '$tgl_daftar', '$program', '$foto_kk', '$foto_akte', '$foto_anak') ";
                $insert = mysqli_query($conn, $q_insert);
        //         // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
                if($insert){
                    echo 'FILE BERHASIL DI UPLOAD';
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
        // Input --> DB
        // $jurusan_1 = strtolower($data['jurusan_1']); 
        // $jurusan_2 = strtolower($data['jurusan_2']);
        // $q_insert = "INSERT INTO pendaftar VALUES (null, '$id_user', '$nama', '$tempat_lahir', '$tgl_lahir', '$no_kk', '$alamat', '$jenis_kelamin', '$agama', '$nama_ortu', '$no_hp', '$program', '$stat', '$tgl_daftar') ";
        // $insert = mysqli_query($conn, $q_insert);

        return mysqli_affected_rows($conn);

    }



?>