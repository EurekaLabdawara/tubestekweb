<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="modal-title pagination pagination-sm" id="exampleModalLabel">
                    <li id="btnmasuk" class="page-item active"><a class="page-link">Masuk</a></li>
                    <li id="btndaftar" class="page-item"><a class="page-link">Daftar</a></li>
                </ul>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="masuk">
                    <form action ="<?php echo base_url()?>Auth/login" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Masukkan email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kata sandi</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukkan kata sandi" required>
                        </div>

                        <div class="form-group form-check">
                            <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                </div>
                <div id="daftar" hidden>
                    <form action="<?php echo base_url()?>Auth/register" method="post">
                        <div class="form-group">
                            <label for="exampleInputNama">Nama lengkap</label>
                            <input name="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
                                placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input name="text" name="username" class="form-control" id="exampleInputUsername"
                                aria-describedby="usernameHelp" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Masukkan email"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNoHP">Nomor HP</label>
                            <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" aria-describedby="nohpHelp"
                                placeholder="Masukkan no hp"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kata sandi</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukkan kata sandi"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi kata sandi</label>
                            <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword1"
                                placeholder="Konfirmasi kata sandi">
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(function() {
    $('#btnmasuk').click(function() {
        $('#masuk').removeAttr('hidden');
        $('#daftar').attr('hidden', true);
        $('#btnmasuk').addClass('active');
        $('#btndaftar').removeClass('active');
    });
    $('#btndaftar').click(function() {
        $('#masuk').attr('hidden', true);
        $('#daftar').removeAttr('hidden');
        $('#btnmasuk').removeClass('active');
        $('#btndaftar').addClass('active');
    });
});
</script>