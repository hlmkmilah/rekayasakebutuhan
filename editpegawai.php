<!DOCTYPE html>
<html>
<?php require_once './header.php'; ?>
<?php require_once './sidebar.php'; ?>

<section class="content">
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
                        <select class="form-control" id="inputEmail3" placeholder="Bagian">
                            <option value="admin">Admin</option>
                            <option value="akuntan">Akuntan</option>
                            <option value="kasir">Kasir</option>
                            <option value="gudang">Gudang</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="theo.pratama@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No. HP</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="08562983623">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Gaji</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Rp 1.000.000,00">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label><input type="radio" name="status" value="aktif" checked>Aktif</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="nonaktif">Non Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="detilpegawai.php" class="btn btn-default" role="button">
                    Kembali
                </a>
                <a href="pegawai.php" class="btn btn-success pull-right" role="button">
                    Simpan
                </a>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</section>
<?php require_once './footer.php' ;?>
</html>
