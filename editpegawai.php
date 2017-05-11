<!DOCTYPE html>
<html>
<?php require_once './header.php'; ?>
<?php require_once './sidebar.php'; ?>
<div class="content-wrapper">
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Pegawai</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">

            <div class="form-group">
                <img class="profile-user-img img-responsive img-circle control-label" src="dist/img/user2-160x160.jpg" alt="User profile picture">
                <br>
                <input type="file" style="margin: 0 auto" id="exampleInputFile">
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="PG0001" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail13" placeholder="Theo Pratama">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Bagian</label>

                <div class="col-sm-10">
                    <select class="form-control" name="bagian" id="inputEmail13">
                        <option value="kasir">Kasir</option>
                        <option value="akuntan">Akuntan</option>
                        <option value="gudang">Gudang</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="theopratama@gmail.com">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Kata Sandi</label>

                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Masukkan kata sandi yang baru">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Telepon</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="081254359355">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Gaji</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Rp 3.000.000,00">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-10">
                    <form>
                        <input type="radio" name="status" value="aktif" checked> Aktif<br>
                        <input type="radio" name="status" value="tidak_aktif"> Tidak Aktif<br>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Batal</button>
            <button type="submit" class="btn btn-info pull-right">Simpan</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
</div>
<?php require_once './footer.php' ;?>
</html>
`