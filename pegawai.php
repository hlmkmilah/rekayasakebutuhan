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
            <h3 class="box-title">Pegawai</h3>
        </div>
            <div class="box-body">

            <table class="table table-bordered">
                <thead align="center">
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Nama</b></td>
                        <td><b>Bagian</b></td>
                        <td><b>Email</b></td>
                        <td><b>No HP</b></td>
                        <td colspan="2"><b>Action</b></td>
                    </tr>
                </thead>
                <tr>
                    <td>PG001</td>
                    <td>Theo Pratama</td>
                    <td>Admin</td>
                    <td>theo.pratama@gmail.com</td>
                    <td>08562983623</td>
                    <td align="center" width="30px">
                        <a href="detilpegawai.php" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG002</td>
                    <td>Hilma Kamilah</td>
                    <td>Akuntan</td>
                    <td>hlmkmilah@gmail.com</td>
                    <td>081278932347</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG003</td>
                    <td>Sabila Malahati Arnindya</td>
                    <td>Kasir</td>
                    <td>bellaarnindya@gmail.com</td>
                    <td>081254359355</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG004</td>
                    <td>Rani Aulia Hidayat</td>
                    <td>Akuntan</td>
                    <td>rani.aulia72@gmail.com</td>
                    <td>081238935382</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG005</td>
                    <td>Andi Ersaldy Raisha Pakki</td>
                    <td>Gudang</td>
                    <td>andiersaldy@gmail.com</td>
                    <td>0856832940123</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG006</td>
                    <td>Afifah Asmar Sari</td>
                    <td>Akuntan</td>
                    <td>afifahas@gmail.com</td>
                    <td>081334289573</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG007</td>
                    <td>Dimas Hirda Pratama</td>
                    <td>Admin</td>
                    <td>dimashirda@yahoo.co.id</td>
                    <td>0817598320823</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG008</td>
                    <td>Aldi Febriansyah</td>
                    <td>Gudang</td>
                    <td>aldif@rocketmail.com</td>
                    <td>081649291723</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG009</td>
                    <td>Farhan Maulana</td>
                    <td>Kasir</td>
                    <td>farhanmln@ymail.com</td>
                    <td>081938182059</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
                    <td align="center" width="30px">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            <i class='fa fa-trash'></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PG010</td>
                    <td>Nafia Rizky Yogayana</td>
                    <td>Kasir</td>
                    <td>nafiary@gmail.com</td>
                    <td>085612398751</td>
                    <td align="center" width="30px">
                        <a href="#" class="btn btn-success btn-sm"
                           role="button"><i class="fa fa-eye"></i></a></td>
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
