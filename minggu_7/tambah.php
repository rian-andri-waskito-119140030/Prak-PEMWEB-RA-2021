<?php 
include '119140030_koneksi.php';

$nama = $_POST['nama'];
$levelk = $_POST['levelk'];
$elemen = $_POST['elemen'];
$equipment = $_POST['equipment'];

if(!($nama=='' || $levelk=='' || $elemen=='' || $equipment=='')){
	$sql = mysqli_query($koneksi,"INSERT INTO karakter VALUES('$nama','$levelk','$elemen','$equipment')");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>