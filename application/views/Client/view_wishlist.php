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
<div class=row>
    <div class="container mt-3">
        <form class="form-inline mt-4 col-12 col-md-9 col-xl-8 py-md-3 pl-md-5" style="width:40%">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Wishlist" aria-label="Search Wishlist"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>

                <img src="logo.png" alt="customplace" class="img-thumbnail">
                <p>
                    Daftar produk yang anda inginkan ada dilaman ini.</p>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari Produk</button>
            </div>
        </form>
    </div>
</div>