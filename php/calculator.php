


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Welcome to Ratan Securities</title>
      <meta charset="utf-8">
      <link rel="canonical" href="https://www.ratansecurities.com/calculator" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <style>
         #calculator{
         padding-bottom:50px;	
         }
      </style>
      <!-- calculator css -->
      <link href="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/css/allcalculators.css" rel="stylesheet" type="text/css" media="all" />
      <style type="text/css">
         .calname a{
         font-size:14px;
         }
         .stick_option{
         display:none;
         }
         .caclulator{
         padding:20px 0px;
         }
         .cal-name,
         .summary-heading,
         .cal-type,
         .fundperfonmance .blue,
         .blue a:link,
         .fundperfonmance .blue>a,
         .fundname:hover .whythismf,
         .fundname:hover .closewhythismf {
         color: #030303;
         }
         .btn.submit,
         .calname a,
         .cal-result .summary .table th,
         .cal-result .sip-tg .nav li,
         .presales-container .ins-amt,
         .pre-inputbox #removeButton > span,
         .presales-result .lc-box,
         .presales-cal .sip-tg .nav li,
         .presales-cal .summary table th {
         background: #409e04;
         }
         .cal-name {
         border-bottom: 1px solid #00418c;
         }
         .fundname:hover .whythismf,
         .fundname:hover .closewhythismf {
         border: 1px solid #00418c;
         }
         .amount-text,
         .fundperfonmance .green {
         color: #a4d035;
         }
         .cal-result .nav-pills>li.active>a,
         .cal-result .nav-pills>li.active>a:focus,
         .cal-result .nav-pills>li.active>a:hover,
         .pre-inputbox #btnAdd > span,
         .presales-cal .nav-pills>li.active>a,
         .presales-cal .nav-pills>li.active>a:focus,
         .presales-cal .nav-pills>li.active>a:hover {
         background: #a4d035 !important;
         }
         h2{
         font-size: 25px;
         font-family: OpenSans-Semibold;
         margin-bottom: 20px;
         }
         #sipbarchart
         {
         overflow: unset !important;
         }
         #sipbarchart .highcharts-container 
         {
         width: 100%;
         }
      </style>
      <!-- /calculator css -->
   </head>
   <body>
      

    <?php include('header_nav.php'); ?>

      

<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
   </ol>
   <div class="carousel-inner">
      <div class="item active"  >
      </div>
      <div class="item">
      </div>
      <div class="item">
      </div>
      <div class="item">
      </div>
   </div>
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right"></span>
   <span class="sr-only">Next</span>
   </a>
</div>

  
      <section class="con-heading paddtb-30">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 text-left">
                  <ul class="list-inline list-unstyled">
                     <li><a href="index">Home</a></li>
                     >
                     <li><a class="active" href="calculator">Calculators</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section id="calculator" class="tab">
         <div class="container">
            <div class="row">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="cal-type wow fadeInDown" data-wow-delay="0.3s">MF Tools Calculators</div>
                     <div class="calname wow fadeInDown" data-wow-delay="0.3s"> <a href="javascript:void(0)" onclick="auto_load_sipper();"><i class="fa fa-line-chart" aria-hidden="true"></i><span>SIP Performance</span></a> <a href="javascript:void(0)" onclick="auto_load_stpper_cal();"><i class="fa fa-calculator"></i><span>STP Performance</span></a> <a href="javascript:void(0)" onclick="auto_load_swpper();"><i class="fa fa-stack-overflow" aria-hidden="true"></i><span>SWP Performance</span></a> <a href="javascript:void(0)" onclick="auto_load_fundperformance();"><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Top Performer</span></a> <a href="javascript:void(0)" onclick="auto_nav();"><i class="fa fa-universal-access" aria-hidden="true"></i><span>NAV Finder </span></a> <a href="javascript:void(0)" onclick="auto_dividend();"><i class="fa fa-history" aria-hidden="true"></i><span>Dividend History</span></a> <a href="javascript:void(0)" onclick="auto_balance();"><i class="fa fa-table" aria-hidden="true"></i><span>SIP/LS Balancer</span></a> <a href="javascript:void(0)" onclick="auto_load_schemeper();"><i class="fa fa-money" aria-hidden="true"></i><span>Scheme Performance</span></a> </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="cal-type wow fadeInDown" data-wow-delay="0.3s">Financial Calculators</div>
                     <div class="calname wow fadeInDown" data-wow-delay="0.3s"> <a href="javascript:void(0)" onclick="auto_load();"><i class="fa fa-line-chart" aria-hidden="true"></i><span>SIP Calculator</span></a> <a href="javascript:void(0)" onclick="auto_load_marriage();"><i class="fa fa-gratipay" aria-hidden="true"></i><span>Marriage Planning</span></a> <a href="javascript:void(0)" onclick="auto_load_childeducation();"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Education Planning</span></a> <a href="javascript:void(0)" onclick="auto_load_sip_ometer();"><i class="fa  fa-tachometer" aria-hidden="true"></i><span>SIP-O-Meter</span></a> <a href="javascript:void(0)" onclick="auto_load_lumpsum_cal();"><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Lumpsum</span></a> <a href="javascript:void(0)" onclick="auto_load_humanlife();"><i class="fa fa-universal-access" aria-hidden="true"></i> </i><span>Life Insurance Planning</span></a> <a href="javascript:void(0)" onclick="auto_load_retier_plan();"><i class="fa fa-blind" aria-hidden="true"></i> <span>Retirement Planning</span></a> 
                        <a href="https://emicalculator.net/" target="_blank" rel="noopener"><i class="fa fa-table" aria-hidden="true"></i><span>EMI Calculator</span></a> <a href="javascript:void(0)" onclick="auto_load_incometax();"><i class="fa fa-money" aria-hidden="true"></i><span>Income Tax</span></a> <a href="javascript:void(0)" onclick="auto_load_house_plan();"><i class="fa fa-home" aria-hidden="true"></i> <span>House Planning</span></a> <a href="javascript:void(0)" onclick="auto_load_car_plan();"><i class="fa fa-car" aria-hidden="true"></i><span>Car Planning</span></a> <a href="javascript:void(0)" onclick="auto_load_vacation_plan();"><i class="fa fa-plane" aria-hidden="true"></i><span>Vacation Planning</span></a> <a href="javascript:void(0)" onclick="auto_load_delaycost();"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Delay Cost</span></a> 
                     </div>
                  </div>
               </div>
               <div id="loading_1"></div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="reslultbox" id="showdiv"> </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      

      <?php include('footer_nav.php'); ?>

      <!-- slider value -->
      <!--<script src="js/validator.js"></script>-->
      <script src="js/contact.js"></script>
      <script src="js/contactinstant.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/wow.min.js"></script>
      <script>
         new WOW().init();
      </script> 
      <script src="js/bootstrap.min.js"></script>  
      <!-- calculator css -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://code.highcharts.com/stock/highstock.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script language="javascript" type="text/javascript" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/js/calculater.js"></script>
      <script language="javascript" type="text/javascript" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/js/cheetah_scripts.js"></script>
      <script src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/js/jquery.timetabs.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/js/jquery-ui.js"></script>
      <script src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/js/jquery.range.js"></script>
      <script src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/js/jquery.datetimepicker.full.js"></script>
      <script>
         $(document).ready(function() {
         
             $("#my_option_slide").on("click", function() {
         
                 $("#top_most_opt").slideToggle();
         
                 $("#my_option_slide i").toggleClass("iactive");
         
             });
         
         });
         
         $(document).ready(function() {
         
             $('[data-toggle="tooltip"]').tooltip();
         
         });
         
         //start mf tools calculator
         
         function auto_load_sipper() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/siptools.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                 }
         
             });
         
         }
         
         function auto_load_stpper_cal() {
         
             $('#loading_1').html('<img style="margin-right:157px;" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/stpperform.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                 }
         
             });
         
         }
         
         function auto_load_stpper() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/stpperform.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                 }
         
             });
         
         }
         
         function auto_load_swpper() {
         
             $('#loading_1').html('<img class="calloader" src="all_calculator/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/swpperform.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                 }
         
             });
         
         
         }
         
         function auto_load_fundperformance() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/fund_performance.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 data: {
                     cat: 'Large-cap'
                 },
         
                 success: function(response) {
         
                     if (response != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(response);
         
                 }
         
             });
         
         }
         
         function auto_nav() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/navfinder.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     calculateSIPAmount();
         
                 }
         
             });
         
         }
         
         function auto_dividend() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/dividendtools.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     calculateSIPAmount();
         
                 }
         
             });
         
         }
         
         function auto_balance() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/balancer_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     balancercalc();
         
                 }
         
             });
         
         }
         
         function auto_load_schemeper() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/schemeperform.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                 }
         
             });
         
         }
         
         function auto_load() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/sipcalc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     calculateSIPAmount();
         
                 }
         
             });
         
         }
         
         function auto_load_marriage() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/ajax_marriage_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     calculateChildMarrPlan();
         
                 }
         
             });
         
         }
         
         function auto_load_childeducation() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/ajax_Education_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     calculateChildEduPlan();
         
                 }
         
             });
         
         }
         
         function auto_load_sip_ometer() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/sip-o-meter.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                 }
         
             });
         
         }
         
         function auto_load_lumpsum_cal() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/lumpsum_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     calculateLumpsumAmount();
         
                 }
         
             });
         
         }
         
         function auto_load_humanlife() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/humanlife.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     life_calculate();
         
                 }
         
             });
         
         }
         
         function auto_load_retier_plan() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/retierment_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     testret();
         
                 }
         
             });
         
         }
         
         function auto_load_emi_cal() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/emi_calculator.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     calculateEmiPlan();
         
                 }
         
             });
         
         }
         
         function auto_load_incometax() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/incometaxcalc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                 }
         
             });
         
         }
         
         function auto_load_house_plan() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/House_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     house_plan();
         
                 }
         
             });
         
         }
         
         function auto_load_car_plan() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/Car_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     car_plan();
         
                 }
         
             });
         
         }
         
         function auto_load_vacation_plan() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/Vacation_calc.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     vacation_plan();
         
                 }
         
             });
         
         }
         
         function auto_load_delaycost() {
         
             $('#loading_1').html('<img class="calloader" src="https://my-eoffice.com/advisor/calculatornew/bootstrap_4/images/image.gif"  alt="img">');
         
             $.ajax({
         
                 url: "https://my-eoffice.com/advisor/calculatornew/bootstrap_4/delaycost.php?url_host=http://www.tulsiwealth.com",
         
                 cache: false,
         
                 success: function(data) {
         
                     if (data != '') {
         
                         $('#loading_1').html('');
         
                     }
         
                     $("#showdiv").html(data);
         
                     sipdelay1();
         
                 }
         
             });
         
         }
      </script>
      <!-- calculator css -->
      <script src="js/owl.carousel.js"></script>
      <!--<script src="js/menu.js"></script>-->
      <!--<script src="social_icon/jquery.mtlib.js" type="text/javascript"></script>-->
      <script type="text/javascript">
        //  $mtkb(window).load(function(){
        //      if (is_touch_device()) {
                 
        //      } else {
        //          $mtkb('.social-buttons .social-icon').mouseenter(function(){
        //              $mtkb(this).stop();
        //              $mtkb(this).animate({width:'160'}, 500, 'easeOutQuad',function(){});  
        //          });
        //          $mtkb('.social-buttons .social-icon').mouseleave(function(){
        //              $mtkb(this).stop();
        //              $mtkb(this).animate({width:'43'}, 500, 'easeOutQuad',function(){});
        //          });
        //      }
        //  });
      </script>
      <!--slider-js-->
      <script>
         jQuery(document).ready(function($) {
         $('.fadeOut').owlCarousel({
         navText: ["<img src='images/owl-prev.png'>", "<img src='images/owl-next.png'>"],
           items: 1,
           nav:true,
           animateOut: 'fadeOut',
         autoplay:true,
         autoplayTimeout:3500,
           loop: true,
         });
         });
      </script>
      <!--testimonial--> 
      <script>
         jQuery(document).ready(function($) {
         $('.service').owlCarousel({
               navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
               //items: 1,
               //autoHeight:true,
               //dots: false,
               //nav:true,
               animateOut: 'fadeOut',
               animateIn: 'fadeIn',
               loop: true,
               autoplay: true,
               autoplayTimeout: 4000,
               autoplayHoverPause: true,
               autoplaySpeed: 500,
               responsive: {
                   0: {
                       items: 1
                   },
                   768: {
                       items: 2
                   },
                   1000: {
                       items: 2
                   }
               }
           });
             });
         
      </script>
      <script>
         $(document).ready(function(){
             $("#reg").click(function(){
                 $("#myModal, .modal-backdrop").css({"display": "none"});
                 //$("p").remove(".modal-open");
                 $(".modal-open").css({"overflow": "unset", "padding-right": "0px"});
                 
             });
         });
      </script>
      <!--<script src="contactform/validator.js"></script>-->
      <!--<script src="contactform/contactus.js"></script>-->
   </body>
</html>

