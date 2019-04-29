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
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }

    div.item p {
        text-align: center;
    }

    div.item img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>

<body>
    <?php
  if ($this->session->userdata('email') !== null) {
    if ($this->session->userdata('vendorID') === null) {
      include_once("modal_bikintoko.php");
    }
  }
  include_once("modal.php");
  include_once("navbar.php");
  ?>
    <div class="container mt-3">
        <div id="myCarousel" class="carousel slide row">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
				<li class="item4"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="la.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="promo1.png" alt="Chicago" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="ny.jpg" alt="New York" width="1100" height="500">
                </div>
				<div class="carousel-item">
                    <img src="promo2.png" alt="New York" width="1100" height="500">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <h2> Casing Handphone </h2>
        <div id="CaseHPSection" class="card-deck">
            <div class="card">
                <img src="bumper-iphone.png" class="card-img-top" alt="Bumper Iphone">
                <div class="card-body">
                    <h5 class="card-title">Case Bumper Iphone</h5>
                    <p class="card-text">Case bumper merupakan case dengan desain simple mengelilingi sisi samping
                        gadget, sehingga desain asli gadget tetap terlihat.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="wooden sony.png" class="card-img-top" alt="Wooden Sony">
                <div class="card-body">
                    <h5 class="card-title">Case Wooden Sony</h5>
                    <p class="card-text">Case Wooden merupakan case dari bahan kayu asli yang didalamnya terdapat
                        bantalan halus untuk melindungi handphone.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="flip lenovo hitam.png" class="card-img-top" alt="Flip lenovo">
                <div class="card-body">
                    <h5 class="card-title">Case Flip Lenovo</h5>
                    <p class="card-text">Case Flip merupakan case yang menutup bagian belakang sekaligus bagian depan
                        sehingga berperan sebagai pelindung layar.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="bumper-iphone.png" class="card-img-top" alt="Bumper Iphone">
                <div class="card-body">
                    <h5 class="card-title">Case Bumper Iphone</h5>
                    <p class="card-text">Case bumper merupakan case dengan desain simple mengelilingi sisi samping
                        gadget, sehingga desain asli gadget tetap terlihat.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="wooden sony.png" class="card-img-top" alt="Wooden Sony">
                <div class="card-body">
                    <h5 class="card-title">Case Wooden Sony</h5>
                    <p class="card-text">Case Wooden merupakan case dari bahan kayu asli yang didalamnya terdapat
                        bantalan halus untuk melindungi handphone.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
        </div>


        <h2> Custom Baju </h2>
        <div id="BajuSection" class="card-deck">
            <div class="card">
                <img src="1depan.png" class="card-img-top" alt="Kaos Raglan lengan pendek">
                <div class="card-body">
                    <h5 class="card-title">Baju Kaos Raglan</h5>
                    <p class="card-text">Kaos ini memiliki bahan cotton combed yaitu kaos dengan bahan yang adem, tidak panas saat dipakai dan dapat menyerap keringat dengan baik.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="2depan.png" class="card-img-top" alt="Kaos Raglan lengan panjang">
                <div class="card-body">
                    <h5 class="card-title">Baju Kaos Raglan</h5>
                    <p class="card-text">Kaos ini memiliki bahan cotton combed yaitu kaos dengan bahan yang adem, tidak panas saat dipakai dan dapat menyerap keringat dengan baik.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="3depan.png" class="card-img-top" alt="Kaos Polos">
                <div class="card-body">
                    <h5 class="card-title">Baju Kaos Polos</h5>
                    <p class="card-text">Kaos ini memiliki bahan cotton combed yaitu kaos dengan bahan yang adem, tidak panas saat dipakai dan dapat menyerap keringat dengan baik.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="4depan.png" class="card-img-top" alt="Kaos Polos">
                <div class="card-body">
                    <h5 class="card-title">Baju Kaos Polos</h5>
                    <p class="card-text">Kaos ini memiliki bahan cotton combed yaitu kaos dengan bahan yang adem, tidak panas saat dipakai dan dapat menyerap keringat dengan baik.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
            <div class="card">
                <img src="5depan.png" class="card-img-top" alt="Kaos V-Neck">
                <div class="card-body">
                    <h5 class="card-title">baju Kaos V-Neck</h5>
                    <p class="card-text">Kaos ini memiliki bahan cotton combed yaitu kaos dengan bahan yang adem, tidak panas saat dipakai dan dapat menyerap keringat dengan baik.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Yuk Custom..</a>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // Activate Carousel
        $("#myCarousel").carousel();

        // Enable Carousel Indicators
        $(".item1").click(function() {
            $("#myCarousel").carousel(0);
        });
        $(".item2").click(function() {
            $("#myCarousel").carousel(1);
        });
        $(".item3").click(function() {
            $("#myCarousel").carousel(2);
        });

        // Enable Carousel Controls
        $(".carousel-control-prev").click(function() {
            $("#myCarousel").carousel("prev");
        });
        $(".carousel-control-next").click(function() {
            $("#myCarousel").carousel("next");
        });

        $("#btnKatCaseHP").click(function() {
            $('html, body').animate({
                scrollTop: $("#CaseHPSection").offset().top
            }, 2000);
        });

        $("#btnKatBaju").click(function() {
            $('html, body').animate({
                scrollTop: $("#BajuSection").offset().top
            }, 2000);
        });
    });
    </script>



</body>

</html>