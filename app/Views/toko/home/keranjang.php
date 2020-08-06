<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
<?php echo form_open('/homeToko/keranjang_update'); ?>
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
				  <?php
				  if(isset($keranjang)){
					 $keranjang = $keranjang;
				  	$total = 0;
					foreach ($keranjang as $keranjang) :
					?>
					<tr>
						<td class="td-keranjang">
							<select name='<?= $keranjang['id_produk']; ?>' class="input-teks">
							<?php for($i=0; $i<200 ; $i++): ?>
								<?php if($keranjang['jumlah'] === $i){ ?>
								<option  value="<?= (integer)$i; ?>" selected ><?= $i; ?></option>
								<?php }else{ ?>
								<option value="<?= (integer)$i; ?>" > <?= (integer) $i; ?> </option>
								<?php } ?>
							<?php endfor; ?>
							</select>
						</td>
						
						<td class="td-keranjang"><?php echo $keranjang['nama_produk']; ?></td>
						
						<td class="td-keranjang">Rp. <?php echo $keranjang['harga']; ?></td>
						<td class="td-keranjang">Rp. <?php echo $keranjang['sub_total']; ?></td>
						<td class="td-keranjang" align="center"><a href="/homeToko/keranjang_hapus/<?php echo $keranjang['id_produk']; ?>"><i class="fa fa-times"></i></a></td>
					</tr>
		<?php 
	$total += $keranjang['sub_total'];
	endforeach; 
  ?>
		
		<tr>
			<td class="td-keranjang" colspan=3><b>Total Belanja</b></td>
 		 	<td class="td-keranjang" colspan=2>Rp. <?php echo $total; ?></td>
		</tr>

						
						
					</tbody>
		<?php 
			 }else{
				echo '<h2>KERANJANG MASIH KOSONG</h2>';
			  }
		?>
				</table>
				
				<input type="submit" class="btn btn-default get" value="Update Keranjang">
				<a href="/toko"><div class="btn btn-default get">Lanjut Belanja</div></a>
				<a href="/toko/checkout"><div class="btn btn-default get">Selesai Belanja</div></a>
			</div>

			<div class="register-req">
			<ul>
				<li>Apabila Anda mengubah jumlah (Qty), jangan lupa tekan tombol Update Keranjang Belanja</li>
				<li>Untuk menghaspus barang pada keranjang belanja, klik tombol Hapus.</li>
				<!-- <li>Total harga di atas belum termasuk ongkos kirim yang akan dihitung saat Selesai Belanja</li> -->
			</ul>
		</div>
			<?php 
echo form_close(); 
?>

			

		</div>

		
		
	</section> <!--/#cart_items-->
	
	
	