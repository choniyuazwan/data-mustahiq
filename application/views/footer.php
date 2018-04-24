
</div>

<!-- <script src=" <?php echo base_url(). "assets" ?> /jquery-chained/ajax.googleapis.com.jquery.min.js" type="text/javascript" charset="utf-8"></script> -->

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

<!-- DataTables -->
<script src=" <?php echo base_url(). "assets" ?> /bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src=" <?php echo base_url(). "assets" ?> /bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- Page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      "scrollX"     : true,
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<script src=" <?php echo base_url(). "assets" ?> /jquery-chained/jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
    /* For jquery.chained.js */
    $("#filter_kelurahan").chained("#filter_kecamatan");
  });
</script>

<script type="text/javascript" charset="utf-8">
  $(function() {
    $("#kelurahan").chained("#kecamatan");
  });
</script>

<!-- <script>
  $(function() {
    $('[data-toggle="datepicker"]').datepicker({
      // autoHide: true,
      // zIndex: 2048,
    });
  });
</script> -->

<!-- Page script -->
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  })
</script>

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
          data                : [28, 48, 40, 19, 86, 27]
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

</body>
</html>