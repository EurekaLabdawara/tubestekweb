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

    div.item p {
        text-align: center;
    }

    div.item img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <?php
            include_once("navbarvendor.php");
            ?>
        </nav>
        <div id="content" style="width: 100%;" class="m-2">
            <div class="gray-bg dashbard-1">
                <div class="wrapper-content">
                    <div class="row card m-2">
                        <div style="width: 100%;">
                            <center>
                                <h2><b>Item Anda</b></h2>
                            </center>
                        </div>
                    </div>

                    <div class="row card m-2 p-2">
                        <div style="width: 100%;">
                            <center>
                                <p><b>Anda Belum Menambahkan Item</b></p>
                            </center>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>