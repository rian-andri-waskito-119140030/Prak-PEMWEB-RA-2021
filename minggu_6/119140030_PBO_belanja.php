<?php 

class fruit{
	private $nama_buah,
			$jumlah_kg, 
			$harga_per_kg;
	
	// magic method
	function __construct($nama_buah=NULL, $harga_per_kg=NULL, $jumlah_kg=0){
		if( $nama_buah!=NULL && $harga_per_kg!=NULL ){
			$this->nama_buah = $nama_buah;
			$this->harga_per_kg = $harga_per_kg * $jumlah_kg;
			$this->jumlah_kg = $jumlah_kg;
		}
	}

	// getter
	function getNamaBuah(){
		return $this->nama_buah;
	}
	function getHargaBeli(){
		return $this->harga_per_kg;
	}
	function getJumlahBuah(){
		return $this->jumlah_kg;	
	}
}

class shoping{
	private static $listbelanja = array(), $totalHarga = 0, $iterasi = 0;

	// magic method
	function __construct( fruit $jenisBuah = NULL ){
		if ($jenisBuah != NULL) {
			self::$listbelanja[ self::$iterasi ] = $jenisBuah;
			self::$iterasi++;
			self::$totalHarga = self::$totalHarga + $jenisBuah->getHargaBeli();
		}
	}

	// getter
	function getIterasi(){
		return self::$iterasi;
	}
	function getNamaBuah($i=0){
		return self::$listbelanja[$i]->getNamaBuah();
	}
	function getHargaBeli($i=0){
		return self::$listbelanja[$i]->getHargaBeli();
	}
	function getJumlahBuah($i=0){
		return self::$listbelanja[$i]->getJumlahBuah();	
	}
	function getTotal(){
		return self::$totalHarga;
	}

}

// objek
$belanja = new shoping();
$jenisBuah = new fruit();

if( isset($_POST['pesan']) ){
	if( $_POST['mango'] != NULL && $_POST['guava'] != NULL && $_POST['snakefruit'] != NULL ){
		
		$jenisBuah = new fruit("mangga", 15000, $_POST['mango']);	
		$belanja = new shoping($jenisBuah);

		$jenisBuah = new fruit("jambu", 13000, $_POST['guava']);	
		$belanja = new shoping($jenisBuah);

		$jenisBuah = new fruit("salak", 10000, $_POST['snakefruit']);	
		$belanja = new shoping($jenisBuah);
	}
}

?>