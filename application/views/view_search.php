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
  <h2 class="text mt-3 mx-5">Hasil pencarian</h2>
  <div id="wishlist" class="card-deck mt-3 mx-3">
  <div class="card col-2">
  <img src="<?php echo base_url() ?>" class="card-img-top"
        alt="Bumper Iphone">
        <div class="card-body">
	<h5 class="card-title">Case Bumper Iphone</h5>
    <p class="card-text">Rp.100.000</p>
		</div>
        <div class="card-footer">
		<div class="btn-beli">
			<button type="button" class="btn btn-danger">Beli</button>
		</div>
                  
        </div>
   </div>
   
   </div>