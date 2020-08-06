<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Bank</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										
										<a  class="btn green" href="<?php echo base_url();?>adminweb/bank_tambah" >
													Add New <i class="icon-plus"></i>
													</a> 
									</div>
									<?php 
									
													if (session()->getFlashdata('message')){
														echo "<div class='alert alert-block alert-error show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Bank Berhasil Dihapus</span>
																</div>";
													}
													else if(session()->getFlashdata('berhasil')){
														echo "<div class='alert alert-block alert-success show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Bank Berhasil Disimpan</span>
																</div>";
													}
													else if(session()->getFlashdata('update')){
														echo "<div class='alert alert-block alert-success show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Bank Berhasil Diupdate</span>
																</div>";
													}
												
							?>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Bank</th>
											<th>Nama Pemilik</th>
											<th>No Rekening</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										if (count($data_bank)>0) {
											// foreach ($data_bank->result_array() as $tampil) { ?>
										<tr >
											<td><?php echo $no;?></td>
											<td><?php echo $data_bank['nama_bank'];?></td>
											<td><?php echo $data_bank['nama_pemilik'];?></td>
											<td><?php echo $data_bank['no_rekening'];?></td>
											
											<td><a class="btn green" href="<?php echo base_url();?>adminweb/bank_edit/<?php echo $data_bank['id_bank'];?>"><i class="icon-edit"></i> Edit</a>
											<a class="btn red" href="<?php echo base_url();?>adminweb/bank_delete/<?php echo $data_bank['id_bank'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $data_bank['nama_bank'];?>?')"><i class="icon-trash"></i> Delete</a>


										</td>
										</tr>
										<?php
										$no++;
										}
										// }
										
										else { ?>
										<tr>
											<td colspan="5">No Result Data</td>
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

				


				


