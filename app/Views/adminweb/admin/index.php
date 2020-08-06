<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption"><i class="icon-edit"></i>Admin</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>	
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="btn-group">
						<a  class="btn green" href="/adminToko/admin_tambah" >Add New <i class="icon-plus"></i>
						</a> 
					</div>
					<?php 
					{{if (session()->getFlashdata('message')){
						echo "<div class='alert alert-block alert-error show'>
								<button type='button' class='close' data-dismiss='alert'>×</button>
									<span>Admin Berhasil Dihapus</span>
								</div>";
					}
					else if(session()->getFlashdata('berhasil')){
						echo "<div class='alert alert-block alert-success show'>
								<button type='button' class='close' data-dismiss='alert'>×</button>
									<span>Admin Berhasil Disimpan</span>
								</div>";
					}
					else if(session()->getFlashdata('update')){
						echo "<div class='alert alert-block alert-success show'>
								<button type='button' class='close' data-dismiss='alert'>×</button>
									<span>Admin Berhasil Diupdate</span>
								</div>";
					}}}
								
			?>
				</div>
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Username</th>
							<th>Password</th>
							<th>Phone</th>
							<th>Hak Akses</th>
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						if (count($data_admin)>0) {
							// var_dump($data_admin);
							// die;
							foreach ($data_admin as $data_admin) { ?>
						<tr >
							<td><?php echo $no;?></td>
							<td><?php echo $data_admin['nama_admin'];?></td>
							<td><?php echo $data_admin['email'];?></td>
							<td><?php echo $data_admin['username'];?></td>
							<td>****************</td>
							<td><?php echo $data_admin['phone'];?></td>
							<td><?php echo $data_admin['hak_akses'];?></td>

							
							<td>
							<a class="btn green" href="/adminToko/admin_edit/<?php
							// echo $tampil['id_admin'];
							?>">
							<i class="icon-edit"></i> Edit</a>
							<a class="btn red" href="/adminToko/admin_delete/<?php 
							// echo $tampil['id_admin'];
							?>" onclick="return confirm('Yakin Ingin Menghapus <?php
							//  echo $tampil['nama_admin'];?>?')"><i class="icon-trash"></i> Delete</a>


						</td>
						</tr>
						<?php
						$no++;
						}
						}
						
						else { ?>
						<tr>
							<td colspan="8">No Result Data</td>
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

				


				


