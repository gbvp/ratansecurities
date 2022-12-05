<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <link rel="canonical" href="https://www.ratansecurities.com/content.php?id=1" />
   <meta name="description"
      content=" S With an experience of 27 years in the Financial Service sector, We effectively monitor the portfolio for our clients. safe investment with Ratan Securities, Ahmedabad ">
   <meta name="keywords" best online investment platform,Ratan Securities trading services in Ahmedabad, mutual fund agents near
      me, mutual fund for investment in india,best online investment platform, Safe online investment platform>">
   <title> Best online stock brokers - best online investment platform </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="images/favicon.png" alt="Ratan Securities">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.min.css">
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
   <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
   <link rel="stylesheet" href="nav-css/transitions.css" type="text/css">
   <link rel="stylesheet" href="nav-css/main.css" type="text/css">
   <link rel="stylesheet" href="nav-css/color.css" type="text/css">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <meta property="og:title" content=" Best online stock brokers - best online investment platform ">
   <meta property="og:site_name" content="about us">
   <meta property="og:url" content="https://www.ratansecurities.com/content.php?id=1">
   <meta property="og:description"
      content="best online investment platform. Investors need a Qualified, Trained and Unbiased Professional to assist them in achieving their Short Term and Long-Term Investment goals – Ratan Securities">
   <meta property="og:type" content="article">
   <meta property="og:image" content="https://www.ratansecurities.com/images/logo.png">
   <meta name="twitter:card" content="summary">
   <meta name="twitter:site" content="@ratansecurrities">
   <meta name="twitter:description"
      content="best online investment platform. Investors need a Qualified, Trained, and Unbiased Professional to assist them in achieving their Short Term and Long-Term Investment goals – Ratan Securities">
   <meta name="twitter:app:name:iphone" content="Ratan Securities">
   <meta name="twitter:app:id:iphone" content="">
   <meta name="twitter:app:name:ipad" content="Ratan Securities">
   <meta name="twitter:app:id:ipad" content="">
   <meta name="twitter:app:name:googleplay" content="Ratan Securities">
   <meta name="twitter:app:id:googleplay" content="">
   <meta name="twitter:app:country" content="india">
   <link rel="shortcut icon" href="images/favicon.png" alt="Ratan Securities">
</head>

<body>


   <?php include('header_nav.php'); ?>


   <section class="con-heading paddtb-30 wow animated fadeInLeft animated" id="contentid" data-wow-delay="0.3s"
      style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 text-left">
               <ul class="list-inline list-unstyled">
                  <li><a href="index">Home</a></li>
                  >
                  <li><a class="active" href="calculator">Corporate Fixed Deposit</a></li>
               </ul>
            </div>
            <div class="col-sm-12">
               <p>Fixed deposits are term deposits provided by banks and non-banking financial companies (NBFCs), which
                  offer a pre-decided interest on the amount of money you invest, for a fixed period. Fixed deposits
                  offered by NBFCs are known as Corporate FDs or Company FDs. FD interest rates vary per the tenor
                  chosen by the depositor. They are the safest and most stable investment options that assure guaranteed
                  and high returns, unlike other fixed-income instruments like savings accounts and post office fixed
                  deposits.</p>
               <h3>Why should you invest in Company Fixed Deposits?</h3>
               <p>Company fixed deposits are better than bank fixed deposits as they offer interest rates, which are
                  significantly higher than bank fixed deposit interest rates. Bank FD rates are determined by a number
                  of factors which might change per the interest rate movement decided by the Central Bank the Reserve
                  Bank of India via the Repo rate the rate at which it lends to banks. However, you can be assured of
                  high interest rates with company fixed deposits.</p>
               <h3>&nbsp;</h3>
            </div>
         </div>
      </div>
   </section>
   <section class="tab">
      <div class="container">
      </div>
   </section>

   <?php include('footer_nav.php'); ?>


   <!-- slider value   -->
   <link rel="stylesheet" href="line-chart-css/jquery-ui.css">
   <script src="line-chart-js/jquery.min.js"></script>
   <script type="text/javascript" src="line-chart-js/loader.js"></script>
   <script src='https://www.google.com/recaptcha/api.js'></script>
   <!--<script src="js/validator.js"></script>-->
   <script src="js/contact.js"></script>
   <script src="js/contactinstant.js"></script>
   <script src="line-chart-js/jquery-ui.js"></script>
   <script type="text/javascript">
      $(document).ready(function () {
         $('#sip_amount').slider({
            value: 10000,
            max: 20000,
            min: 1000,
            step: 1000,
            range: "min",
            animate: true,
            change: function (event, ui) {
               RequestBuilder();
            }
         }
         );
         $('#sip_year').slider({
            value: 30,
            min: 2,
            step: 1,
            max: 30,
            range: "min",
            animate: true,
            change: function (event, ui) {
               RequestBuilder();
            }
         }
         );
         $('#percentage').slider({
            value: 15,
            min: 9,
            max: 15,
            step: 3,
            range: "min",
            animate: true,
            change: function (event, ui) {
               RequestBuilder();
            }
         }
         );
         google.charts.load("visualization", "1", {
            packages: ["corechart"]
         }
         );
         google.charts.setOnLoadCallback(drawChart);
         function drawChart() {
            /* var sip_amount = $("#sip_amount").slider( "option", "value" );
        var sip_month = $("#sip_year").slider( "option", "value" );
        var percentage = $("#percentage").slider( "option", "value" );*/
            var sip_amount = 10000;
            var sip_month = 30;
            var percentage = 15;
            var jsonData = $.ajax({
               data: {
                  sip_year: sip_month, sip_amount: sip_amount, percentage: percentage
               }
               ,
               url: "getdata.php",
               dataType: "json",
               async: false
            }
            ).responseText;
            var obj = JSON.parse(jsonData);
            console.log(obj);
            var dr2 = [];
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Years');
            data.addColumn('number', 'Expected Gain');
            data.addColumn('number', 'Amount Invested');
            data.addColumn('number', 'Expected Market Value');
            var dr = [];
            for (var k = 0; k
               < obj.interest.length; k++) {
               dr.push([k + 1, parseFloat(obj.interest[k]), parseFloat(obj.invest[k]), parseFloat(obj.future[k])]);
            }
            data.addRows(dr);
            var options = {
               /* title: 'SIP Performance',*/
               curveType: 'function',
               legend: {
                  position: 'bottom'
               }
               ,
               //legend: 'none',
               //colors: ['#15A0C8'],
               // tooltip:{'hhe'},
               pointSize: 5,
               pointShape: {
                  type: 'circle', rotation: 180
               }
            };
            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options, {
               width: 900, height: 500
            }
            );
         }
         function RequestBuilder() {
            var sip_amount = $("#sip_amount").slider("option", "value");
            var sip_month = $("#sip_year").slider("option", "value");
            var percentage = $("#percentage").slider("option", "value");
            $('#amount').html(sip_amount);
            $('#year').html(sip_month);
            $('#percentage1').html(percentage);
            var jsonData = $.ajax({
               data: {
                  sip_year: sip_month, sip_amount: sip_amount, percentage: percentage
               }
               ,
               url: "getdata.php",
               dataType: "json",
               async: false
            }
            ).responseText;
            var obj = JSON.parse(jsonData);
            var dr2 = [];
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Years');
            data.addColumn('number', 'Expected Gain');
            data.addColumn('number', 'Amount Invested');
            data.addColumn('number', 'Expected Market Value');
            var dr = [];
            for (var k = 0; k
               < obj.interest.length; k++) {
               dr.push([k + 1, parseFloat(obj.interest[k]), parseFloat(obj.invest[k]), parseFloat(obj.future[k])]);
            }
            data.addRows(dr);
            var options = {
               /* title: 'SIP Performance',*/
               curveType: 'function',
               legend: {
                  position: 'bottom'
               }
               ,
               //legend: 'none',
               //colors: ['#15A0C8'],
               // tooltip:{'hhe'},
               pointSize: 5,

               pointShape: {
                  type: 'circle', rotation: 180
               }
            };
            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options, {
               width: 900, height: 500
            }
            );
         }
      }
      );
   </script>
   <script type="text/javascript">
      $('.swal2-confirm').click(function () {
         window.location.href = 'index.php';
         return false;
      });
   </script>
   <script src="js/parallax.js"></script>
   <script src="js/wow.min.js"></script>
   <script>
      new WOW().init();
   </script>
   <script src="js/bootstrap.min.js"></script>
</body>

</html>