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
<div class="wrapper">
<div class="mt-3 col-8 ">
	<h1>Checkout</h1>
	<div class="left-basket-container" id="left-container">
        <div class="left-side-top-pitcher"></div>
<div class="address-wrapper-box address-wrapper-box--problematic single-address-wrapper chosen-address-receiver-area hopscotch-focus" id="chosen-single-address-heading-card">
    <div class="single-address-wrapper-header">
    <h2>Alamat Pengiriman</h2>
    </div>
    <div class="padder-for-icon-place">
        <div class="flex-wrapper">
            <div class="left-wrapper">
                <span class="receiver-name">Ninda</span>
                    <span class="default-label-rectangle">
                    <span class="default-label-text">Utama</span>
                </span>
                
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
        <div class="address-n-pinpoint-edit-cta-item anpeci-address">
            Ubah Alamat
        </div>
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
        <div class="address-box-bottom-btns-wrapper">
            <a type="button" class="btn btn-secondary-green multiaddress-link">
                Kirim ke Beberapa Alamat</a>
            <input type="hidden" id="is-one-click-shipment" value="0">
            <input type="hidden" id="is-multiple" value="0">
        
            <a type="button" class="btn btn-secondary-green" id="btn--add-address--robinhood">
                Gunakan Alamat Baru</a>
            <a type="button" class="btn btn-secondary-green" id="btn--change-address-single">
                Pilih Alamat Lain</a>
        </div>
    </div>
</div>
</div>



</div>
</div>
<br>
</body>
</html>
