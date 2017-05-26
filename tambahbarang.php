<!DOCTYPE html>
<html>
<?php require_once './header.php'; ?>
<?php require_once './sidebar.php'; ?>

<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Barang</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Barang</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Kode Barang">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama/Merk Barang</label>


                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail13" placeholder="Nama Barang">
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
                        <input type="number" class="form-control" id="inputEmail3" placeholder="Jumlah Barang">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Harga Barang</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="inputEmail3" placeholder="Harga Barang">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="index.php" class="btn btn-default" role="button">
                    Batal
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
