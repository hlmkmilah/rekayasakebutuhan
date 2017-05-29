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
    <div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Selamat Datang</h3>
				</div>
				<div class="box-body">
					<p>Selamat datang di aplikasi POS terpadu. Aplikasi ini menghadirkan sistem transaksi yang mudah digunakan dan sesuai dengan kebutuhan toko anda sekalian.
					Untuk mengakses modul yang tersedia, silahkan akses menu modul dibawah ini</p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="box" style="height:400px;">
				<div class="box-header with-border">
					<h3 class="box-title">Modul Kepegawaian</h3>
				</div>
				<div class="box-body">
					<center><i class="fa fa-user fa-4x"></i></center>
					<p>Modul ini digunakan untuk melakukan pengelolaan pegawai dari toko anda</p>
					<button class="form-control">Lihat Pegawai</button>
					<button class="form-control">Tambah Pegawai</button>
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box" style="height:400px;">
				<div class="box-header with-border">
					<h3 class="box-title">Modul Kelola Gudang</h3>
				</div>
				<div class="box-body">
					<center><i class="fa fa-archive fa-4x"></i></center>
					<p>Modul ini digunakan untuk melakukan pengelolaan pegawai dari toko anda</p>
					<button class="form-control">Lihat Barang</button>
					<button class="form-control">Tambah Barang</button>
					<button class="form-control">Statistik Barang</button>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box" style="height:400px;">
				<div class="box-header with-border">
					<h3 class="box-title">Modul Kelola Keuangan</h3>
				</div>
				<div class="box-body">
					<center><i class="fa fa-money fa-4x"></i></center>
					<p>Modul ini digunakan untuk melakukan pengelolaan pegawai dari toko anda</p>
					<button class="form-control">Pemasukan</button>
					<button class="form-control">Pengeluaran</button>
					<button class="form-control">Transaksi</button>
					
				</div>
			</div>
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
