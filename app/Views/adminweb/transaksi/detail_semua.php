<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Transaksi Detail</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										
										
									</div>
								
								</div>
								<table class="table table-striped table-hover table-bordered" >
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
											
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										if (count($data_header)>0) {
											foreach ($data_header as $tampil) { ?>
										<tr >
											<td><?php echo $no;?></td>
											<td><?php echo $tampil['kode_transaksi'];?></td>
											<td><?php echo $tampil['penerima'];?></td>
											<td><?php echo $tampil['email'];?></td>
											<td><?php echo $tampil['alamat'];?></td>
											<td><?php echo $tampil['no_telepon'];?></td>
											<td><?php echo $tampil['propinsi'];?></td>
											<td><?php echo $tampil['kota'];?></td>
											<td><?php echo $tampil['kode_pos'];?></td>
											<td><?php echo $tampil['nama_bank'];?></td>
											<td><?php echo $tampil['nama'];?></td>
											
											
										</tr>
										<?php
										$no++;
										}
										}
										
										else { ?>
										<tr>
											<td colspan="11">No Result Data</td>
										</tr>
										<?php

										}
										?>
										
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
				</div>


<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Transaksi Produk</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										
										
									</div>
								
								</div>
								<table class="table table-striped table-hover table-bordered" >
									<thead>
										<tr>
											<th>No</th>
											<th>Kode Transaksi</th>
											<th>Kode Produk</th>
											<th>Nama Produk</th>
											<th>Harga</th>
											<th>Jumlah</th>
											
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										if (count($data_detail)>0) {
											foreach ($data_detail as $tampil) { ?>
										<tr >
											<td><?php echo $no;?></td>
											<td><?php echo $tampil['kode_transaksi'];?></td>
											<td><?php echo $tampil['kode_produk'];?></td>
											<td><?php echo $tampil['nama_produk'];?></td>
											<td><?php echo $tampil['harga'];?></td>
											<td><?php echo $tampil['jumlah'];?></td>
											
											
										</tr>
										<?php
										$no++;
										}
										}
										
										else { ?>
										<tr>
											<td colspan="6">No Result Data</td>
										</tr>
										<?php

										}
										?>
										
									</tbody>


								</table>

								<?php 
								foreach ($data_total as $value) {
									$total  =  $value['total'];
								}
								?>

								Total Transaksi =  <?php echo $total;?>
							</div>
						</div>
						<a href="/adminToko/semua_transaksi" class="btn">Kembali</a>
					</div>
				</div>

				


				




				


				


