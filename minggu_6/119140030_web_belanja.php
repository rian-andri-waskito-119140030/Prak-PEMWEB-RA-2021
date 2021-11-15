<head>
	<title> Daftar Belanja 119140030 </title>
	<link rel="stylesheet" type="text/css" href="119140030_style.css">
</head>
<body>
	<h1 align="center">Daftar Belanja 119140030</h1>
	<hr>

	<center>
		<form method="POST" onsubmit="hasil()">
			<table>
				<thead>
					<tr>
						<td colspan="3" align="center" width="500px" class="title">Jumlah buah yang dibeli</td>
					</tr>
					<tr align="center" class="judul">
						<td >Nama Buah</td>
						<td >Harga per Kilo</td>
						<td >Jumlah(kg) </td>
					</tr>
				</thead>
				<tbody>
						<tr align="center">
							<td><label >mangga</label></td>
							<td><label >Rp. 15.000</label></td>
							<td><input type="number" min="0" name="mango" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>
						<tr align="center">
							<td><label >jambu</label></td>
							<td><label >Rp. 13.000</label></td>
							<td><input type="number" min="0" name="guava" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>
						<tr align="center">
							<td><label >salak</label></td>
							<td><label >Rp. 10.000</label></td>
							<td><input type="number" min="0" name="snakefruit" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>
				</tbody>
			</table>
			<button name="pesan" id="btn" >Pesan</button>
		</form>
		
		<table>
			<thead>
				<tr>
					<td colspan="3" align="center" width="500px" class="title" >Daftar Belanja dan Total Belanja</td>
				</tr>
				<tr align="center" class="judul">
					<td>Nama Buah</td>
					<td>Jumlah(kg) </td>
					<td>Harga(Rupiah)</td>
				</tr>
			</thead>
			<tbody id="cetak" align="center">
				
			</tbody>
		</table>
	</center>
</body>

<?php include('119140030_PBO_belanja.php') ?>

<script type="text/javascript">
	function hasil() {
		var tulis = document.getElementById('cetak');
		var text ="";

		<?php for ($i=0; $i < $belanja->getIterasi(); $i++) {  ?>

			var nama_buah = '<?php echo $belanja->getNamaBuah($i); ?>';
			var jml_kg = '<?php echo $belanja->getJumlahBuah($i); ?>';
			var harga_buah = '<?php echo $belanja->getHargaBeli($i); ?>';
			text += " <tr> <td> "+nama_buah+"</td> "+" <td> "+jml_kg+"</td> "+" <td> "+harga_buah+"</td> </tr>";
			
		<?php } ?>

		var total = <?php echo $belanja->getTotal(); ?>	
		text += "<tr> <td></td> <td>Total</td> <td>"+total+"</td> </tr>"

		tulis.innerHTML = text;

	}
	hasil();
</script>