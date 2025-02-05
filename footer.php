  <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <div class="footer">
      <p class="mb-0"> @2025 | Developed By : <a href="microlan.in" target="_blank">Microlan</a>
      </p>
    </div>
    <!-- end footer -->
  </div>
  <!-- end wrapper -->
  <!--start switcher-->
  <div class="switcher-body">
    <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
    <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
      <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
      <h6 class="mb-0">Theme Variation</h6>
      <hr>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
        <label class="form-check-label" for="lightmode">Light</label>
      </div>
      <hr>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
        <label class="form-check-label" for="darkmode">Dark</label>
      </div>
      <hr>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
        <label class="form-check-label" for="darksidebar">Semi Dark</label>
        </div>
        <hr>
       <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
        <label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
        </div>
      </div>
    </div>
     </div>
     <!--end switcher-->
  <!-- JavaScript -->
  
  <!-- Bootstrap JS -->
  <script src="vertical/assets/js/bootstrap.bundle.min.js"></script>

  <!--plugins-->
  <script src="vertical/assets/js/jquery.min.js"></script>
  <script src="vertical/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <!-- Vector map JavaScript -->
  <script src="vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="vertical/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="vertical/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
  <script src="vertical/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="vertical/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
  <script src="vertical/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
  <script src="vertical/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="vertical/assets/js/index.js"></script>

  <script src="vertical/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      //Default data table
      $('#example').DataTable();
      var table = $('#example2').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
      });
      table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
  </script>
  <!-- App JS -->
  <script src="vertical/assets/js/app.js"></script>
  <script>
    new PerfectScrollbar('.dashboard-social-list');
    new PerfectScrollbar('.dashboard-top-countries');
  </script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
     <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
   <script>
document.addEventListener('DOMContentLoaded', function () {
    var availability = 75; // Change dynamically

    var chart = Highcharts.chart('availabilityChart', {
        chart: {
            type: 'solidgauge',
            height: '50%',
            backgroundColor: 'transparent'
        },
        title: {
            text: '',
            style: {
                fontSize: '18px',
                fontWeight: 'bold',
                color: '#333'
            },
            y: 30
        },
        pane: {
            startAngle: -90,
            endAngle: 90,
            background: {
                outerRadius: '100%',
                innerRadius: '70%',
                shape: 'arc',
                borderWidth: 0,
                backgroundColor: '#ddd'
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            lineWidth: 0,
            tickPositions: [],
            stops: [
                [0.3, '#e74c3c'],  // Red for low
                [0.7, '#f1c40f'],  // Yellow for medium
                [1, '#2ecc71']      // Green for high
            ]
        },
        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: -25,
                    borderWidth: 0,
                    useHTML: true,
                    format: `<div style="text-align:center;">
                                <span style="font-size:28px; font-weight:bold; color:#333;">{y}%</span>
                                <br/>
                                <span style="font-size:14px; color:#555;">Available</span>
                             </div>`
                },
                rounded: true,
                animation: {
                    duration: 2000  // Smooth fill animation
                }
            }
        },
        series: [{
            name: 'Availability',
            data: [0],  // Start from 0, will animate to availability
            tooltip: { valueSuffix: '%' }
        }]
    });

    // Animate progress fill after chart loads
    setTimeout(() => {
        chart.series[0].setData([availability]);
    }, 500);
});
</script>
 <script>
document.addEventListener('DOMContentLoaded', function () {
    var performance = 85; // Change dynamically

    var chart = Highcharts.chart('performanceChart', {
        chart: {
            type: 'solidgauge',
            height: '50%',
            backgroundColor: 'transparent'
        },
        title: {
            text: ' ',
            style: {
                fontSize: '18px',
                fontWeight: 'bold',
                color: '#333'
            },
            y: 30
        },
        pane: {
            startAngle: -90,
            endAngle: 90,
            background: {
                outerRadius: '100%',
                innerRadius: '70%',
                shape: 'arc',
                borderWidth: 0,
                backgroundColor: '#ddd'
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            lineWidth: 0,
            tickPositions: [],
            stops: [
                [0.3, '#FF5733'],  // Poor (Red-Orange)
                [0.6, '#F4C542'],  // Average (Yellow)
                [0.8, '#2D98DA'],  // Good (Blue)
                [1, '#2ECC71']      // Excellent (Green)
            ]
        },
        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: -25,
                    borderWidth: 0,
                    useHTML: true,
                    format: `<div style="text-align:center;">
                                <span style="font-size:28px; font-weight:bold; color:#333;">{y}%</span>
                                <br/>
                                <span style="font-size:14px; color:#555;">Performance</span>
                             </div>`
                },
                rounded: true,
                animation: {
                    duration: 2000  // Smooth fill animation
                }
            }
        },
        series: [{
            name: 'Performance',
            data: [0],  // Start from 0, will animate to performance
            tooltip: { valueSuffix: '%' }
        }]
    });

    // Animate progress fill after chart loads
    setTimeout(() => {
        chart.series[0].setData([performance]);
    }, 500);
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var quality = 85; // Change dynamically

    var chart = Highcharts.chart('qualityChart', {
        chart: {
            type: 'solidgauge',
            height: '50%',
            backgroundColor: 'transparent'
        },
        title: {
            text: ' ',
            style: {
                fontSize: '18px',
                fontWeight: 'bold',
                color: '#333'
            },
            y: 30
        },
        pane: {
            startAngle: -90,
            endAngle: 90,
            background: {
                outerRadius: '100%',
                innerRadius: '70%',
                shape: 'arc',
                borderWidth: 0,
                backgroundColor: '#ddd'
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            lineWidth: 0,
            tickPositions: [],
            stops: [
                [0.3, '#D9534F'],  // Poor (Red)
                [0.6, '#F0AD4E'],  // Fair (Orange)
                [0.8, '#5BC0DE'],  // Good (Blue)
                [1, '#5CB85C']      // Excellent (Green)
            ]
        },
        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: -25,
                    borderWidth: 0,
                    useHTML: true,
                    format: `<div style="text-align:center;">
                                <span style="font-size:28px; font-weight:bold; color:#333;">{y}%</span>
                                <br/>
                                <span style="font-size:14px; color:#555;">Quality</span>
                             </div>`
                },
                rounded: true,
                animation: {
                    duration: 2000  // Smooth fill animation
                }
            }
        },
        series: [{
            name: 'Quality',
            data: [0],  // Start from 0, will animate to quality value
            tooltip: { valueSuffix: '%' }
        }]
    });

    // Animate progress fill after chart loads
    setTimeout(() => {
        chart.series[0].setData([quality]);
    }, 500);
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var oee = 85; // Change dynamically

    var chart = Highcharts.chart('oeeChart', {
        chart: {
            type: 'solidgauge',
            height: '50%',
            backgroundColor: 'transparent'
        },
        title: {
            text: ' ',
            style: {
                fontSize: '18px',
                fontWeight: 'bold',
                color: '#333'
            },
            y: 30
        },
        pane: {
            startAngle: -90,
            endAngle: 90,
            background: {
                outerRadius: '100%',
                innerRadius: '70%',
                shape: 'arc',
                borderWidth: 0,
                backgroundColor: '#ddd'
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            lineWidth: 0,
            tickPositions: [],
            stops: [
                [0.4, '#D9534F'],  // Poor OEE (Red)
                [0.6, '#F0AD4E'],  // Fair OEE (Orange)
                [0.8, '#5BC0DE'],  // Good OEE (Blue)
                [1, '#5CB85C']      // Excellent OEE (Green)
            ]
        },
        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: -25,
                    borderWidth: 0,
                    useHTML: true,
                    format: `<div style="text-align:center;">
                                <span style="font-size:28px; font-weight:bold; color:#333;">{y}%</span>
                                <br/>
                                <span style="font-size:14px; color:#555;">OEE</span>
                             </div>`
                },
                rounded: true,
                animation: {
                    duration: 2000  // Smooth fill animation
                }
            }
        },
        series: [{
            name: 'OEE',
            data: [0],  // Start from 0, will animate to OEE value
            tooltip: { valueSuffix: '%' }
        }]
    });

    // Animate progress fill after chart loads
    setTimeout(() => {
        chart.series[0].setData([oee]);
    }, 500);
});
</script>
</body>

</html>