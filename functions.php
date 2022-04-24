<?php
$conn = mysqli_connect("localhost","root","","cobanik");

//ambil data dari table di database/quer//y//
// var_dump($result); //
//kalau mau cek koneksi berhasil, simpan syntax mysqli_query ke dalam variabel, misal $result, lalu di cek pakai syntax vardump
//atau bisa juga pakai fungsi if 
//if(!$result) {
//echo mysqli_error($conn);
//};

//while($pelanggan = mysqli_fetch_assoc($result)) {
//        var_dump($pelanggan["ID Pelanggan"]);
//}
function query($query) {
    global $conn ;
    $result = mysqli_query($conn,$query); //result itu ibarat lemari pakaian
    $rows = []; //siapin wadah buat nampung baju yang mau diambil dari dalam lemari, jadi ga membawa semua lemari nya, sudah dipilah2
    while($row = mysqli_fetch_assoc($result)) { //ambil baju dari lemari namanya result, row = baju yang diambil dalam setiap  looping. jadi ambil baju, simpen di kotak rows, ambil baju, simpan di kotak rows, dst/looping.
            $rows[] = $row; //simpan baju yang diambil tadi ke dalam kotak kosong namanya rows
        }

        return $rows ;
}
?>

