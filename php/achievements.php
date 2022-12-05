<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Awards and Achievements</title>
   <link rel="canonical" href="https://www.ratansecurities.com" />
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
      .imgs {
         top: 0;
         right: 0;
         left: initial;
         position: absolute;
      }

      .elite-login {
         margin: 0px auto;
         display: inline;
         text-align: center;
         color: #000;
         background: #fff;
         padding: 9px 22px;
         font-size: 18px;
         border-radius: 4px;
      }

      #signinForm label {
         width: auto;
         display: contents;
      }

      .modal-open .modal.fade {
         display: none;
      }

      .modal-open .modal.fade.in {
         display: block;
      }

      .modal-backdrop.in {
         display: none;
      }

      .login-page img {
         border: 1px solid #0f0202;
         padding: 6px;
         margin-bottom: 15px;
      }

      .awards {}

      #pinBoot {
         position: relative;
         max-width: 100%;
         width: 100%;
      }

      #pinBoot img {
         width: 100%;
         max-width: 100%;
         height: auto;
      }

      .white-panel {
         position: absolute;
         background: white;
         box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
         padding: 10px;
      }

      /*
         stylize any heading tags withing white-panel below
         */
      .white-panel h1 {
         font-size: 1em;
      }

      .white-panel h1 a {
         color: #A92733;
      }

      .white-panel:hover {
         box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
         margin-top: -5px;
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
      }
   </style>
</head>

<body>


   <?php include('header_nav.php'); ?>
   <div class="login-page">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 wow animated fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
               <h3 class="awards-title">Achievements</h3>
            </div>
            <div class="clearfix"></div>
            <div id="pinBoot" class="awarda-main">

               <!-- <div class="awards white-panel">
                  <div class="add"> <img src="" width="100%" class="wow animated fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;" alt="img"> </div>
               </div> -->

            </div>
         </div>
      </div>
   </div>


   <?php include('footer_nav.php'); ?>


   <!-- slider value   -->
   <script src='https://www.google.com/recaptcha/api.js'></script>
   <!--<script src="js/validator.js"></script>-->
   <script src="js/contact.js"></script>
   <!--<script src="js/contactinstant.js"></script>-->
   <script src="js/parallax.js"></script>
   <script src="js/wow.min.js"></script>
   <script>
      new WOW().init();
   </script>
   <script src="js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="/js/aes.js"></script>
   <script src="/js/login_script.js"></script>
   <script src="/js/ajaxCore.js"></script>
   <script src="/js/login.js"></script>
   <script>
      var msgType = '';
      var msg = '';
      if (msgType === "error" && msg !== "") {
         $('#loginPageAlertError').html(msg);
         $('#loginPageAlertError').css("display", "block");
      }

      $('input[type=radio][name=loginType]').change(function() {
         var optionValue = this.value;
         $('#loginFor').val('');
         if (optionValue != "" && optionValue != 'undefined') {
            $('#loginFor').val(optionValue);
            $('#type').val(optionValue);
         }
      });
   </script>
   <script>
      $(document).ready(function() {
         $('#pinBoot').pinterest_grid({
            no_columns: 4,
            padding_x: 10,
            padding_y: 10,
            margin_bottom: 50,
            single_column_breakpoint: 700
         });
      });

      /*
      Ref:
      Thanks to:
      http://www.jqueryscript.net/layout/Simple-jQuery-Plugin-To-Create-Pinterest-Style-Grid-Layout-Pinterest-Grid.html
      */


      /*
        Pinterest Grid Plugin
        Copyright 2014 Mediademons
        @author smm 16/04/2014
      
        usage:
      
         $(document).ready(function() {
      
            $('#blog-landing').pinterest_grid({
                no_columns: 4
            });
      
        });
      
      
      */
      ;
      (function($, window, document, undefined) {
         var pluginName = 'pinterest_grid',
            defaults = {
               padding_x: 10,
               padding_y: 10,
               no_columns: 3,
               margin_bottom: 50,
               single_column_breakpoint: 700
            },
            columns,
            $article,
            article_width;

         function Plugin(element, options) {
            this.element = element;
            this.options = $.extend({}, defaults, options);
            this._defaults = defaults;
            this._name = pluginName;
            this.init();
         }

         Plugin.prototype.init = function() {
            var self = this,
               resize_finish;

            $(window).resize(function() {
               clearTimeout(resize_finish);
               resize_finish = setTimeout(function() {
                  self.make_layout_change(self);
               }, 11);
            });

            self.make_layout_change(self);

            setTimeout(function() {
               $(window).resize();
            }, 500);
         };

         Plugin.prototype.calculate = function(single_column_mode) {
            var self = this,
               tallest = 0,
               row = 0,
               $container = $(this.element),
               container_width = $container.width();
            $article = $(this.element).children();

            if (single_column_mode === true) {
               article_width = $container.width() - self.options.padding_x;
            } else {
               article_width = ($container.width() - self.options.padding_x * self.options.no_columns) / self.options.no_columns;
            }

            $article.each(function() {
               $(this).css('width', article_width);
            });

            columns = self.options.no_columns;

            $article.each(function(index) {
               var current_column,
                  left_out = 0,
                  top = 0,
                  $this = $(this),
                  prevAll = $this.prevAll(),
                  tallest = 0;

               if (single_column_mode === false) {
                  current_column = (index % columns);
               } else {
                  current_column = 0;
               }

               for (var t = 0; t < columns; t++) {
                  $this.removeClass('c' + t);
               }

               if (index % columns === 0) {
                  row++;
               }

               $this.addClass('c' + current_column);
               $this.addClass('r' + row);

               prevAll.each(function(index) {
                  if ($(this).hasClass('c' + current_column)) {
                     top += $(this).outerHeight() + self.options.padding_y;
                  }
               });

               if (single_column_mode === true) {
                  left_out = 0;
               } else {
                  left_out = (index % columns) * (article_width + self.options.padding_x);
               }

               $this.css({
                  'left': left_out,
                  'top': top
               });
            });

            this.tallest($container);
            $(window).resize();
         };

         Plugin.prototype.tallest = function(_container) {
            var column_heights = [],
               largest = 0;

            for (var z = 0; z < columns; z++) {
               var temp_height = 0;
               _container.find('.c' + z).each(function() {
                  temp_height += $(this).outerHeight();
               });
               column_heights[z] = temp_height;
            }

            largest = Math.max.apply(Math, column_heights);
            _container.css('height', largest + (this.options.padding_y + this.options.margin_bottom));
         };

         Plugin.prototype.make_layout_change = function(_self) {
            if ($(window).width() < _self.options.single_column_breakpoint) {
               _self.calculate(true);
            } else {
               _self.calculate(false);
            }
         };

         $.fn[pluginName] = function(options) {
            return this.each(function() {
               if (!$.data(this, 'plugin_' + pluginName)) {
                  $.data(this, 'plugin_' + pluginName,
                     new Plugin(this, options));
               }
            });
         }

      })(jQuery, window, document);
   </script>
</body>

</html>