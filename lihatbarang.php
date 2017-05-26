<!DOCTYPE html>
<html>
<style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
</style>
<?php require_once './header.php'; ?>
<?php require_once './sidebar.php'; ?>
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Barang</h3>
        </div>
        <div class="box-body">

            <table class="table table-bordered">
                <thead align="center">
                <tr>
                    <td><b>Kode Barang</b></td>
                    <td><b>Nama/Merk Barang</b></td>
                    <td><b>Jenis/Kategori</b></td>
                    <td><b>Jumlah Barang</b></td>
                    <td><b>Harga Barang</b></td>
                    <td colspan="2"><b>Action</b></td>
                </tr>
                </thead>
                <tr>
                    <td>BR001</td>
                    <td>Chitato</td>
                    <td>Makanan</td>
                    <td>20</td>
                    <td>6500</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR002</td>
                    <td>Oceana</td>
                    <td>Minuman</td>
                    <td>30</td>
                    <td>6000</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR003</td>
                    <td>Lifebuoy</td>
                    <td>Keperluan Rumah Tangga</td>
                    <td>15</td>
                    <td>13200</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR004</td>
                    <td>Kipas Angin</td>
                    <td>Alat Rumah Tangga</td>
                    <td>10</td>
                    <td>130000</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR005</td>
                    <td>Meja</td>
                    <td>Alat Rumah Tangga</td>
                    <td>10</td>
                    <td>155000</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR006</td>
                    <td>Lux</td>
                    <td>Keperluan Rumah Tangga</td>
                    <td>30</td>
                    <td>5000</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR007</td>
                    <td>Aqua 600ml</td>
                    <td>Minuman</td>
                    <td>20</td>
                    <td>4000</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR008</td>
                    <td>Club 600ml</td>
                    <td>Minuman</td>
                    <td>20</td>
                    <td>2500</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR009</td>
                    <td>Good Time</td>
                    <td>Makanan</td>
                    <td>30</td>
                    <td>1500</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>BR010</td>
                    <td>Pepsodent</td>
                    <td>Keperluan Rumah Tangga</td>
                    <td>20</td>
                    <td>11000</td>
                    <td align="center" width="30px">
                        <a href="editbarang.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-pencil-square"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="example-modal">
            <div class="modal modal-danger">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Hapus Data</h4>
                        </div>
                        <div class="modal-body">
                            <p>Anda yakin ingin menghapus data ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-outline">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php require_once './footer.php' ;?>
</html>
