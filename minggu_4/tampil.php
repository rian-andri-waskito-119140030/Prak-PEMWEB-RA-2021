<?php
include '119140030_koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$result = array();
while($fetchData = mysqli_fetch_array($sql)){
	$result[] = $fetchData;
}
echo json_encode($result);

?>