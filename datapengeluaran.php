<!DOCTYPE html>
<html>
<script src="plugins/jQuery/jquery-2.2.3.min.js" type="text/javascript"></script>
<?php require_once './header.php'; ?>
<?php require_once './sidebar.php'; ?>
<section class="content">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Rata-rata Pengeluaran per Bulan</h3>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Rincian Pengeluaran</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead align="center">
                <tr>
                    <td><b>ID Transaksi</b></td>
                    <td><b>Tanggal</b></td>
                    <td><b>Nominal Pengeluaran</b></td>
                </tr>
                </thead>
                <tr>
                    <td>OUT001</td>
                    <td>01/05/2017</td>
                    <td>Rp 8.237.611,00</td>
                </tr>
                <tr>
                    <td>OUT002</td>
                    <td>02/05/2017</td>
                    <td>Rp 3.672.120,00</td>
                </tr>
                <tr>
                    <td>OUT003</td>
                    <td>03/05/2017</td>
                    <td>Rp 5.185.335,00</td>
                </tr>
                <tr>
                    <td>OUT004</td>
                    <td>04/05/2017</td>
                    <td>Rp 5.000.003,00</td>
                </tr>
                <tr>
                    <td>OUT005</td>
                    <td>05/05/2017</td>
                    <td>Rp 7.452.061,00</td>
                </tr>
                <tr>
                    <td>OUT006</td>
                    <td>06/05/2017</td>
                    <td>Rp 2.768.124,00</td>
                </tr>
            </table>
        </div>
    </div>
</section>

<script src="plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var areaChartData = {
            labels: ["Januari", "Feburari", "Maret", "April", "Mei", "Juni"],
            datasets: [
                {
                    label: "Pengeluaran",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [5020498, 4738291, 6837111, 8543618, 10295837, 3000987]
                }
            ]
        };

        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[0].fillColor = "#00a65a";
        barChartData.datasets[0].strokeColor = "#00a65a";
        barChartData.datasets[0].pointColor = "#00a65a";
        var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
    });
</script>


<?php require_once './footer.php' ;?>
</html>
