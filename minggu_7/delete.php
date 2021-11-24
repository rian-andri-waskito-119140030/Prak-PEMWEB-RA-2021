<?php 
include '119140030_koneksi.php';

$id = $_POST['levelk'];
$sql = mysqli_query($koneksi,"DELETE FROM karakter WHERE levelk = '$id' ");
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>