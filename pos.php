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
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <p>TOTAL BIAYA</p>
                    </div>
                    <div class="box-body">
                        <h2><b>Rp.</b>31.000</h2>
                        <p>Perintah :</p>
                        <input type="text" value="1 BDSD12322">
                        <input type="submit" value="OK">
                        <p>Tekan <b>OK</b> untuk menjalankan perintah</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="row">
                    <button style="width:50px;height:50px;">7</button>
                    <button style="width:50px;height:50px;">8</button>
                    <button style="width:50px;height:50px;">9</button>
                </div>
                <div class="row">
                    <button style="width:50px;height:50px;">4</button>
                    <button style="width:50px;height:50px;">5</button>
                    <button style="width:50px;height:50px;">6</button>
                </div>
                <div class="row">
                    <button style="width:50px;height:50px;">1</button>
                    <button style="width:50px;height:50px;">2</button>
                    <button style="width:50px;height:50px;">3</button>
                </div>
                <div class="row">
                    <button style="width:103px;height:50px;">0</button>
                    <button style="width:50px;height:50px;">.</button>
                </div>
                
            </div>
            <div class="col-xs-2">
                <button style="width:103px;height:50px;">OK</button>
                <button style="width:103px;height:50px;">CANCEL</button>
            </div>
        </div>
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
                                <td><b>ID Barang</b></td>
                                <td><b>Nama Barang</b></td>
                                <td><b>Harga</b></td>
                            </tr>
                            </thead>
                            <tr>
                                <td>BDSD12321</td>
                                <td>Oceana</td>
                                <td>6000</td>
                            </tr>
                            <tr>
                                <td>BDSD12321</td>
                                <td>Rinso Cair 250ml</td>
                                <td>10000</td>
                            </tr>
                            <tr>
                                <td>BDSD12231</td>
                                <td>Baygon Cair 250ml</td>
                                <td>12000</td>
                            </tr>
                            <tr>
                                <td>BDSD12444</td>
                                <td>Indomie Rebus Ayam Bawang</td>
                                <td>3000</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <h3>Menu Navigasi</h3>
                <button style="width:100px;height:100px;"><i class="fa fa-shopping-cart fa-4x"></i>Checkout</button>
                <button style="width:100px;height:100px;"><i class="fa fa-plus fa-4x"></i>Tambah</button>
                <button style="width:100px;height:100px;"><i class="fa fa-minus fa-4x"></i>Kurang</button>
                <button style="width:100px;height:100px;"><i class="fa fa-search fa-4x"></i><br>Cari</button>
            </div>
        </div>
    </div>
</div>
</html>