<style>
.btn-outline-success {
    background-color: white;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d1ff99;">

    <a class=" navbar-brand" style="background-color:transparent" href="#">
        <img src="<?php echo base_url() ?>IMG/logo.png" class="d-inline-block align-center img-fluid" width="100"
            height="100" alt="customplace">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <ul class="navbar-nav my-2 my-sm-2 mx-5">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a id="btnKatCaseHP" class="dropdown-item">Case Handphone</a>
                <a id="btnKatBaju" class="dropdown-item">Baju</a>
            </div>
        </li>
    </ul>



    <form class="form-inline my-2 my-lg-0" style="width:65%">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:80%">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a class="btn btn-outline-success my-2 my-sm-0 mx-1" href="#">
        <i class="fas fa-shopping-cart"></i>
    </a>
    <?php
    if ($this->session->userdata('email') === null) { ?>
    <button class="btn btn-outline-success my-2 my-sm-0 mx-5" style="float:right;" data-toggle="modal"
        data-target="#exampleModal">Login / Register</button>
    <?php
} else { ?>
    <ul class="navbar-nav my-2 my-sm-2 mx-5">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="rightnavbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php echo $this->session->userdata('namaLengkap') ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="rightnavbarDropdown">
                <a href="" class="dropdown-item">Pembelian</a>
                <a href="" class="dropdown-item">Wishlist</a>
                <?php
                    if ($this->session->userdata('vendorID') === null) { ?>
                <a data-toggle="modal" data-target="#ModalBikinToko" class="dropdown-item">Mulai Berjualan</a>
                <?php
                } else { ?>
                <a href="<?php echo base_url() . 'Vendor/Dashboard' ?>" class="dropdown-item">Toko Saya</a>
                <?php
                }
                ?>
                <a href="" class="dropdown-item">Pengaturan</a>
                <a href="<?php echo base_url() ?>Auth/logout" class="dropdown-item">Keluar</a>
            </div>
        </li>
    </ul>
    <?php
}
?>

    </div>

</nav>