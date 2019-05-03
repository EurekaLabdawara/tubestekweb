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
                                    class="img-fluid" alt="<?php echo $items[0]->namaBarang ?>">
                            </div>
                            <div class="col-lg-7 py-4 px-3">
                                <h5><b><?php echo $items[0]->namaBarang ?></b></h5>
                                <p><b>Stok: <?php echo $items[0]->stok ?></b></p>
                            </div>
                            <div class="col-md-3 py-5">
                                <a href="" class="btn btn-danger m-1 float-right">Delete</a>
                                <a href="" class="btn btn-primary  m-1 float-right">Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                ?>




                    <div class="row card m-2" id="divadditem">
                        <div style="width: 100%;">
                            <button id="additem" class="btn btn-outline-success" style="width:100%">
                                <p><b><i class="fas fa-plus-circle"></i> Tambahkan Item</b></p>
                            </button>
                        </div>
                    </div>

                    <div class="row card m-2 p-2" id="formadditem">
                        <form class="form-group" action="<?php echo base_url(); ?>Barang/Create" method="post">
                            <div class="form-group row ">
                                <label for="inputnamaitem" class="col-sm-2 col-form-label">Nama Item</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputnamaitem" class="form-control" name="namaBarang"
                                        placeholder="Masukan nama produk baru anda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-secondary dropdown-toggle mb-2" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pilih Kategori Item-mu
                                </button>
                                <input type="text" name="namaKategori" id="inputkategori" hidden required>
                                <span class="badge badge-pill badge-primary" id="badgekategori">Primary</span>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item dropdownkategori" onclick="kategori(this)">Casing HP</a>
                                    <a class="dropdown-item dropdownkategori" onclick="kategori(this)">Baju
                                        action</a>
                                    <a class="dropdown-item" id="addnewcategory">Tambah Kategori
                                        Baru</a>
                                </div>
                                <div class="input-group mb-3" id="newcategoryform">
                                    <input type="text" class="form-control" id="newcategoryinput"
                                        placeholder="Kategori Baru" aria-label="Item New Category"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <a class="btn btn-outline-secondary" id="newcategory"><i
                                                class="fas fa-plus-circle"></i></a>
                                        <a class="btn btn-outline-secondary" id="cancelnewcategory">Batal</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
                                    rows="3" placeholder="Deskripsikan produk anda" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputjumlahstok">Jumlah Stok</label>
                                <input type="number" class="form-control" id="inputjumlahstok" name="stok" required>
                            </div>
                            <label for="hargasatuan">Harga Satuan</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend" id="hargasatuan">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Harga dalam Rupiah" required>
                            </div>
                            <div class="form-group">
                                <label>Kustom Item </label>
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-outline-danger active" id="notcustom">
                                        <input type="radio" name="customable" value="no" checked>
                                        Tidak
                                        Dapat Dikustom
                                    </label>
                                    <label class="btn btn-outline-success" id="custom">
                                        <input type="radio" name="customable" value="yes"> Dapat
                                        Dikustom
                                    </label>
                                </div>
                            </div>

                            <div id="customframeimage" class="form-group">
                                <img id="frameimage" src="#" alt="your item frame image" />
                                <label for="fileframe">Item Frame Picture</label>
                                <input name="fileframepicture" type="file" class="form-control-file" id="fileframe"
                                    onchange="readURL1(this);">
                            </div>

                            <img id="coverimage" src="#" alt="your item cover image" />

                            <div class="form-group">
                                <label for="filecover">Item Cover Picture(s)</label>
                                <input name="filecoverpicture" type="file" class="form-control-file" id="filecover"
                                    onchange="
                                    readURL2(this);" required>
                            </div>

                            <div class="form-group">
                                <label>Mempunyai Preset </label>
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-outline-danger active" id="notpreset">
                                        <input type="radio" name="preset" value="no" checked>
                                        Tidak
                                        Ada Preset
                                    </label>
                                    <label class="btn btn-outline-success" id="preset">
                                        <input type="radio" name="preset" value="yes"> Mempunyai Preset
                                    </label>
                                </div>
                            </div>
                            <img id="presetimage" src="#" alt="your item preset image" />
                            <div class="form-group" id="presetimageform">
                                <label for="namapreset">Item Preset</label>
                                <input type="text" class="form-control" id="namapreset" name="namaPreset"
                                    placeholder="Nama Preset (Pilihan Default)">
                                <br>
                                <label for="filepreset">Item Preset Picture(s)</label>
                                <input name="filepresetpicture" type="file" class="form-control-file" id="filepreset"
                                    onchange="readURL3(this);">
                            </div>

                            <button type=" submit" class="btn btn-primary mx-1" style="float:right">Simpan</button>
                            <button type="reset" class="btn btn-warning mx-1"
                                style="color:white;float:right">Reset</button>
                            <a id="btncanceladd" class="btn btn-danger mx-1" style="float:right; color:white">Batal</a>
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
$('#presetimageform').hide();
$('#badgekategori').hide();
$('#newcategoryform').hide();

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
    $('#fileframe').attr('required', true);
});
$('#notcustom').click(function() {
    $('#customframeimage').hide();
    $('#fileframe').removeAttr('required');
});

$('#preset').click(function() {
    $('#presetimageform').show();
    $('#namapreset').attr('required', true);
    $('#filepreset').attr('required', true);
});
$('#notpreset').click(function() {
    $('#presetimageform').hide();
    $('#filepreset').removeAttr('required');
    $('#namapreset').removeAttr('required');
});

$('#addnewcategory').click(function() {
    $('#newcategoryform').show();
});

$('#cancelnewcategory').click(function() {
    $('#newcategoryform').hide();
});

$('#newcategory').click(function() {
    var kategori = $('#newcategoryinput').val();
    document.getElementById('badgekategori').innerHTML = kategori;
    document.getElementById('inputkategori').value = kategori;
    $('#newcategoryform').hide();
    $('#badgekategori').show();
})

function kategori(input) {
    var kategori = input.innerHTML;
    document.getElementById('badgekategori').innerHTML = kategori;
    $('#badgekategori').show();
    document.getElementById('inputkategori').value = kategori;
}

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