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
<style>
.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}
</style>

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
                                <h2><b>Pengaturan Toko Anda</b></h2>
                            </center>
                        </div>
                    </div>

                    <div class="row card m-2 p-2">
                        <form class="form-group" action="">
                            <div class="form-group row ">
                                <label for="inputnamatoko" class="col-sm-2 col-form-label">Nama Toko</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputnamatoko" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Profile Picture Toko</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Home Picture Toko</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>