<!DOCTYPE html>
<html>
<?php require_once './header.php'; ?>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="box box-primary">
            <div class="box-body">
                <h2>POINT OF SALES</h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="row">
            <div class="row">
                <div class="col-xs-6">
                    <div class="box">
                        <div class="box-header">
                            <p>Rincian</p>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead align="center">
                                <tr>
									<td width=5></td>
                                    <td><b>Kode Barang</b></td>
                                    <td><b>Nama Barang</b></td>
                                    <td><b>Jumlah</b></td>
                                    <td><b>Harga</b></td>
                                </tr>
                                </thead>
                                <tr>
									<td width=5><input type="checkbox"></td>
                                    <td>132018478233</td>
                                    <td>Oceana</td>
                                    <td><input type="number" style="width:50px" value=1></td>
                                    <td>6000</td>
                                </tr>
                                <tr>
									<td width=5><input type="checkbox"></td>
                                    <td>284534087234</td>
                                    <td>Rinso Cair 250ml</td>
                                    <td><input type="number" style="width:50px" value=1></td>
                                    <td>10000</td>
                                </tr>
                                <tr>
									<td width=5><input type="checkbox"></td>
                                    <td>6830434502341</td>
                                    <td>Baygon Cair 250ml</td>
                                    <td><input type="number" style="width:50px" value=1></td>
                                    <td>12000</td>
                                </tr>
                                <tr>
									<td width=5><input type="checkbox"></td>
                                    <td>2839024960234</td>
                                    <td>Indomie Rebus Ayam Bawang</td>
									<td><input type="number" style="width:50px" value=1></td>
                                    <td>3000</td>
                                </tr>
                            </table>
							<button class="btn btn-danger pull-right" style="margin-top:5px;" >Batalkan</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box">
                        <div class="box-header">
                        </div>
                        <div class="box-body">
                            <div class="col-xs-6">
                                <p>Kode barang:</p>
                                <input type="text" value="132018478235">
                                <input type="submit" value="OK">
                            </div>
                            <div class="col-xs-6">
                                <h1><b>Rp 31.000</b></h1>
                            </div>

                        </div>
                    </div>
                </div>
			

            <div class="col-xs-5 pull-right">
                <div class="row">
                    <button style="width:100px;height:100px;">7</button>
                    <button style="width:100px;height:100px;">8</button>
                    <button style="width:100px;height:100px;">9</button>
					<button style="width:100px;height:100px;">CORRECTION</button>
                </div>
                <div class="row">
                    <button style="width:100px;height:100px;">4</button>
                    <button style="width:100px;height:100px;">5</button>
                    <button style="width:100px;height:100px;">6</button>
					<button style="width:100px;height:100px;background-color:green;color:white;">ENTER</button>		
                </div>
                <div class="row">
                    <button style="width:100px;height:100px;">1</button>
                    <button style="width:100px;height:100px;">2</button>
                    <button style="width:100px;height:100px;">3</button>
                </div>
                <div class="row">
                    <button style="width:100px;height:100px;">C</button>
                    <button style="width:100px;height:100px;">0</button>
                    <button style="width:100px;height:100px;">.</button>
                </div>
            </div>
                <div class="col-xs-6">
                    <table class="table">
                        <tr>
                            <td>Kasir: </td>
                            <td>Sabila Malahati Arnindya</td>
                            <td>Total:</td>
                            <td><b>Rp 31.000</b></td>
                        </tr>
                        <tr>
                            <td>Tanggal:</td>
                            <td>29 Mei 2017</td>
                            <td>Bayar:</td>
                            <td>Rp 50.000</td>
                        </tr>
                        <tr>
                            <td>Waktu:</td>
                            <td>14.20</td>
                            <td>Kembali:</td>
                            <td>Rp 19.000</td>

                        </tr>
                    </table>
                </div>
                <div class="col-xs-6">
                    <button style="width:100px;height:100px;"><i class="fa fa-shopping-cart fa-4x"></i></button>
                    <button style="width:100px;height:100px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-search fa-4x"></i><br></button>
				
                </div>

        </div>

        </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PENCARIAN BARANG</h4>
      </div>
      <div class="modal-body">
		<input type="text"><button>Cari</button>
		<hr>
        <table class="table table-bordered">
			<thead align="center">
			<tr>
				<td><b>Kode Barang</b></td>
				<td><b>Nama Barang</b></td>
				<td><b>Jumlah</b></td>
				<td><b>Harga</b></td>
			</tr>
			</thead>
			<tr>
				<td>132018478233</td>
				<td>Oceana</td>
				<td><input type="number"></td>
				<td>6000</td>
				<td><button>+</button></td>
			</tr>
			<tr>
				<td>284534087234</td>
				<td>Rinso Cair 250ml</td>
				<td><input type="number"></td>
				<td>10000</td>
				<td><button>+</button></td>
			</tr>
			<tr>
				<td>6830434502341</td>
				<td>Baygon Cair 250ml</td>
				<td><input type="number"></td>
				<td>12000</td>
				<td><button>+</button></td>
			</tr>
			<tr>
				<td>2839024960234</td>
				<td>Indomie Rebus Ayam Bawang</td>
				<td><input type="number"></td>
				<td>3000</td>
				<td><button>+</button></td>
			</tr>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</html>