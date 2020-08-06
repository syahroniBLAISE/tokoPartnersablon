<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Slider</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										
										<a  class="btn green" href="/adminToko/slider_tambah" >
													Add New <i class="icon-plus"></i>
													</a> 
									</div>
									<?php 
									
													if (session()->getFlashdata('message')){
														echo "<div class='alert alert-block alert-error show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Slider Berhasil Dihapus</span>
																</div>";
													}
													else if(session()->getFlashdata('berhasil')){
														echo "<div class='alert alert-block alert-success show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Slider Berhasil Disimpan</span>
																</div>";
													}
													else if(session()->getFlashdata('update')){
														echo "<div class='alert alert-block alert-success show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Slider Berhasil Diupdate</span>
																</div>";
													}
												
							?>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>No</th>
											<th>Tittle</th>
											<th>Status</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										if (count($data_slider)>0) {
											foreach ($data_slider as $tampil) { ?>
										<tr >
											<td><?php echo $no;?></td>
											<td><?php echo $tampil['tittle'];?></td>
											<td>
												<?php
												if ($tampil['status']=="0") {
													echo "Tidak Aktif";
												}
												else {
													echo "Aktif";
												}
												?>
											</td>
											

											
											<td><a class="btn green" href="/adminToko/slider_edit/<?php echo $tampil['id_slider'];?>"><i class="icon-edit"></i> Edit</a>
											<a class="btn red" href="/adminToko/slider_delete/<?php echo $tampil['id_slider'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['tittle'];?>?')"><i class="icon-trash"></i> Delete</a>


										</td>
										</tr>
										<?php
										$no++;
										}
										}
										
										else { ?>
										<tr>
											<td colspan="4">No Result Data</td>
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

				


				

