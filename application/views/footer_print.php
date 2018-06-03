
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/chart.js/Chart.js"></script>
<!-- bootstrap datepicker -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- SlimScroll -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src=" <?php echo base_url(). "assets" ?> /dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" <?php echo base_url(). "assets" ?> /dist/js/demo.js"></script>

<!-- FLOT CHARTS -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/Flot/jquery.flot.categories.js"></script>


<script>
  $(function () {
    var areaChartData = {
      labels  : ['Bogor Tengah', 'Bogor Utara', 'Bogor Timur', 'Bogor Selatan', 'Bogor Barat', 'Tanah Sareal'],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $bogor_tengah. ',' .$bogor_utara. ',' .$bogor_timur. ',' .$bogor_selatan. ',' .$bogor_barat. ',' .$bogor_sareal ?>]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 10,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    var areaChartData = {
      labels  : ['Babakan', 'Babakan Pasar', 'Cibogor', 'Ciwaringin', 'Gudang', 'Kebon Kelapa', 'Pabaton', 'Paledang', 'Panaragan', 'Sempur', 'Tegallega'],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $babakan. ',' .$babakan_pasar. ',' .$cibogor. ',' .$ciwaringin. ',' .$gudang. ',' .$kebon_kelapa. ',' .$pabaton. ',' .$paledang. ',' .$panaragan. ',' .$sempur. ',' .$tegallega ?>]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#bogorTengah').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 10,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    var areaChartData = {
      labels  : ['Bantarjati', 'Cibuluh', 'Ciluar', 'Cimahpar', 'Ciparigi', 'Kedung Halang', 'Tanah Baru', 'Tegal Gundil'],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $bantarjati. ',' .$cibuluh. ',' .$ciluar. ',' .$cimahpar. ',' .$ciparigi. ',' .$kedung_halang. ',' .$tanah_baru. ',' .$tegal_gundil ?>]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#bogorUtara').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 10,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    var areaChartData = {
      labels  : ['Baranangsiang', 'Katulampa', 'Sindangrasa', 'Sindangsari', 'Sukasari', 'Tajur'],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $baranangsiang. ',' .$katulampa. ',' .$sindangrasa. ',' .$sindangsari. ',' .$sukasari. ',' .$tajur ?>]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#bogorTimur').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 10,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    var areaChartData = {
      labels  : ['Batutulis', 'Bojongkerta', 'Bondongan', 'Cikaret', 'Cipaku', 'Empang', 'Ganteng', 'Harjasari', 'Kertamaya', 'Lawang Gintung', 'Muarasari', 'Mulyaharja', 'Pakuan', 'Pamoyanan', 'Rancamaya', 'Ranggamekar'],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $batutulis. ',' .$bojongkerta. ',' .$bondongan. ',' .$cikaret. ',' .$cipaku. ',' .$empang. ',' .$ganteng. ',' .$harjasari. ',' .$kertamaya. ',' .$lawang_gintung. ',' .$muarasari. ',' .$mulyaharja. ',' .$pakuan. ',' .$pamoyanan. ',' .$rancamaya. ',' .$ranggamekar ?>]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#bogorSelatan').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 10,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    var areaChartData = {
      labels  : ['Balumbang Jaya', 'Bubulak', 'Cilendek Barat', 'Cilendek Timur', 'Curuk', 'Curug Mekar', 'Gunung Batu', 'Loji', 'Margajaya', 'Menteng', 'Pasir Jaya', 'Pasir Kuda', 'Pasir Mulya', 'Semplak', 'Sindang Barang', 'Situ'],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $balumbang_jaya. ',' .$bubulak. ',' .$cilendek_barat. ',' .$cilendek_timur. ',' .$curuk. ',' .$curug_mekar. ',' .$gunung_batu. ',' .$loji. ',' .$margajaya. ',' .$menteng. ',' .$pasir_jaya . ',' .$pasir_kuda . ',' .$pasir_mulya . ',' .$semplak . ',' .$sindang_barang . ',' .$situ ?>]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#bogorBarat').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 10,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    var areaChartData = {
      labels  : ['Cibadak', 'Kayumanis', 'Kebon Pedes', 'Kedung Badak', 'Kedung Jaya', 'Kedug Waringin', 'Kencana', 'Mekarwangi', 'Sukadamai', 'Sukaresmi', 'Tanah Sareal'],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $cibadak. ',' .$kayumanis. ',' .$kebon_pedes. ',' .$kedung_badak. ',' .$kedung_jaya. ',' .$kedug_waringin. ',' .$kencana. ',' .$mekarwangi. ',' .$sukadamai. ',' .$sukaresmi. ',' .$tanah_sareal ?>]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#tanahSareal').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 10,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<!--
----------- 
DONUT CHART
----------- 
-->

<script>
  $(function () {
    var donutData = [
      { label: 'Bogor Tengah', data: <?= $bogor_tengah ?>, color: '#f56954' },
      { label: 'Bogor Utara', data: <?= $bogor_utara ?>, color: '#00a65a' },
      { label: 'Bogor Timur', data: <?= $bogor_timur ?>, color: '#f39c12' },
      { label: 'Bogor Selatan', data: <?= $bogor_selatan ?>, color: '#00c0ef' },
      { label: 'Bogor Barat', data: <?= $bogor_barat ?>, color: '#3c8dbc' },
      { label: 'Tanah Sareal', data: <?= $bogor_sareal ?>, color: '#CCFF33' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

<script>
  $(function () {
    var donutData = [
      { label: 'Babakan', data: <?php echo $babakan ?>, color: '#f56954' },
      { label: 'Babakan Pasar', data: <?php echo $babakan_pasar ?>, color: '#00a65a' },
      { label: 'Cibogor', data: <?php echo $cibogor ?>, color: '#f39c12' },
      { label: 'Ciwaringin', data: <?php echo $ciwaringin ?>, color: '#00c0ef' },
      { label: 'Gudang', data: <?php echo $gudang ?>, color: '#3c8dbc' },
      { label: 'Kebon Kelapa', data: <?php echo $kebon_kelapa ?>, color: '#CCFF33' },
      { label: 'Pabaton', data: <?php echo $pabaton ?>, color: '#0000ff' },
      { label: 'Paledang', data: <?php echo $paledang ?>, color: '#FF0000' },
      { label: 'Panaragan', data: <?php echo $panaragan ?>, color: '#40ff00' },
      { label: 'Sempur', data: <?php echo $sempur ?>, color: '#336600' },
      { label: 'Tegallega', data: <?php echo $tegallega ?>, color: '#8D6E63' }
    ]
    $.plot('#bogortengah-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

<script>
  $(function () {
    var donutData = [
      { label: 'Bantarjati', data: <?= $bantarjati ?>, color: '#f56954' },
      { label: 'Cibuluh', data: <?= $cibuluh ?>, color: '#00a65a' },
      { label: 'Ciluar', data: <?= $ciluar ?>, color: '#f39c12' },
      { label: 'Cimahpar', data: <?= $cimahpar ?>, color: '#00c0ef' },
      { label: 'Ciparigi', data: <?= $ciparigi ?>, color: '#3c8dbc' },
      { label: 'Kedung Halang', data: <?= $kedung_halang ?>, color: '#CCFF33' },
      { label: 'Tanah Baru', data: <?= $tanah_baru ?>, color: '#0000ff' },
      { label: 'Tegal Gundil', data: <?= $tegal_gundil ?>, color: '#FF0000' }
    ]
    $.plot('#bogorutara-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

<script>
  $(function () {
    var donutData = [
      { label: 'Baranangsiang', data: <?= $baranangsiang ?>, color: '#f56954' },
      { label: 'Katulampa', data: <?= $katulampa ?>, color: '#00a65a' },
      { label: 'Sindangrasa', data: <?= $sindangrasa ?>, color: '#f39c12' },
      { label: 'Sindangsari', data: <?= $sindangsari ?>, color: '#00c0ef' },
      { label: 'Sukasari', data: <?= $sukasari ?>, color: '#3c8dbc' },
      { label: 'Tajur', data: <?= $tajur ?>, color: '#CCFF33' }
    ]
    $.plot('#bogortimur-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

<script>
  $(function () {
    var donutData = [
      { label: 'Batutulis', data: <?= $batutulis ?>, color: '#f56954' },
      { label: 'Bojongkerta', data: <?= $bojongkerta ?>, color: '#00a65a' },
      { label: 'Bondongan', data: <?= $bondongan ?>, color: '#f39c12' },
      { label: 'Cikaret', data: <?= $cikaret ?>, color: '#00c0ef' },
      { label: 'Cipaku', data: <?= $cipaku ?>, color: '#3c8dbc' },
      { label: 'Empang', data: <?= $empang ?>, color: '#CCFF33' },
      { label: 'Ganteng', data: <?= $ganteng ?>, color: '#0000ff' },
      { label: 'Harjasari', data: <?= $harjasari ?>, color: '#FF0000' },
      { label: 'Kertamaya', data: <?= $kertamaya ?>, color: '#40ff00' },
      { label: 'Lawang', data: <?= $lawang_gintung ?>, color: '#336600' },
      { label: 'Muarasari', data: <?= $muarasari ?>, color: '#8D6E63' },
      { label: 'Mulyaharja', data: <?= $mulyaharja ?>, color: '#A569BD' },
      { label: 'Pakuan', data: <?= $pakuan ?>, color: '#CC99FF' },
      { label: 'Pamoyanan', data: <?= $pamoyanan ?>, color: '#2196F3' },
      { label: 'Rancamaya', data: <?= $rancamaya ?>, color: '#78909C' },
      { label: 'Ranggamekar', data: <?= $ranggamekar ?>, color: '#F06292' }
    ]
    $.plot('#bogorselatan-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

<script>
  $(function () {
    var donutData = [
      { label: 'Balumbang Jaya', data: <?= $balumbang_jaya ?>, color: '#f56954' },
      { label: 'Bubulak', data: <?= $bubulak ?>, color: '#00a65a' },
      { label: 'Cilendek Barat', data: <?= $cilendek_barat ?>, color: '#f39c12' },
      { label: 'Cilendek Timur', data: <?= $cilendek_timur ?>, color: '#00c0ef' },
      { label: 'Curuk', data: <?= $curuk ?>, color: '#3c8dbc' },
      { label: 'Curug Mekar', data: <?= $curug_mekar ?>, color: '#CCFF33' },
      { label: 'Gunung Batu', data: <?= $gunung_batu ?>, color: '#0000ff' },
      { label: 'Loji', data: <?= $loji ?>, color: '#FF0000' },
      { label: 'Margajaya', data: <?= $margajaya ?>, color: '#40ff00' },
      { label: 'Menteng Gintung', data: <?= $menteng ?>, color: '#336600' },
      { label: 'Pasir Jaya', data: <?= $pasir_jaya ?>, color: '#8D6E63' },
      { label: 'Pasir Kuda', data: <?= $pasir_kuda ?>, color: '#A569BD' },
      { label: 'Pasir Mulya', data: <?= $pasir_mulya ?>, color: '#CC99FF' },
      { label: 'Semplak', data: <?= $semplak ?>, color: '#2196F3' },
      { label: 'Sindang Barang', data: <?= $sindang_barang ?>, color: '#78909C' },
      { label: 'Situ', data: <?= $situ ?>, color: '#F06292' }
    ]
    $.plot('#bogorbarat-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

<script>
  $(function () {
    var donutData = [
      { label: 'Bogor Tengah', data: <?= $cibadak ?>, color: '#f56954' },
      { label: 'Bogor Utara', data: <?= $kayumanis ?>, color: '#00a65a' },
      { label: 'Bogor Timur', data: <?= $kebon_pedes ?>, color: '#f39c12' },
      { label: 'Bogor Selatan', data: <?= $kedung_badak ?>, color: '#00c0ef' },
      { label: 'Bogor Barat', data: <?= $kedung_jaya ?>, color: '#3c8dbc' },
      { label: 'Tanah Sareal', data: <?= $kedug_waringin ?>, color: '#CCFF33' },
      { label: 'Tanah Sareal', data: <?= $kencana ?>, color: '#0000ff' },
      { label: 'Tanah Sareal', data: <?= $mekarwangi ?>, color: '#FF0000' },
      { label: 'Tanah Sareal', data: <?= $sukadamai ?>, color: '#40ff00' },
      { label: 'Tanah Sareal', data: <?= $sukaresmi ?>, color: '#336600' },
      { label: 'Tanah Sareal', data: <?= $tanah_sareal ?>, color: '#8D6E63' }
    ]
    $.plot('#tanahsareal-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

</body>
</html>
