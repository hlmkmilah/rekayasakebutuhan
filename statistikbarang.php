<!DOCTYPE html>
<html>
<script src="plugins/jQuery/jquery-2.2.3.min.js" type="text/javascript"></script>
<?php require_once './header.php'; ?>
<?php require_once './sidebar.php'; ?>
<section class="content">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Statistik Bulanan Barang</h3>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="lineChart" style="height:230px"></canvas>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Rincian Pemasukan</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead align="center">
                <tr>
                    <td><b>Merk</b></td>
                    <td><b>Januari</b></td>
                    <td><b>Februari</b></td>
                    <td><b>Maret</b></td>
                    <td><b>April</b></td>
                    <td><b>Mei</b></td>
                    <td><b>Juni</b></td>
                </tr>
                </thead>
                <tr>
                    <td>Chitato</td>
                    <td>85</td>
                    <td>89</td>
                    <td>80</td>
                    <td>81</td>
                    <td>56</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td>Oceana</td>
                    <td>68</td>
                    <td>48</td>
                    <td>40</td>
                    <td>30</td>
                    <td>36</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>Sunsilk</td>
                    <td>38</td>
                    <td>58</td>
                    <td>50</td>
                    <td>40</td>
                    <td>56</td>
                    <td>47</td>
                </tr>
                <tr>
                    <td>Sunlight</td>
                    <td>30</td>
                    <td>30</td>
                    <td>35</td>
                    <td>50</td>
                    <td>75</td>
                    <td>56</td>
                </tr>
                <tr>
                    <td>Good Times</td>
                    <td>45</td>
                    <td>20</td>
                    <td>56</td>
                    <td>88</td>
                    <td>99</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Aqua</td>
                    <td>54</td>
                    <td>42</td>
                    <td>40</td>
                    <td>20</td>
                    <td>90</td>
                    <td>40</td>
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
                    label: "Chitato",
                    fillColor: "rgba(178, 34, 34,0.9)",
                    strokeColor: "rgba(178, 34, 34,0.8)",
                    pointColor: "rgba(178, 34, 34,1)",
                    pointStrokeColor: "#b22222",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(178, 34, 34,1)",
                    data: [85, 89, 80, 81, 56, 55]
                },
                {
                    label: "Oceana",
                    fillColor: "rgba(102, 205, 170,0.9)",
                    strokeColor: "rgba(102, 205, 170,0.8)",
                    pointColor: "#66cdaa",
                    pointStrokeColor: "rgba(102, 205, 170,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(102, 205, 170,1)",
                    data: [68, 48, 40, 30, 36, 27]
                },
                {
                    label: "Sunsilk",
                    fillColor: "rgba(255, 215, 0,0.9)",
                    strokeColor: "rgba(255, 215, 0,0.8)",
                    pointColor: "#ffd700",
                    pointStrokeColor: "rgba(255, 215, 0,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(255, 215, 0,1)",
                    data: [38, 58, 50, 40, 56, 47]
                },
                {
                    label: "Sunlight",
                    fillColor: "rgba(0, 255, 0,0.9)",
                    strokeColor: "rgba(0, 255, 0,0.8)",
                    pointColor: "#00ff00",
                    pointStrokeColor: "rgba(0, 255, 0,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(0, 255, 0,1)",
                    data: [30, 30, 35, 50, 75, 56]
                },
                {
                    label: "Good Times",
                    fillColor: "rgba(255, 69, 0,0.9)",
                    strokeColor: "rgba(255, 69, 0,0.8)",
                    pointColor: "#ff4500",
                    pointStrokeColor: "rgba(255, 69, 0,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(255, 69, 0,1)",
                    data: [45, 20, 56, 88, 99, 100]
                },
                {
                    label: "Aqua",
                    fillColor: "rgba(0, 255, 255,0.9)",
                    strokeColor: "rgba(0, 255, 255,0.8)",
                    pointColor: "#00ffff",
                    pointStrokeColor: "rgba(0, 255, 255,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(0, 255, 255,1)",
                    data: [54, 42, 40, 20, 90, 40]
                },
            ]
        };

        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        var lineChartData = areaChartData;
        var lineChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };

        lineChartOptions.datasetFill = false;
        lineChart.Line(lineChartData, lineChartOptions);
    });
</script>


<?php require_once './footer.php' ;?>
</html>