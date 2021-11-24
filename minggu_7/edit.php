<?php 
include '119140030_koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$levelk = $_POST['levelk'];
$elemen = $_POST['elemen'];
$equipment = $_POST['equipment'];

if (!($nama=='' || $levelk=='' || $elemen=='' || $equipment=='')) {
	$sql = mysqli_query($koneksi,"UPDATE karakter SET nama ='$nama', levelk ='$levelk', elemen ='$elemen', equipment ='$equipment' WHERE levelk = '$id' ");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Ubah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Ubah Data";
}
echo json_encode($result);


?>