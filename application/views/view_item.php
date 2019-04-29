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
  include_once("navbar.php");
  ?>
  <div class="container mt-3 ">
    
		<div class="card mb-4 my-lg-6 " style="max-width: 540px;">
		  <div class="row no-gutters">
			<div class="col-md-4 ">
			  <img src="bumper-iphone.png" 
			  class="card-img" alt="bumper">
			</div>
			<div class="col-md-8">
			  <div class="card-body">
				<h5 class="card-title">Case Bumper Iphone</h5>
				<div class="product-detail-holder">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="input-quantity-container mt-8 pt-5 disable-min">
                                            <label for="inputjumlah">
                                                Jumlah
                                            </label>
											<button type="button" class="btn btn-circle-success" 
											class="order-min-button quantity-button disabled" style="cursor: pointer;">
											<i class="fas fa-minus-circle"></i>
											</button>
											
											<input id="inputjumlah"class="input-quantity input-number delimiter--dot" type="text" name="quantity" 
											id="order-quantity" style="width:20%"
											value="1"  autocomplete="off" data-min-qty="1" data-max-qty="10000" data-stock-qty="9886" 
											data-limit-stock="false">
											
											<button type="button" class="btn btn-circle-success" 
											class="order-plus-button quantity-button" style="cursor: pointer;">
											<i class="fas fa-plus-circle"></i>
											</button>
										</div>
									</div>
				<div class="btn-beli">
				<button type="button" class="btn btn-danger">Beli</button>
			  </div>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		</div>
		<nav class="nav">
		<ul><a class="nav-link active" href="#">Deskripsi</a>
		<ul class="list-unstyled">
		  <li>Case bumper ini merupakan case dengan desain simple </li> 
		  <li>mengelilingi sisi sampinggadget anda,</li>
		  <li> sehingga desain asli gadget tetap terlihat.</li>
		  </ul>
		  </ul>
		 </nav>
</div>