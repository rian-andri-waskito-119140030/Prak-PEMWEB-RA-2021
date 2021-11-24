$(document).ready(function(){
	var dataHasil = 0;
	tampil();

	$('.btn-tambah').click(function(){
		tambah();
	});
	
	$('.btn-batal').click(function(){
		tampil();
		reset();
	});

	$('.btn-ubah').click(function(){
		edit(dataHasil);
	});

	function tampil(){
		$('.targetData').html('');

		$('.btn-tambah').show();
		$('.btn-ubah').hide();
		$('.btn-batal').hide();
		$.ajax({
			type : 'GET',
			url : 'tampil.php',
			dataType : 'JSON',
			success : function(response){
				var i;
				var data = '';
				for( i=0; i<response.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td style="text-align: center;">`+response[i].nama+`</td>
					<td style="text-align: center;">`+response[i].levelk+`</td>
					<td style="text-align: center;">`+response[i].elemen+`</td>
					<td style="text-align: center;">`+response[i].equipment+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' id='`+response[i].levelk+`'>Ubah</button>
						<button class='btn-delete' id='`+response[i].levelk+`'>Hapus</button>
					</td>
					</tr>
					`
				}
				$('.targetData').append(data);

				$('.btn-edit').click(function(){
					tampil_data($(this).attr('id'));
				})

				$('.btn-delete').click(function(){
					hapus($(this).attr('id'));
				})
			}
		})
	}


	function tambah(){
		var levelk = $('.levelk').val();
		var nama = $('.nama').val();
		var elemen = $('.elemen').val();
		var equipment = $('.equipment').val();
		$.ajax({
			type : 'POST',
			url : 'tambah.php',
			data : 'levelk='+levelk+'&nama='+nama+'&elemen='+elemen+'&equipment='+equipment,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}

			}
		})
	}

	function tampil_data(x){
		$.ajax({
			type : 'POST',
			url : 'tampil_data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.levelk;
				$('.levelk').val(response.levelk);
				$('.nama').val(response.nama);
				$('.elemen').val(response.elemen);
				$('.equipment').val(response.equipment);

				$('.btn-tambah').hide();
				$('.btn-ubah').show();
				$('.btn-batal').show();
	
			}
		})
	}

	function edit(x){
		var id = x;
		var levelk = $('.levelk').val();
		var nama = $('.nama').val();
		var elemen = $('.elemen').val();
		var equipment = $('.equipment').val();
		$.ajax({
			type : 'POST',
			url : 'edit.php',
			data : 'id='+id+'&levelk='+levelk+'&nama='+nama+'&elemen='+elemen+'&equipment='+equipment,
			success : function(response){
				tampil();
				reset();
			}
		})
	}

	function hapus(x){
		$.ajax({
			type : 'POST',
			url : 'delete.php',
			data : 'levelk='+x,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}
			}
		})
	}

	function reset(){
		$('.levelk').val('');
		$('.nama').val('');
		$('.elemen').val('');
		$('.equipment').val('');
	}


});