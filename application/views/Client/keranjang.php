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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
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
            $this->load->view("modal_bikintoko");
        }
    }
    $this->load->view("modal");
    $this->load->view("navbar");
    ?>

    <div class="wrapper">
        <div id="content" style="width: 100%;" class="m-2">
            <div class="gray-bg dashbard-1">
                <div class="wrapper-content">
                    <div class="row card m-2">
                        <div style="width: 100%;">
                            <center>
                                <h2><b>Item Dalam Keranjang Anda</b></h2>
                            </center>
                        </div>
                    </div>
                    <?php if ($items === null) {
                        ?>
                    <div class="row card m-2 p-2">
                        <div style="width: 100%;">
                            <center>
                                <p><b>Anda Belum Menambahkan Item</b></p>
                            </center>
                        </div>
                    </div>
                    <?php
                } else {
                    foreach ($items as $item) {
                        ?>
                    <div class="row card m-2">
                        <div class="row p-1">
                            <div class="col-md-2 px-3">
                                <img src="<?php echo base_url() . 'IMG/vendors_item/' . $this->session->userdata('vendorID') . '/' . $itemCoverImage[$item->idBarang][0]->filename ?>"
                                    class="img-fluid" alt="<?php echo $item->namaBarang ?>">
                            </div>
                            <div class="col-lg-7 py-4 px-3">
                                <h5><b><?php echo $item->namaBarang ?></b></h5>
                                <p><b>Stok: <?php echo $item->stok ?></b></p>
                            </div>
                            <div class="col-md-3 py-5">
                                <a style="color:white" onclick="deleteitem(<?php echo $item->idBarang ?>)"
                                    class="btn btn-danger m-1 float-right">Delete</a>
                                <a href="" class="btn btn-primary  m-1 float-right">Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>