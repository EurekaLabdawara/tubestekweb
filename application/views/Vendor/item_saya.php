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

    #additem :hover {
        color: white;
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


                    <div class="row card m-2" id="divadditem">
                        <div style="width: 100%;">
                            <button id="additem" class="btn btn-outline-success" style="width:100%">
                                <p><b><i class="fas fa-plus-circle"></i> Tambahkan Item</b></p>
                            </button>
                        </div>
                    </div>

                    <div class="row card m-2 p-2" id="formadditem">
                        <form class="form-group" action="">
                            <div class="form-group row ">
                                <label for="inputnamatoko" class="col-sm-2 col-form-label">Nama Item</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputnamatoko"
                                        placeholder="Masukan nama produk baru anda">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-secondary dropdown-toggle mb-2" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pilih Kategori Item-mu
                                </button>
                                <span class="badge badge-pill badge-primary">Primary</span>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" id="addnewcategory">Tambah Kategori Baru</a>
                                </div>
                                <div class="input-group mb-3" id="newcategory">
                                    <input type="text" class="form-control" placeholder="Kategori Baru"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit"><i
                                                class="fas fa-plus-circle"></i></button>
                                        <button class="btn btn-outline-secondary" id="cancelnewcategory">Batal</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Deskripsikan produk anda"></textarea>
                            </div>
                            <label for="hargasatuan">Harga Satuan</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend" id="hargasatuan">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Harga dalam Rupiah">
                            </div>
                            <div class="form-group">
                                <label>Kustom Item </label>
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-outline-danger active" id="notcustom">
                                        <input type="radio" name="options" checked>
                                        Tidak
                                        Dapat Dikustom
                                    </label>
                                    <label class="btn btn-outline-success" id="custom">
                                        <input type="radio" name="options"> Dapat
                                        Dikustom
                                    </label>
                                </div>
                            </div>

                            <div id="customframeimage" class="form-group">
                                <img id="frameimage" src="#" alt="your item frame image" />
                                <label for="exampleFormControlFile1">Item Frame Picture</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                    onchange="readURL1(this);">
                            </div>

                            <img id="coverimage" src="#" alt="your item cover image" />

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Item Cover Picture(s)</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" onchange="
                                    readURL2(this);">
                            </div>

                            <img id="presetimage" src="#" alt="your item preset image" />

                            <div class="form-group">
                                <label for="namapreset">Item Preset</label>
                                <input type="text" class="form-control" id="namapreset"
                                    placeholder="Nama Preset (Pilihan Default)">
                                <br>
                                <label for="exampleFormControlFile1">Item Preset Picture(s)</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                    onchange="readURL3(this);">
                            </div>

                            <button type=" submit" class="btn btn-primary mx-1" style="float:right">Simpan</button>
                            <button type="reset" class="btn btn-warning mx-1"
                                style="color:white;float:right">Reset</button>
                            <button id="btncanceladd" class="btn btn-danger mx-1" style="float:right">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
$('#frameimage').hide();
$('#coverimage').hide();
$('#presetimage').hide();
$('#formadditem').hide();
$('#customframeimage').hide();
$('#newcategory').hide();

$('#divadditem').click(function() {
    $('#formadditem').toggle();
    $('#divadditem').toggle();
});
$('#btncanceladd').click(function() {
    $('#formadditem').toggle();
    $('#divadditem').toggle();
});

$('#custom').click(function() {
    $('#customframeimage').show();
});
$('#notcustom').click(function() {
    $('#customframeimage').hide();
});

$('#addnewcategory').click(function() {
    $('#newcategory').show();
});

$('#cancelnewcategory').click(function() {
    $('#newcategory').hide();
});

function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#frameimage').show();
            $('#frameimage')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#coverimage').show();
            $('#coverimage')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#presetimage').show();
            $('#presetimage')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

</html>