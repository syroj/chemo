<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>-CHEMO-</title>

    <!-- Bootstrap -->
    <link href="{{asset('temp/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/animate.css')}}">
    <!-- Font Awesome -->
    <link href="{{asset('temp/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="{{asset('temp/production/css/maps/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="{{asset('temp/production/css/custom.css')}}" rel="stylesheet">
    <!--Syroj.css-->
    <link href="{{asset('temp/syroj.css')}}" rel="stylesheet">

    <!-- Slider
    ================================================== -->
    <link href="{{asset('landing/css/owl.carousel.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('landing/css/owl.theme.css')}}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('landing/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/responsive.css')}}">

    <script type="text/javascript" src="{{asset('landing/js/modernizr.custom.js')}}"></script>
    

  </head>

  <body class="nav-md">
    <div class="container body web">
      <div class="main_container">
        <!-- top navigation -->
        
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="row">
              <div class="col-md-8 navigasi">
              <ul class="nav navbar-nav">    
                @if(Auth::check() && Auth::user()->rule=='tim')
                <li><a href="{{url('/tim')}}"><i class="fa fa-home"></i> {{Auth::user()->name}} </a></li>
                <li><a href="{{url('/cbt')}}"><i class="fa fa-desktop"></i> CBT</a></li>
                <li><a href="{{url('/cbt')}}"><i class="fa fa-book"></i> Penilaian</a></li>
                <li><a href="{{url('/help')}}"><i class="fa fa-question"></i> Help</a></li>
                @elseif(Auth::check())
                <li><a href="{{url('/home')}}"><i class="fa fa-university"></i> {{Auth::user()->name}} </a></li>
                <li><a href="{{url('/tim')}}"><i class="fa fa-users"></i> Tim</a></li>
                <li><a href="{{url('/team')}}"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>
                <li><a href="{{url('/team')}}"><i class="fa fa-question"></i> Help</a></li>
                @endif
                @if(Auth::guest())
                <li><a href="{{url('/')}} "><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href="{{url('/')}}#about"><i class="glyphicon glyphicon-list"></i> Chemo?</a></li>
                <li><a href="{{url('/')}}#step"><i class="fa fa-desktop"></i> Perlombaan</a></li>
                <li><a href="{{url('/')}}#hadiah"><i class="fa fa-trophy"></i> Hadiah</a></li>
                <li><a href="{{url('/')}}#sponsor"><i class="fa fa-money"></i> Sponsor</a></li>    
                @endif
              </ul>
              </div>
            @if (Auth::guest())

              <div class="col-md-4 login">
                <ul class="nav navbar-nav kanan">
                  <a href="{{url('/login')}} " class="btn btn-primary kanan"><i class="glyphicon glyphicon-lock"></i> Login</a> 
                @else

                <li class=" nav navbar-nav kanan">
                  <a href="{{url('/logout')}}" class="btn btn-default login kanan" data-toggle="tooltip" data-placement="bottom" data-title="Logout"><i class="fa fa-power-off"></i></a>
                </li>
                </ul>  
              </div>
            </div>
            
            @endif
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        
        <!-- page content -->
        <div class="right_col" >
        @yield('content_web')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <footer class="kaki">
          <div class="clearfix"></div>

          <div class="col-md-4">CHEMO by CSS MoRA UIN Jakarta &copy {{date('Y')}} </div>
          <div class="pull-right">
            CHEMO Web App by <a href="https://facebook.com/dr.syroj"><i class="fa fa-facebook-square"></i> Syroj</a> 
                @if(Auth::guest())
                <a href="#home" class="page-scroll btn btn-primary"><span class="fa fa-angle-up"></span></a>
                @endif
          </div>     
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
    <script src="{{asset('temp/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('temp/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('temp/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{('temp/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('temp/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('temp/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('temp/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('temp/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('temp/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('temp/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('temp/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('temp/production/js/flot/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('temp/production/js/flot/date.js')}}"></script>
    <script src="{{asset('temp/production/js/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('temp/production/js/flot/curvedLines.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('temp/production/js/moment/moment.min.js')}}"></script>
    <script src="{{asset('temp/production/js/datepicker/daterangepicker.js')}}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{asset('temp/production/js/custom.js')}}"></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
        var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

        //generate random number for charts
        randNum = function() {
          return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
        };

        var d1 = [];
        //var d2 = [];

        //here we generate data for chart
        for (var i = 0; i < 30; i++) {
          d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
          //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
        }

        var chartMinDate = d1[0][0]; //first day
        var chartMaxDate = d1[20][0]; //last day

        var tickSize = [1, "day"];
        var tformat = "%d/%m/%y";

        //graph options
        var options = {
          grid: {
            show: true,
            aboveData: true,
            color: "#3f3f3f",
            labelMargin: 10,
            axisMargin: 0,
            borderWidth: 0,
            borderColor: null,
            minBorderMargin: 5,
            clickable: true,
            hoverable: true,
            autoHighlight: true,
            mouseActiveRadius: 100
          },
          series: {
            lines: {
              show: true,
              fill: true,
              lineWidth: 2,
              steps: false
            },
            points: {
              show: true,
              radius: 4.5,
              symbol: "circle",
              lineWidth: 3.0
            }
          },
          legend: {
            position: "ne",
            margin: [0, -25],
            noColumns: 0,
            labelBoxBorderColor: null,
            labelFormatter: function(label, series) {
              // just add some space to labes
              return label + '&nbsp;&nbsp;';
            },
            width: 40,
            height: 1
          },
          colors: chartColours,
          shadowSize: 0,
          tooltip: true, //activate tooltip
          tooltipOpts: {
            content: "%s: %y.0",
            xDateFormat: "%d/%m",
            shifts: {
              x: -30,
              y: -50
            },
            defaultTheme: false
          },
          yaxis: {
            min: 0
          },
          xaxis: {
            mode: "time",
            minTickSize: tickSize,
            timeformat: tformat,
            min: chartMinDate,
            max: chartMaxDate
          }
        };
        var plot = $.plot($("#placeholder33x"), [{
          label: "Email Sent",
          data: d1,
          lines: {
            fillColor: "rgba(150, 202, 89, 0.12)"
          }, //#96CA59 rgba(150, 202, 89, 0.42)
          points: {
            fillColor: "#fff"
          }
        }], options);
      });
    </script>
    <!-- /Flot -->

    <!-- jQuery Sparklines -->
    <script>
      $(document).ready(function() {
        $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
          type: 'bar',
          height: '125',
          barWidth: 13,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
          type: 'bar',
          height: '40',
          barWidth: 8,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
          type: 'line',
          height: '40',
          width: '200',
          lineColor: '#26B99A',
          fillColor: '#ffffff',
          lineWidth: 3,
          spotColor: '#34495E',
          minSpotColor: '#34495E'
        });
      });
    </script>
    <!-- /jQuery Sparklines -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function() {
        var canvasDoughnut,
            options = {
              legend: false,
              responsive: false
            };

        new Chart(document.getElementById("canvas1i"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]

            }]
          },
          options: options
        });

        new Chart(document.getElementById("canvas1i2"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]

            }]
          },
          options: options
        });

        new Chart(document.getElementById("canvas1i3"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]

            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script type="text/javascript">
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->
  </body>
</html>