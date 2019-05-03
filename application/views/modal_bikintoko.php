<!-- Modal -->
<div class="modal fade" id="ModalBikinToko" tabindex="-1" role="dialog" aria-labelledby="ModalBikinTokoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Mulai Bisnismu Bersama Kami!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="masuk">
                    <form action="<?php echo base_url() ?>Vendor/Create" method="post">
                        <div class="form-group" hidden>
                            <input name="userID" type="text" class="form-control"
                                value="<?php echo $this->session->userdata('userID') ?>">
                        </div>
                        <div class="form-group">
                            <label for="input">Nama Toko</label>
                            <input name="namaToko" type="text" class="form-control" aria-describedby="nameHelp"
                                placeholder="Masukkan Nama Tokomu" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsiToko">Deskripsi Tokomu</label>
                            <input name="deskripsi" type="text" class="form-control" id="deskripsiToko"
                                placeholder="Deskripsikan Tokomu" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftarkan Toko Saya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>