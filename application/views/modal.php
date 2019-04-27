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
                    <form action="<?php echo base_url() ?>Auth/login" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input name="emaillogin" type="email" class="form-control" id="exampleInputEmail1"
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
                    <form action="<?php echo base_url() ?>Auth/register" method="post">
                        <div class="form-group">
                            <label for="exampleInputNama">Nama lengkap</label>
                            <input type="text" name="namaLengkap" class="form-control" id="exampleInputNama"
                                aria-describedby="namaHelp" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputUsername"
                                aria-describedby="usernameHelp" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Alamat Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail2"
                                aria-describedby="emailHelp" placeholder="Masukkan email" required>
                        </div>
						 <div class="form-group">
                            <label for="exampleInputAlamat">Alamat Rumah</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputAlamat"
                                aria-describedby="alamatHelp" placeholder="Masukkan alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNoHP">Nomor HP</label>
                            <input type="text" name="nohp" class="form-control" id="exampleInputNoHP"
                                aria-describedby="nohpHelp" placeholder="Masukkan no hp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Kata sandi</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword2"
                                placeholder="Masukkan kata sandi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Konfirmasi kata sandi</label>
                            <input type="password" class="form-control"
                                id="exampleInputConfirmPassword1" placeholder="Konfirmasi kata sandi">
                        </div>
                        <div class="alert alert-danger" id="confirmmessagedanger" role="alert">Konfirmasi kata sandi
                            tidak sama dengan kata sandi</div>

                        <button id="btnsubmitdaftar" type="submit" class="btn btn-primary">Daftar</button>
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
    $('#confirmmessagedanger').attr('hidden', true);

    $('#exampleInputConfirmPassword1').on('keyup', function() {
        if ($('#exampleInputPassword2').val() === $('#exampleInputConfirmPassword1').val()) {
            $('#confirmmessagedanger').attr('hidden', true);
            $('#btnsubmitdaftar').removeAttr('disabled');
        } else {
            $('#confirmmessagedanger').removeAttr('hidden');
            $('#btnsubmitdaftar').attr('disabled', true);
        }
    });
});
</script>