<style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #fff;
    background: #6d7fcc;

}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #7386D5;
    background: #fff;
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}
</style>

<div class="sidebar-header">
    <a href="<?php echo base_url() ?>">
        <h4><i class="fas fa-door-closed"></i> Kembali</h4>
    </a>
</div>
<?php $link = $this->uri->segment(2) ?>
<ul class="list-unstyled components">
    <?php if ($link === "dashboard" || $link === "Dashboard") {
        echo '<li class="active">';
    } else {
        echo '<li>';
    } ?>
    <a href="<?php echo base_url() ?>vendor/dashboard">Dashboard</a>
    </li>
    <?php if ($link === "ViewMyItem") {
        echo '<li class="active">';
    } else {
        echo '<li>';
    } ?>
    <a href="<?php echo base_url() ?>vendor/ViewMyItem">Item Saya</a>
    </li>
    <?php if ($link === "ViewPesanan") {
        echo '<li class="active">';
    } else {
        echo '<li>';
    } ?>
    <a href="<?php echo base_url() ?>vendor/ViewPesanan">Pesanan</a>
    </li>
    <?php if ($link === "Pengaturan") {
        echo '<li class="active">';
    } else {
        echo '<li>';
    } ?>
    <a href="<?php echo base_url() ?>vendor/Pengaturan">Pengaturan Toko</a>
    </li>
</ul>