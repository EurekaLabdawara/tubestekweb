<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
  </head>

<body>


<?php $this->load->view('navbar');?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item"><a class="nav-link active" id="bio-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="bio" aria-selected="true">Biodata Diri</a></li>
  <li class="nav-item"><a class="nav-link" id="alamat-tab" data-toggle="tab" href="#alamat" role="tab" aria-controls="alamat" aria-selected="false">Daftar Alamat</a></li>
  <li class="nav-item"><a class="nav-link" id="fotoprop-tab" data-toggle="tab" href="#fotoprop" role="tab" aria-controls="fotoprop" aria-selected="false">Foto Profil</a></li>
</ul>
<center>
	<div class="mt-5">
	<div class="card col-6" style= "text-align: left">	
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="bio-tab"> 						
			<form action="<?php echo base_url() ?>Client/SaveUserSettings" method="post">
				<h2 class="text mt-3 mx-5" style="text-align: center">Biodata diri</h2>
					<div class="form-group">
						<label for="exampleInputNama">Nama lengkap</label>
						<input type="text" name="namaLengkap" class="form-control" id="exampleInputNama"
							aria-describedby="namaHelp" placeholder="Masukkan nama">
							<p><a href="#" class="text-success col-md-10 offset-md-10" >Ubah</a></p>							
					</div>
					<div class="form-group">
						<label for="exampleInputUsername">Username</label>
						<input type="text" name="username" class="form-control" id="exampleInputUsername"
							aria-describedby="usernameHelp" placeholder="Masukkan username">
							<p><a href="#" class="text-success col-md-10 offset-md-10" >Ubah</a></p>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword2">Kata sandi</label>
						<input type="password" name="password" class="form-control" id="exampleInputPassword2"
							placeholder="Masukkan kata sandi" required>
							<p><a href="#" class="text-success col-md-10 offset-md-10" >Ubah</a></p>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Alamat Email</label>
						<input name="email" type="email" class="form-control" id="exampleInputEmail2"
							aria-describedby="emailHelp" placeholder="Masukkan email" required>
							<p><a href="#" class="text-success col-md-10 offset-md-10" >Ubah</a></p>
					</div>
					<div class="form-group">
						<label for="exampleInputNoHP">Nomor HP</label>
						<input type="text" name="nohp" class="form-control" id="exampleInputNoHP"
							aria-describedby="nohpHelp" placeholder="Masukkan no hp" required>
							<p><a href="#" class="text-success col-md-10 offset-md-10" >Ubah</a></p>
					</div>
				<button id="btnsubmitdaftar" type="submit" class="btn btn-primary">Simpan Perubahan</button>
			</form>
		</div>	  		  	  
		  
		<div class="tab-pane fade" id="alamat" role="tabpanel" aria-labelledby="alamat-tab">
			<form action="<?php echo base_url() ?>Client/SaveUserSettings" method="post">
				<h2 class="text mt-3 mx-5" style="text-align: center">Daftar Alamat</h2>
					<div class="address-wrapper-box address-wrapper-box--problematic single-address-wrapper chosen-address-receiver-area hopscotch-focus" id="chosen-single-address-heading-card">
						<div class="single-address-wrapper-header">
						<h5>Alamat Default</h5>
						</div>
						<div class="padder-for-icon-place">
							<div class="flex-wrapper">
								<div class="left-wrapper">
									<span class="receiver-name">Ninda</span>
								   
									<br>
									<div class="phone-number u-mt0">
										082366332852
									</div>
									<span class="address-detail street">
										Jl. Adhyaksa III No.3 Rt3/Rw5 , kec.Dayeuh kolot, Desa sukapura Bandung Buahbatu, Jawa Barat
									</span><br>
									<span class="address-detail district">
										Bandung, Kota Bandung, 40267
									</span>
									<input type="hidden" class="input-chosen-address-id" value="35251887">
									<input type="hidden" class="input-address-name" value="kosan baru">
									<input type="hidden" class="input-address-street" value="Jl. Adhyaksa III No.3 Rt3/Rw5 , kec.Dayeuh kolot, Desa sukapura Bandung Buahbatu, Jawa Barat">
									<input type="hidden" class="input-postal-code" value="40267">
									<input type="hidden" class="input-phone" value="082366332852">
									<input type="hidden" class="input-receiver-name" value="Ninda">
									<input type="hidden" class="input-province-id" value="12">
									<input type="hidden" class="input-city-id" value="165">
									<input type="hidden" class="input-latitude" value="-6.96746190303793">
									<input type="hidden" class="input-longitude" value="107.63429448008536">
									<input type="hidden" class="input-district-id" value="2170">
									<input type="hidden" class="input-district-name" value="Jawa Barat,Kota Bandung,Bandung">
								</div>
								
							</div>
						</div>
						<div class="address-n-pinpoint-edit-cta-wrapper">
							<div class="address-n-pinpoint-edit-cta-item anpeci-location">
								<div class="pin-point-wrapper ">
									<div class="pin-point-result-wrapper filled" id="single-address-heading-pinpoint">
										<div class="padder bg--cv-cc-nr">
											<div class="flex-wrapper">
											</div>
											<input type="hidden" class="input-lat-lng" value="-6.96746190303793,107.63429448008536">
										</div>
									</div>
								</div>
							</div>						
						</div>
						<div>
						  <hr class="my-4">
							<div class="address-box-bottom-btns-wrapper">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Gunakan Alamat Baru</button>
							<input type="hidden" id="is-one-click-shipment" value="0">									
							<input type="hidden" id="is-multiple" value="0">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pilih Alamat Lain</button>           
							</div>
						</div>
					</div>
					<hr class="my-4">
						<div class="row">
						<div class="col-6 left-basket-container" >
						  <div class="col px-md-5"><div class="p-3 border bg-light">
						  <h5> Pilih Alamat Pengiriman
						  <button type="submit" class="btn btn-primary" style="float:right">Batal</button></h5>
						  <hr class="my-4">
						  <h7> alamat 1<button class="btn btn-outline-success my-2 my-sm-0" type="submit"style="float:right">Pilih Alamat
						  </button></h7> 
						  <hr class="my-4">
						  <h7> alamat 2<button class="btn btn-outline-success my-2 my-sm-0" type="submit"style="float:right">Pilih Alamat</button></h7>
						  <hr class="my-4">
						  <h7> alamat 3<button class="btn btn-outline-success my-2 my-sm-0" type="submit"style="float:right">Pilih Alamat</button></h7>   
						  </div>
						</div>
						</div></div>

						<hr class="my-4">
						<div class="row">
						<div class="col-6 left-basket-container" >
							<form>
						  <div class="form-group">
							<label for="exampleInputEmail1">Gunakan Alamat Baru</label>
							<div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Masukkan label" aria-label="Masukkan label" aria-describedby="button-addon2">
						  <div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2">
								   

										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false">
											
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a id="btnKatCaseHP" class="dropdown-item">Alamat Rumah</a>
											<a id="btnKatBaju" class="dropdown-item">Kantor</a>
											<a id="btnKatBaju" class="dropdown-item">Dropship</a>
											<a id="btnKatBaju" class="dropdown-item">Lainnya</a>
										</div>
									
								
							</button>
						  </div>
						</div>
						   
						  </div>
						  <div class="form-group">
							<label for="exampleInputNama">Nama Penerima</label>
							<input type="text" name="namaLengkap" class="form-control" id="exampleInputNama"
							aria-describedby="namaHelp" placeholder="Masukkan nama">
						  </div>
						  <div class="form-group">
						  <label for="exampleInputNoHP">Nomor HP</label>
						  <input type="text" name="nohp" class="form-control" id="exampleInputNoHP"
						  aria-describedby="nohpHelp" placeholder="Masukkan no hp" required>
						  </div>
						  <div class="form-group">
						  <label for="exampleInputAlamat">Alamat</label>
						  <input type="text" name="alamat" class="form-control" id="exampleInputAlamat"
						  aria-describedby="alamatHelp" placeholder="Masukkan alamat" required>
						  <small id="emailHelp" class="form-text text-muted">Masukkan alamat</small>
						  </div>

						  <div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Jadikan alamat default</label>
						  </div>
						  <button type="submit" class="btn btn-primary">Batal</button>
						  <button type="submit" class="btn btn-primary">Simpan</button>
						</form>	
						</div>
						</div>
			</form>
		</div>	  
		  
		<div class="tab-pane fade" id="fotoprop" role="tabpanel" aria-labelledby="fotoprop-tab">
			<form action="<?php echo base_url() ?>Client/SaveUserSettings" method="post">
			<h2 class="text mt-3 mx-5" style="text-align: center">Foto Profil</h2>
				<center>
				<div class="mt-5">
					<div class="card" style="width: 15rem;">
						<img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="https://picsum.photos/200">
						<div class="card-body"><a href="#" class="btn btn-primary">Pilih Foto</a>
						</div>
					</div>
				</div>
				</center>					
			<button id="btnsubmitdaftar" type="submit" class="btn btn-primary">Simpan Perubahan</button>
			</form></div>
		</div>
	</div>	
	</div>
	</div>
</center>
</body>
</head>
</html>