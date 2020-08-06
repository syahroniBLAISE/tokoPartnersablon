	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a  href="/toko">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>

			<?php echo form_open('/homeToko/checkout_update'); ?>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Jumlah</td>
							<td class="description">Nama Barang</td>
							<td class="price">Harga</td>
							<td class="quantity">Sub Total</td>
							<td class="total">Hapus</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
						<?php $i = 1; ?>
		<?php foreach($keranjang as $items): ?>
		
		<?php echo form_hidden('id_produk', $items['id_produk']); ?>
		<tr <?php if($i&1){ echo 'class="alt"'; }?>>
	  		<td class="td-keranjang">
			<select name="jumlah" class="input-teks">
	  			<?php 
				for($i=1;$i<=200;$i+=1)
				{
				if($i==$items['jumlah'])
				{
					echo "<option selected>".$items['jumlah']."</option>";
				}
				else
				{
					echo "<option>".$i."</option>";
				}
				}	
				?>
			</select>
	  		</td>
	  		
	  		<td class="td-keranjang"><?php echo $items['nama_produk']; ?></td>
	  		
	  		<td class="td-keranjang">Rp. <?php echo $items['harga']; ?></td>
	  		<td class="td-keranjang">Rp. <?php echo $items['sub_total']; ?></td>
 		 	<td class="td-keranjang" align="center"><a href="/homeToko/checkout_hapus/<?php echo $items['id_produk']; ?>"><i class="fa fa-times"></i></a></td>
	  	</tr>
	  	
	  	<?php $i++; ?>
		<?php endforeach; ?>
		
		<tr>
			<td class="td-keranjang" colspan=3><b>Total Belanja</b></td>
 		 	<td class="td-keranjang" colspan=2>Rp. <?php echo 'total'; ?></td>
		</tr>
						
						
					</tbody>
				</table>
				<input type="submit" class="btn btn-default get" value="Update Keranjang">
				
			</div>
			<?php 
echo form_close(); 
// endif;
?>



			<div class="register-req">
			<ul>
				<li>Apabila Anda mengubah jumlah (Qty), jangan lupa tekan tombol Update Keranjang Belanja</li>
				<li>Untuk menghaspus barang pada keranjang belanja, klik tombol Hapus.</li>
				<!-- <li>Total harga di atas belum termasuk ongkos kirim yang akan dihitung saat Selesai Belanja</li> -->
			</ul>
		</div>


		
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<div class="shopper-informations"> -->
				<div class="row">
					<div class="col-sm-3">
					<?= $validation->listErrors(); ?>
						<div class="shopper-info">
							<p>Data Pembeli</p>
							<?php echo form_open('/homeToko/checkout_invoice');?>
								<input class="form-control is-valid" type="text" placeholder="Nama Penerima" name="penerima">
								<input type="text" placeholder="Email Penerima" name="email">
								<input type="text" placeholder="Alamat Penerima" name="alamat">
								<input type="text" placeholder="No Telp" name="no_telepon">
								<input type="text" placeholder="Propinsi" name="propinsi">
								<input type="text" placeholder="Kota" name="kota">
								<input type="text" placeholder="Kode Pos" name="kode_pos">
								
							
							
							
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Metode Pembayaran</p>
							<div class="form-two">
								
									<select name="bank_id">
										<?php
										foreach ($bank as $value) { ?>
											<option value="<?php echo $value['id_bank'];?>"><?php echo $value['nama_bank'];?>- <?php echo $value['no_rekening'];?></option>
										<?php
										}
										?>
									</select>
									<select name="jasapengiriman_id">
										<?php
										foreach ($jasapengiriman as $value) { ?>
											<option value="<?php echo $value['id_jasapengiriman'];?>"><?php echo $value['nama'];?></option>
										<?php
										}
										?>
									</select>
								
								<button class="btn btn-primary" type="submit">Kirim</button> 
								<?php echo form_close();?>
							</div>
							
						</div>
					</div>
								
				</div>
			</div>
		
		</div>

		
		
	</section> <!--/#cart_items-->
	
