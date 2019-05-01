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
  <div class="wrapper">
  <div class="row">
  <div class="col card my-1 mx-5 px-5 py-2">
	 <h1>Konfirmasi Tagihan<h1>
	 <h6>Bagaimana cara mengkonfirmasinya?</h6>
	 <ol>
	 <li><dd class="col-sm-12">Setelah Anda sukses checkout dan telah melakukan pembayaran melalui account Bank kami</dd></li>
	 <li><dd class="col-sm-12">Pastikan Order ID dan jumlah pembayaran sesuai dengan pesanan Anda.</dd></li>
	 <li><dd class="col-sm-12">Kami akan segera proses order setelah kami menerima konfirmasi pembayaran.</dd></li>
	 <dd class="col-sm-12">Jika ada hal yang ingin ditanyakan mengenai hal lain terkait order Anda harap hubungi :</dd>
	 <dd class="col-sm-12">Whatapps : 0898 4124 646</dd>
	 <dd class="col-sm-12">Service Center : 082233445566</dd>
	 <dd class="col-sm-12">Phone : (022) 6620 021</dd>
	 </ol>
	 </div>
</div>
<div class="row">
<div class="col card my-2 mx-5 px-5 py-2">
	<form>
	  <div class="form-row">
		<div class="col-md-4 mb-3">
		  <label for="inputnama">Nama</label>
		  <input type="text" class="form-control" id="validationServer01" placeholder="First name" value="" required>
		 
		</div>
		<div class="col-md-4 mb-3">
		  <label for="validationServer02">Email</label>
		  <input type="email" class="form-control" id="inputEmail3" placeholder="email" value="" required>
		</div>
		
		<div class="col-md-4 mb-3">
		  <label for="validationServer03">No. Handphone</label>
		  <input type="text" class="form-control" id="validationServer02" placeholder="nohp" value="" required>
		</div>
		
	  </div>
	  <div class="form-row">
		<div class="col-md-6 mb-3">
		  <label for="validationServer03">Jumlah</label>
		  <input type="text" class="form-control" id="validationServer03" placeholder="Jumlah" required>
		</div>
		<div class="col-md-6 mb-3 mx-5">
		<div class="form-row">
			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
		  <label class="form-check-label" for="exampleRadios1">
			BCA 2277081640 Henokhvita Hagiographa
		  </label>
		  </div>
		<div class="form-row">
		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
		  <label class="form-check-label" for="exampleRadios2">
			Mandiri 7077081640 Eureka Labdawara
		  </label>
		  </div>
<div class="form-row">
		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
		  <label class="form-check-label" for="exampleRadios3">
			BNI 1007708162 Mirninda Br Berahmana
		  </label>
		</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-6 mb-3">
		  <label for="validationServer05">Tanggal Transfer</label>
		  <input type="date" class="form-control" id="validationServer05" placeholder="tanggal" required>
		</div>

		<div class="form-group">
			<label for="exampleFormControlFile1">Masukkan bukti pembayaran</label>
			<input type="file" class="form-control-file" id="exampleFormControlFile1">
		</div>
	 
	</div>
	  <button class="btn btn-primary" type="submit">SEND</button>
	</form>

	</div>
 </div>
	 