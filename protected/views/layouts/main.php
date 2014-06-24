<!DOCTYPE html>
<html>
<head>
    <title>APP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-w.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/misc.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css?version=10">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--<link href="<?php //echo Yii::app()->request->baseUrl; ?>/css/mains.css" rel="stylesheet">-->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/prism.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/verticaltabs.css" rel="stylesheet" />
    
    <style>
		/* code for animated blinking cursor */
		#typed-cursor{
			opacity: 1;
			font-weight: 100;
			-webkit-animation: blink 0.7s infinite;
			-moz-animation: blink 0.7s infinite;
			-ms-animation: blink 0.7s infinite;
			-o-animation: blink 0.7s infinite;
			animation: blink 0.7s infinite;
		}
		@-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-webkit-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-moz-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-ms-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-o-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
	</style>

    <style type="text/css">
    	.ui-tabs.ui-tabs-vertical {
		    padding: 0;
		    width: 42em;
		}
		.ui-tabs.ui-tabs-vertical .ui-widget-header {
		    border: none;
		}
		.ui-tabs.ui-tabs-vertical .ui-tabs-nav {
		    float: left;
		    width: 10em;
		    background: #CCC;
		    border-radius: 4px 0 0 4px;
		    border-right: 1px solid gray;
		}
		.ui-tabs.ui-tabs-vertical .ui-tabs-nav li {
		    clear: left;
		    width: 100%;
		    margin: 0.2em 0;
		    border: 1px solid gray;
		    border-width: 1px 0 1px 1px;
		    border-radius: 4px 0 0 4px;
		    overflow: hidden;
		    position: relative;
		    right: -2px;
		    z-index: 2;
		}
		.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a {
		    display: block;
		    width: 100%;
		    padding: 0.6em 1em;
		}
		.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a:hover {
		    cursor: pointer;
		}
		.ui-tabs.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
		    margin-bottom: 0.2em;
		    padding-bottom: 0;
		    border-right: 1px solid white;
		}
		.ui-tabs.ui-tabs-vertical .ui-tabs-nav li:last-child {
		    margin-bottom: 10px;
		}
		.ui-tabs.ui-tabs-vertical .ui-tabs-panel {
		    float: left;
		    width: 28em;
		    border-left: 1px solid gray;
		    border-radius: 0;
		    position: relative;
		    left: -1px;
		}

    </style>

    <style type="text/css">
	table a:link {
		color: #666;
		font-weight: bold;
		text-decoration:none;
	}
	table a:visited {
		color: #999999;
		font-weight:bold;
		text-decoration:none;
	}
	table a:active,
	table a:hover {
		color: #bd5a35;
		text-decoration:underline;
	}
	table {
		color:#666;
		font-size:14px;
		text-shadow: 1px 1px 0px #fff;
		background:#eaebec;
		margin:20px;
		border:#ccc 1px solid;

		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;

		-moz-box-shadow: 0 1px 2px #d1d1d1;
		-webkit-box-shadow: 0 1px 2px #d1d1d1;
		box-shadow: 0 1px 2px #d1d1d1;
	}
	table th {
		padding:11px 15px 12px 15px;
		border-top:1px solid #fafafa;
		border-bottom:1px solid #e0e0e0;

		background: #ededed;
		background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
		background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
	}
	table th:first-child{
		text-align: left;
		padding-left:20px;
	}
	table tr:first-child th:first-child{
		-moz-border-radius-topleft:3px;
		-webkit-border-top-left-radius:3px;
		border-top-left-radius:3px;
	}
	table tr:first-child th:last-child{
		-moz-border-radius-topright:3px;
		-webkit-border-top-right-radius:3px;
		border-top-right-radius:3px;
	}
	table tr{
		text-align: center;
		padding-left:20px;
	}
	table tr td:first-child{
		text-align: left;
		padding-left:20px;
		border-left: 0;
	}
	table tr td {
		padding:8px;
		border-top: 1px solid #ffffff;
		border-bottom:1px solid #e0e0e0;
		border-left: 1px solid #e0e0e0;
		
		background: #fafafa;
		background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
		background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
	}
	table tr.even td{
		background: #f6f6f6;
		background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
		background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
	}
	table tr:last-child td{
		border-bottom:0;
	}
	table tr:last-child td:first-child{
		-moz-border-radius-bottomleft:3px;
		-webkit-border-bottom-left-radius:3px;
		border-bottom-left-radius:3px;
	}
	table tr:last-child td:last-child{
		-moz-border-radius-bottomright:3px;
		-webkit-border-bottom-right-radius:3px;
		border-bottom-right-radius:3px;
	}
	table tr:hover td{
		background: #f2f2f2;
		background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
		background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
	}

	</style>

	<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/smoothTouchScroll.css" />
		
		<!-- Styles for my specific scrolling content -->
	<style type="text/css">

			#touchScroller
			{
				width:100%;
				height: 330px;
				position: relative;
			}
			
			#touchScroller div.scrollableArea div
			{
				position: relative;
				float: left;
				margin: 0;
				padding: 0 5px;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}

			#touchScroller2
			{
				width:100%;
				height: 400px;
				position: relative;
			}

			#touchScroller2 div.scrollableArea div
			{
				position: relative;
				float: left;
				margin: 0;
				padding: 0 5px;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}

			#touchScroller3
			{
				width:100%;
				height: 330px;
				position: relative;
			}

			#touchScroller3 div.scrollableArea div
			{
				position: relative;
				float: left;
				margin: 0;
				padding: 0 5px;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}
			
		</style>
		
</head>
<body>

	<div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="navigation responsive-menu">
            <ul>
                <li class="home"><a href="#templatemo">Beranda<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	            <li class="services"><a href="#services">Berita<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	            <li class="about"><a href="#about">Pengumuman<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>	            
	            <li class="portfolio"><a href="#portfolio">Jadwal<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	            <li class="contact"><a href="#contact">Denah<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
            </ul> 
        </div> 
    </div> 

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a rel="nofollow"><h1>Teknik Informatika <br />
				<div id="clockDisplay" class="clockStyle"></div>
					<script type="text/javascript" language="javascript">
					function renderTime() {
						var currentTime = new Date();
						var diem = "AM";
						var h = currentTime.getHours();
						var m = currentTime.getMinutes();
					    var s = currentTime.getSeconds();
						setTimeout('renderTime()',1000);
					    if (h == 0) {
							h = 12;
						} else if (h > 12) { 
							h = h - 12;
							diem="PM";
						}
						if (h < 10) {
							h = "0" + h;
						}
						if (m < 10) {
							m = "0" + m;
						}
						if (s < 10) {
							s = "0" + s;
						}
					    var myClock = document.getElementById('clockDisplay');
						myClock.textContent = h + ":" + m + ":" + s + " " + diem;
						myClock.innerText = h + ":" + m + ":" + s + " " + diem;
					}
					renderTime();
					</script>
			</h1></a>
			<span>Institut Teknologi Sepuluh Nopember</span>
		</div> <!-- /.logo -->

		<div class="navigation">
	        <ul class="main-menu">
	            <li class="home"><a href="#templatemo">Beranda<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	            <li class="services"><a href="#services">Berita<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	            <li class="about"><a href="#about">Pengumuman<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	            
	            <li class="portfolio"><a href="#portfolio">Jadwal<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	            <li class="contact"><a href="#contact">Denah<?php if (isset(Yii::app()->session['admin'])) {
									echo ' (Admin)'; }?></a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->


	<?php echo $content; ?>


	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.singlePageNav.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flexslider.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.5.2.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tabcordion.js"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/typed.js" type="text/javascript"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js"  type='text/javascript'></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.kinetic.min.js"  type='text/javascript'></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.smoothTouchScroll.min.js"  type='text/javascript'></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.newsTicker.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.steps.min.js" ></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.steps.js"></script>
	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

	<script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/js/logging.js'></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/chart.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/prism.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/textEffect.jquery.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/verticaltabs.pack.js"></script>


    <script type="text/javascript">
	$(document).ready(function(){
		$("#textExample").verticaltabs({speed: 500,slideShow: false,activeIndex: 2});
		$("#imageExample").verticaltabs({speed: 1000,slideShow: true,slideShowSpeed: 3000,activeIndex: 0,playPausePos: "topRight"});
	});
	</script>

	<script>
	$(function(){

		$("#typed").typed({
			strings: ["SELAMAT DATANG DI TEKNIK INFORMATIKA", "INSTITUT TEKNOLOGI SEPULUH NOPEMBER"],
			typeSpeed: 100,
			backDelay: 5000,
			loop: true,
			// defaults to false for infinite loop
			loopCount: false,
			callback: function(){ foo(); }
		});

		function foo(){ console.log("Callback"); }

	});
	</script>

	<script>
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		});

        function initialize() {
        	var pos = new google.maps.LatLng(-7.270865,112.791626);
	        var mapOptions = {
	            zoom: 11,
	            center: pos
	        };
	        var map = new google.maps.Map(document.getElementById('map-canvas'),
	              mapOptions);

	        var weatherLayer = new google.maps.weather.WeatherLayer({
			    temperatureUnits: google.maps.weather.TemperatureUnit.FAHRENHEIT
			  });
			  weatherLayer.setMap(map);

			var cloudLayer = new google.maps.weather.CloudLayer();
			  cloudLayer.setMap(map);

	        var marker = new google.maps.Marker({
			    position: pos,
			    map: map,
			    title: 'Teknik Informatika ITS'
			});
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

    
    <script type="text/javascript">
    	$(document).ready(function() {
        $('#showmenu').click(function() {
                $('.menu').slideToggle("fast");
        	});
    	});
    </script>

	<script type="text/javascript">	    
	    $('#tabs')
	    .tabs()
	    .addClass('ui-tabs-vertical ui-helper-clearfix');
	</script>

    
    <script>
			jQuery(document).ready(function($) {
				$('h2').textEffect();

				$('button.non-reverse').on('click', function(e) {
					e.preventDefault();
					$(this).next().next().css('visibility', 'visible').textEffect($(this).html());
					greyout();
				});

				$('button.reverse').on('click', function(e) {
					e.preventDefault();
					var $this = $(this);
					var effect = $this.prev().html();
					$this.next().css('visibility', 'visible').textEffect({
						effect: effect,
						reverse: true
					});
					greyout();
				});

			});
			
			var greyout = function () {
				var $buttons = $('button:not(.reverse-jumble)');
				$buttons.attr('disabled', true);
				setTimeout(function () {
					$buttons.attr('disabled', false);
				}, 3500);
			}
	</script>          

    <script>
    		$('a[href*=#]').click(function(e) {
			    var href = $.attr(this, 'href');
			    if (href != "#") {
				    $('html, body').animate({
				        scrollTop: $(href).offset().top - 81
				    }, 500);
				}
				else {
					$('html, body').animate({
				        scrollTop: 0
				    }, 500);
				}
			    return false;
			});

    		$(window).load(function(){
	            $('code.language-javascript').mCustomScrollbar();
	        });
            var nt_title = $('#nt-title').newsTicker({
                row_height: 40,
                max_rows: 1,
                duration: 3000,
                pauseOnHover: 0
            });
            var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 100,
                max_rows: 2,
                duration: 6000,
                prevButton: $('#nt-example1-prev'),
                nextButton: $('#nt-example1-next')
            });
			var nt_example11 = $('#nt-example11').newsTicker({
                row_height: 500,
                max_rows: 1,
                duration: 5000,
                prevButton: $('#nt-example11-prev'),
                nextButton: $('#nt-example11-next')
            });

            var nt_example2 = $('#nt-example2').newsTicker({
                row_height: 60,
                max_rows: 1,
                speed: 300,
                duration: 6000,
                prevButton: $('#nt-example2-prev'),
                nextButton: $('#nt-example2-next'),
                hasMoved: function() {
                	$('#nt-example2-infos-container').fadeOut(200, function(){
	                	$('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
	                	$('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
	                	$(this).fadeIn(400);
	                });
                },
                pause: function() {
                	$('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause');
                },
                unpause: function() {
                	$('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
                }
            });
            $('#nt-example2-infos').hover(function() {
                nt_example2.newsTicker('pause');
            }, function() {
                nt_example2.newsTicker('unpause');
            });
            var state = 'stopped';
            var speed;
            var add;
            var nt_example3 = $('#nt-example3').newsTicker({
                row_height: 80,
                max_rows: 1,
                duration: 0,
                speed: 10,
                autostart: 0,
                pauseOnHover: 0,
                hasMoved: function() {
                	if (speed > 700) {
                		$('#nt-example3').newsTicker("stop");
                		console.log('stop')
                		$('#nt-example3-button').text("RESULT: " + $('#nt-example3 li:first').text().toUpperCase());
                		setTimeout(function() {
                			$('#nt-example3-button').text("START");
                			state = 'stopped';
                		},2500);
                		
                	}
                	else if (state == 'stopping') {
                		add = add * 1.4;
                		speed = speed + add;
                		console.log(speed)
                		$('#nt-example3').newsTicker('updateOption', "duration", speed + 25);
                		$('#nt-example3').newsTicker('updateOption', "speed", speed);
                	}
                }
            });
            
            $('#nt-example3-button').click(function(){
            	if (state == 'stopped') {
	            	state = 'turning';
	            	speed = 1;
	            	add = 1;
	            	$('#nt-example3').newsTicker('updateOption', "duration", 0);
	            	$('#nt-example3').newsTicker('updateOption', "speed", speed);
	            	nt_example3.newsTicker('start');
	            	$(this).text("STOP");
	            }
	            else if (state == 'turning') {
	            	state = 'stopping';
	            	$(this).text("WAITING...");
	            }
            });
        </script>

        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-48039933-1', 'risq.github.io');
			ga('send', 'pageview');
		</script>

		<script>
			$(function() {
				$("#touchScroller").smoothTouchScroll({ continuousScrolling: true });
			});
		</script>

		<script>
			$(function() {
				$("#touchScroller2").smoothTouchScroll({ continuousScrolling: true });
			});
		</script>

		<script>
			$(function() {
				$("#touchScroller3").smoothTouchScroll({ continuousScrolling: true });
			});
		</script>


		<script>
            $("#wizard").steps();
        </script>

		<script>$(function() {
			  $('.tabcordion').tabcordion()
			});</script><script>$(document).on('click', 'a.resize', function() {
			  $cn = $('.container');
			  var width = 600, onComplete;
			  if( !$cn.data('fullWidth') ) {
			    $cn.data('fullWidth', $cn.width());
			    $cn.css('maxWidth', $cn.width());
			  }
			  else {
			    width = $cn.data('fullWidth');
			    $cn.data('fullWidth', null);
			    onComplete = function() {
			      $cn.css('maxWidth', null);
			    };
			  }
			  $cn.animate({maxWidth: width}, {complete: onComplete});
			  $(window).trigger('resize');
			  return false;
			});
		</script>
</body>
</html>