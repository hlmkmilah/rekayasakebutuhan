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
                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Barang</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="BR0001" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama/Merk Barang</label>


                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail13" placeholder="Chitato">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis/Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="inputEmail3" name="Jenis/Kategori">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                            <option value="alat">Alat Rumah Tangga</option>
                            <option value="keperluanrt">Keperluan Rumah Tangga</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Barang</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputEmail3" placeholder="20">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Harga Barang</label>

                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="inputEmail3" placeholder="6500">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="lihatbarang.php.php" class="btn btn-default" role="button">
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
