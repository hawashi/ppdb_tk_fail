<?php

$conn = mysqli_connect("localhost", "root", "", "ppdb_tk");

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

function terima($data) {
    global $conn;
    $id = $data['id_pdtr'];
    $terima_msk = $data['terima_msk'];

    for ($i=0; $i < count($id) ; $i++) {
        $data = "SELECT * FROM pendaftar WHERE id_user = '$id[$i]' ";
        $result = mysqli_query($conn, $data);
        $result_fix = mysqli_fetch_assoc($result);
        $nama = $result_fix['nama_lengkap'];
        $id_sah = $result_fix['id_user'];
        $no_kk = $result_fix['no_kk'];
        $tempat_lahir = $result_fix['tempat_lahir'];
        // $tgl_lahir = $result_fix['tgl_lahir'];
        $alamat = $result_fix['alamat']; 
        $agama = $result_fix['agama']; 
        $nama_ortu = $result_fix['nama_ortu']; 
        $no_hp = $result_fix['no_hp']; 
        // $no_hp = $result_fix['no_hp']; 
        $program = $terima_msk[$i];   
        $insert = mysqli_query($conn, "INSERT INTO terima 
        VALUES('', '$nama','$id_sah', '$no_kk', '$tempat_lahir', '$alamat', '$agama', '$nama_ortu', '$no_hp', '$program' )");      
        $delete = mysqli_query ($conn, "DELETE FROM pendaftar WHERE id_user = '$id_sah'");
    }

    return mysqli_affected_rows($conn);



}

?>