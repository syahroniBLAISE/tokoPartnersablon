<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption"><i class="icon-edit"></i>Transaksi Telah Proses</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="btn-group">	
					</div>
				</div>
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Transaksi</th>
							<th>Nama Penerima</th>
							<th>Email</th>
							<th>Alamat</th>
							<th>No Telp</th>
							<th>Propinsi</th>
							<th>Kota</th>
							<th>Kode Pos</th>
							<th>Bank</th>
							<th>Jasa Pengiriman</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						if (count($data_transaksi)>0) {
							foreach ($data_transaksi as $data_transaksi) { 
								?>
						<tr >
							<td><?php echo $no;?></td>
							<td><?php echo $data_transaksi['kode_transaksi'];?></td>
							<td><?php echo $data_transaksi['penerima'];?></td>
							<td><?php echo $data_transaksi['email'];?></td>
							<td><?php echo $data_transaksi['alamat'];?></td>
							<td><?php echo $data_transaksi['no_telepon'];?></td>
							<td><?php echo $data_transaksi['propinsi'];?></td>
							<td><?php echo $data_transaksi['kota'];?></td>
							<td><?php echo $data_transaksi['kode_pos'];?></td>
							<td><?php echo $data_transaksi['nama_bank'];?></td>
							<td><?php echo $data_transaksi['nama'];?></td>
							
							<td>
							<a class="btn blue" href="/adminToko/semua_transaksi_detail/<?php echo $data_transaksi['id_transaksi_header'];?>/<?php echo $data_transaksi['kode_transaksi'];?>"><i class="icon-search"></i> Detail</a>
							</td>
						</tr>
							<?php
							$no++;
							}}; ?>

						
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
				</div>
				
