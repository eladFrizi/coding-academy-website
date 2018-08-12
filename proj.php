    <!DOCTYPE html>
    <?php
    $date =  $_GET["date"];
    $name = $_GET["name"];
    $str = file_get_contents("projs.json");
    $cycles = json_decode($str);
	$cycle = $cycles -> $date;
    $filteredCycle = array_filter(
        $cycle, 
        function ($e) {
            global $name;
            return $e->name == $name;
        }
	);
	function getUrl() {
		$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
		$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
		$url .= $_SERVER["REQUEST_URI"];
		return $url;
	  }
	
	$projs = array_values($filteredCycle);
	$proj = $projs[0];
	$ogImgsuffix = substr($proj->thumbnail4x3,1)
    ?>
<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
	<title>Coding Academy- ללמוד לתכנת</title>
	<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="MisterBit" />

	<meta property="og:title" content="Coding Academy- ללמוד לתכנת |<?php echo $proj->name;?>" />
	<meta property="og:url" content="<?php echo getUrl();?>" />
	<meta property="og:image" content="http://coding-academy.org<? echo $ogImgsuffix;?>" />
	<meta property="og:description" content="<?echo $proj->desc?>"></meta>


	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-73447227-1', 'auto');
		ga('send', 'pageview');

		!function (f, b, e, v, n, t, s) {
			if (f.fbq) return; n = f.fbq = function () {
				n.callMethod ?
				n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			}; if (!f._fbq) f._fbq = n;
			n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
			t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)		
}(window,
			document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '958683717608033'); // Insert your pixel ID here.
		fbq('track', 'PageView');

	</script>


	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
	 rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">


		<!--build:css styles.min.css--> 	

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-rtl.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="style-rtl.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/dark-rtl.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons-rtl.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive-rtl.css" type="text/css" />
	<link rel="stylesheet" href="ca-style.css" type="text/css" />
	<!-- endbuild -->

	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- Document Title
	============================================= -->
	<!-- Add Your favicon here -->
	<link rel="icon" href="images/icons/favicon.ico">

</head>

<body class="stretched rtl">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix" style="padding:0">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="#" class="standard-logo" data-dark-logo="images/ca-logo-dark.png" data-page="proj"><img src="images/ca-logo.png" alt="coding academy Logo"></a>
						<a href="#" class="retina-logo" data-dark-logo="images/ca-logo-dark@2x.png"><img src="images/ca-logo@2x.png" alt="coding academy Logo"></a>
					</div>
					<!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li>
								<a href="index.html">
									<div>בית</div>
								</a>
							</li>
							<li>
								<a href="index.html#nextCourses">
									<div>הקורס הקרוב</div>
								</a>
							</li>
							<li>
								<a href="index.html#program">
									<div>תכנית הלימודים</div>
								</a>
							</li>
							<li class="current">
								<a>
									<div>הבוגרים</div>
								</a>
							</li>
							<li>
								<a href="for-employers.html">
									<div>למעסיקים</div>
								</a>
							</li>
							<li>
								<a href="q&a.html">
									<div>שאלות נפוצות</div>
								</a>
							</li>
							<li>
								<a href="showcase.html">
									<div>פרויקטים</div>
								</a>
							</li>


							<li>
								<a href="index.html#">
									<div>צור קשר</div>
								</a>
							</li>

						</ul>

					</nav>
					<!-- #primary-menu end -->

				</div>

			</div>

		</header>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix" style="padding: 0">
                <h1><?php
					echo $proj->name;					
                    ?></h1>
				<div id="portfolio-navigation" style="display:flex; justify-content:center;">
					<a href="showcase.html"><i class="icon-line-grid"></i></a>
				</div>
			</div>

		</section>
		<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix" style="margin-top:-5px;">

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin">
						<img src="<?php echo $proj->thumbnail16x9;?>"  alt="lama-lizrok">
						<!-- <a href="https://katarzis-cfb41.firebaseapp.com" target="_blank"><img src="./images/projs/weddix.png"  alt="lama-lizrok"></a> -->
					</div>
					<!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">

						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border" style="margin-bottom :15px;">
							<h2 style="text-align:center; margin-top: 12px;">על הפרויקט:</h2>
						</div>
						<p dir="ltr"> 
						<?php
							echo $proj->desc;
						?>
						</p>
						<!-- <p>האפליקציה לומדת את המשתמש ומציעה לו אוטומטית את הרכבת הבאה ליעד הקבוע שלו</p> -->
						<!-- Portfolio Single - Description End -->

						<!-- <div class="line"></div> -->

						<!-- Portfolio Single - Meta
						============================================= -->
						<ul class="portfolio-meta bottommargin">
							<li><span><i class="icon-user"></i>נוצר על ידי:</span>
								<span>
									<?php echo implode(" , ",$proj->creators);?>
								</span>
							</li>
							<li><span><i class="icon-lightbulb">
								</i>Skills:</span> 
									<span> 
										<?php echo implode(" / ", $proj->skills)?>
									</span>
								 </li>
							<li><span><i class="icon-link"></i>לינק לפרויקט:</span> <a href="<?php echo $proj->link?>" target="_blank">לחץ כאן</a></li>
						</ul>
						<!-- Portfolio Single - Meta End -->





					</div>

				</div>

		</section>
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container footer-con">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<!-- כתובות -->
						<div class="col_one_third">

							<div class="widget clearfix">

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;" class="info-container">
									<abbr title="Address">
										<strong>הנהלה</strong> הבונים 4 רמת גן
									</abbr>
									<abbr title="Phone Number"><strong>טלפון:</strong><span dir="ltr">(079) 555 1155 </span></abbr>
									<abbr title="Email Address"><strong>דוא"ל:</strong><span> admin@misterbit.co.il</span></abbr>
								</div>

							</div>

						</div>

						<!-- בלוגים -->
						<div class="col_one_third blog-posts-container">

							<div class="widget widget_links clearfix">

								<h4 class="inline">בלוגים</h4>

								<ul class="inline">
									<li><a target="_blank" href="https://medium.com/@vyaron">Yaron</a></li>
									<li><a target="_blank" href="https://netbasal.com">Netanel</a></li>
									<li><a target="_blank" href="http://slides.com/nadavsinai">Nadav</a></li>
								</ul>

							</div>



							<!-- פוסטים אחרונים -->
							<div>
								<h4>פוסטים אחרונים</h4>

								<div class="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a target="_blank" href="https://medium.com/@vyaron/the-returning-of-the-rich-client-aa545ced5a9a#.e9414ca8l">The returning of the rich client</a></h4>
											</div>
											<ul class="entry-meta">
												<li>8th March 2017</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a target="_blank" href="https://netbasal.com/understanding-viewchildren-contentchildren-and-querylist-in-angular-896b0c689f6e#.kmb1s4h5n">Understanding ViewChildren, ContentChildren, and QueryList in Angular</a></h4>
											</div>
											<ul class="entry-meta">
												<li>14th March 2017</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a target="_blank" href="http://slides.com/nadavsinai/css#/">CSS and rendering</a></h4>
											</div>
											<ul class="entry-meta">
												<li>25th August 2016</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<!-- הפניות -->
							<ul class="my-list refs">
								<li>
									<a href="https://www.facebook.com/CodingAcademy/" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin"
									 style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.facebook.com/CodingAcademy/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>חפשו אותנו</strong><br>בפייסבוק</small></a>
								</li>
								<li>
									<a href="https://www.facebook.com/groups/200924193654034/" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin"
									 style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.facebook.com/groups/200924193654034/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>השתתפו</strong><br>בדיון</small></a>
								</li>
								<li>
									<a href="https://www.meetup.com/The-Future-is-Javascript/" target="_blank" class="social-icon si-dark si-colored si-meetup nobottommargin"
									 style="margin-right: 10px;">
										<i class="icon-meetup"></i>
										<i class="icon-meetup"></i>
									</a>
									<a href="https://www.meetup.com/The-Future-is-Javascript/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>בואו</strong><br>למיטאפ</small></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company-beta/10678009/" target="_blank" class="social-icon si-dark si-colored si-linkedin nobottommargin"
									 style="margin-right: 10px;">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
									<a href="https://www.linkedin.com/company-beta/10678009/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>צפו בנו</strong><br>בלינקדאין</small></a>
								</li>
								<li>
									<a href="http://misterbit.co.il/" target="_blank" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-home2"></i>
										<i class="icon-home2"></i>
									</a>
									<a href="http://misterbit.co.il/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>אתר</strong><br>מיסטרביט</small></a>
								</li>
								<li>
									<a href="http://angularworkshop.co.il/hebrew.html" target="_blank" class="social-icon si-dark si-colored si-meetup nobottommargin"
									 style="margin-right: 10px;">
										<i class="ion-social-angular"></i>
										<i class="ion-social-angular"></i>
									</a>
									<a href="http://angularworkshop.co.il/hebrew.html" target="_blank"><small style="display: block; margin-top: 3px;"><strong>סדנת</strong><br>אנגולר</small></a>
								</li>
							</ul>

						</div>

					</div>

				</div>
				<!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="clearfix">

					<!-- <div dir="ltr" class="col_half" style="text-align: center">
						@misterBit 2017
					</div> -->
					<div class="phone-copy">
						<div style="background-size: 100%;" class="info-container">
							<abbr title="Address">
									<strong>הנהלה</strong> הבונים 4 רמת גן
								</abbr>
							<abbr title="Phone Number"><strong>טלפון:</strong><span dir="ltr">(079) 555 1155 </span></abbr>
							<abbr title="Email Address"><strong>דוא"ל:</strong><span> admin@misterbit.co.il</span></abbr>
						</div>

						<img src="images/ca-logo-dark-footer-1.png" alt="coding academy" style="display:block;">
					</div>
					<div class="center" dir="rtl">
						@misterBit 2017
					</div>

				</div>


			</div>

	</div>
	<!-- #copyrights end -->

	</footer>		<!-- Go To Top
	============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

	<!--build:js js/main.min.js -->	
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	
	<!-- endbuild -->
		<script>
			$(function () {
				$("#side-navigation").tabs({ show: { effect: "fade", duration: 400 } });
			});

		</script>

</body>

</html>    </html>
    
