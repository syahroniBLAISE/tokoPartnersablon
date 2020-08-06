<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption"><i class="icon-edit"></i>Galery</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="btn-group">
						<!-- <a  class="btn green" href="#form_modal10" data-toggle="modal">Add New <i class="icon-plus"></i></a>  -->
						<a  class="btn green" href="/adminHome/halamanTambahGalery/" data-toggle="modal">Add New <i class="icon-plus"></i></a> 
					</div>
					<!-- sesion mesage -->
				</div>
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama File Galery</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						if (count($galery)>0) {
							foreach ($galery as $galery) { ?>
						<tr >
							<td><?php echo $no;?></td>
							<td><?php echo $galery['nama_gambar'];?></td>
							<td>
								<a class="btn green" href="/adminHome/halamanEditGalery/<?php echo $galery['id'];?>"><i class="icon-edit"></i> Edit</a>
								<a class="btn red" href="/adminHome/deleteGalery/<?php echo $galery['id'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $galery['nama_gambar'];?>?')"><i class="icon-trash"></i> Delete</a>
							</td>
						</tr>
						<?php
						$no++;}}
						else { ?>
						<tr>
							<td colspan="4">No Result Data</td>
						</tr>
						<?php }; ?>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</div>

<!-- Halaman Tambah Kategori -->

<div id="form_modal10" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h3 id="myModalLabel10">Add Galery</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
			<div class="form-horizontal">
			
				<div class="control-group">
					<label class="control-label">Nama galery</label>
					<div class="controls">
						<input class="span8 m-wrap" name="nama_kategori" id="nama_kategori" type="text" value=""  />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		<button class="btn green btn-primary" id="simpan" >Save</button>
	</div>
</div>

<!-- Akhir Halaman Kategori -->


				


<script type="text/javascript">
	// $(document).ready(function(){

	// 	$("#simpan").click(function(){
	// 		var nama_kategori = $("#nama_kategori").val();
	// 		console.log('ok');

	// 		$.ajax({

	// 			type:"POST",
	// 			url:"/adminToko/kategori_simpan",
	// 			data:"nama_kategori="+nama_kategori,
	// 			success:function(data) {
	// 				if(data=="1") {
	// 					alert("Nama Kategori Sudah Ada");
	// 				}
	// 				else {
						
	// 					window.location.reload();
	// 				}
	// 			}

	// 		});

	// 	});

	// });
</script>