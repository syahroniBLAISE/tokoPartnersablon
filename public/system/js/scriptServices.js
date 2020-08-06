$(function(){
	// 
	$('.detail').on('click', function(){
		const jdl = $(this).data('judul');
		const id = $(this).data('id');
		$('#labelDetail').html(id);

		$.ajax({ 
			url : 'http://localhost/newpartnersablon/order/detail',
			data : {id : id},
			method : 'post',
			dataType : 'json',

			success: function(data) {
				console.log(data);
				const judul = document.getElementById('judulDetail');
				judul.innerHTML = data.judul_detail;
				const keterangan = document.getElementById('keteranganDetail');
				keterangan.innerHTML = data.keterangan_detail;
				
			}
		});

	});
});

$(function(){
	// 
	$('.order').on('click', function(){
		const jdl = $(this).data('judul');
		const id = $(this).data('id');
		$('#labelDetail').html(id);

		$.ajax({ 
			url : 'http://localhost/newpartnersablon/order/detail',
			data : {id : id},
			method : 'post',
			dataType : 'json',

			success: function(data) {
				console.log(data);
				const judul = document.getElementById('judulOrder');
				judul.innerHTML = data.judul_detail;
				const keterangan = document.getElementById('test');
				const box = document.getElementById('box');
				keterangan.innerHTML = box.innerHTML  ;
				console.log(box);
				
			}
		});

	});
});