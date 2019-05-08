<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

    <title>CustomPlace</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?> assets/css/button_inverse.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
  $this->load->view("navbar");
  ?>
  
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">History Pembelian</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tagihan</a>
  </li>
  </ul>

<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="history-tab">
		<div class="card-group mx-3">
		
			<div class="card  mt-3">
				<div class="card-header">Tanggal Pembelian</div>
				<div class="card-body">
				
					<blockquote class="blockquote mb-0 col-3">
					<p>Case Bumper Iphone</p>
					</blockquote>
				</div>
			</div>
			<div class="card col-3">
				<div class="card-body">
					<p class="card-text"> Status Pesanan </p>
					<p class="card-text"> Pesanan Selesai </p>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<p class="card-text"> Total Belanja </p>
					<p class="card-text"> Rp. 50.000 </p>
				</div>
			</div>
		</div>
			<div class="row no-gutters bg-light position-relative">
			<div class="col-md-6 mb-md-0 p-md-4">
			<img src="<?php echo base_url() ?>IMG/vendors_item/2/bumper-iphone.png" class="" alt="Bumper Iphone">
			</div>
			<div class="col-md-6 position-static p-4 pl-md-0">
			<a class="font-weight-bold" href="#" class="stretched-link">Bumper Iphone</a>
			<p>Rp. 50.000</p>
			</div>
			</div>
			<div class="card col-3">
				<div class="card-body">
					<p class="card-text"> Total Harga Produk </p>
					<p class="card-text"> Rp.51.000 </p>
				</div>
				<button type="button" class="btn btn-danger">Beli Lagi</button>
			</div>
	</div>
  
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="tagihan-tab">
		<div class="card border-light mb-3 mt-3 mx-3" style="max-width: 25rem;">
	  <div class="card-body">
		<h5 class="card-title">Belanja</h5>
		<a href="" class="invoice-success">Invoice</a>
		<p class="card-text">Total: Rp.50.000 </p>
		<p class="card-text">Tanggal Pembelian 2 May 2019 </p>
		<p class="card-text shadow-none p-3 bg-light rounde text-danger">Bayar sebelum 3 May 2019, 20:19 WIB </p>
		<p class="card-text">Metode Pembayaran	:	Transfer Manual </p>
		<p class="card-text">Rekening Pengirim	:	1112 a.n. erik </p>
		<p class="card-text">Rekening Tokopedia	:	372 177 3940 a.n. CustomPlace </p>
		<button class="btn btn-success">Konfirmasi Pembayaran</button>
		<a href="" class="invoice-success">Invoice</a>
	  </div>
	</div>
  </div>
</div>