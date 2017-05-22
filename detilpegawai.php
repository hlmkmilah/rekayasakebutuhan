<!DOCTYPE html>
<html>
<?php require_once './header.php'; ?>
<?php require_once './sidebar.php'; ?>
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Detil Pegawai</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-3">
                            <img class="profile-user-img img-responsive img-circle control-label" src="dist/img/user2-160x160.jpg" alt="User profile picture">
                        </div>
                        <br>
                        <div class="col-sm-9">
                            <div class="col-sm-3">
                                <label>ID</label>
                            </div>
                            <div class="col-sm-9">
                                <p>PG001</p>
                            </div>
                            <div class="col-sm-3">
                                <label>Nama</label>
                            </div>
                            <div class="col-sm-9">
                                <p>Theo Pratama</p>
                            </div>
                            <div class="col-sm-3">
                                <label>Bagian</label>
                            </div>
                            <div class="col-sm-9">
                                <p>Admin</p>
                            </div>
                            <div class="col-sm-3">
                                <label>Email</label>
                            </div>
                            <div class="col-sm-9">
                                <p>theo.pratama@gmail.com</p>
                            </div>
                            <div class="col-sm-3">
                                <label>No HP</label>
                            </div>
                            <div class="col-sm-9">
                                <p>085684294013</p>
                            </div>
                            <div class="col-sm-3">
                                <label>Gaji</label>
                            </div>
                            <div class="col-sm-9">
                                <p>Rp 1.000.000,00</p>
                            </div>
                            <div class="col-sm-3">
                                <label>Status</label>
                            </div>
                            <div class="col-sm-9">
                                <p>Aktif</p>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <h4><b>Presensi</b></h4>
                            <table class="table table-bordered">
                                <thead align="center">
                                <tr>
                                    <td><b>Tanggal</b></td>
                                    <td><b>Waktu Datang</b></td>
                                    <td><b>Waktu Pulang</b></td>
                                </tr>
                                </thead>
                                <tr>
                                    <td>01/05/2017</td>
                                    <td>07.04</td>
                                    <td>17.10</td>
                                </tr>
                                <tr>
                                    <td>02/05/2017</td>
                                    <td>07.02</td>
                                    <td>17.05</td>
                                </tr>
                                <tr>
                                    <td>03/05/2017</td>
                                    <td>07.11</td>
                                    <td>17.07</td>
                                </tr>
                                <tr>
                                    <td>04/05/2017</td>
                                    <td>07.08</td>
                                    <td>1.13</td>
                                </tr>
                                <tr>
                                    <td>05/05/2017</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>06/05/2017</td>
                                    <td>07.30</td>
                                    <td>17.02</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
                <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Kembali</button>
                <button type="submit" class="btn btn-info pull-right">Edit</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</section>

<?php require_once './footer.php' ;?>
</html>
