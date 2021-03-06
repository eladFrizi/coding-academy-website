
<?php
    $string = file_get_contents("./dates.json");   
	$dates = json_decode($string,true);
?>
<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="MisterBit" />
	<meta name="description" content="קודינג אקדמי הוא בוטקמאפ ללימוד תכנות מבית חברת מיסטרביט המתמחה בפיתוח ווב. זהו קורס תכנות שאורכו שלושה חודשים אשר מטרתו היא להפוך את הסטודנטים למפתחי full-stack אשר מתאימים לעבודה בתחום פיתוח התוכנה. בקורס בוטקאמפ תכנות נלמד לתכנת בשפת javascript לעומק ונלמד איך להשתמש בה בצד הלקוח וצד השרת, html, css, angular, vue, node על מנת לבנות אפלקציות ווב מרשימות. 
	coding-academy is a three months coding bootcamp and a misterbit company. its a leading coding course to be come a full-stack web developer. 
	" />

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
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />

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

	<!--endbuild-->



	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- Document Title
	============================================= -->
	<!-- Add Your favicon here -->
	<link rel="icon" href="images/icons/favicon.ico">
	<title>Coding Academy- ללמוד לתכנת</title>

</head>

<body class="stretched rtl">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/ca-logo-dark1.png"><img src="images/ca-logo.png" alt="coding academy Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/ca-logo-dark@2x.png"><img src="images/ca-logo@2x.png" alt="coding academy Logo"></a>
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
								<a href="index.html#nextCourses" data-scrollto="#nextCourses">
									<div>הקורס הקרוב</div>
								</a>
							</li>
							<li>
								<a href="index.html#program" data-scrollto="#program">
									<div>תכנית הלימודים</div>
								</a>
							</li>
							<li>
								<a href="grads.html">
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
								<a href="#contact" data-scrollto="#contact">
									<div>צור קשר</div>
								</a>
							</li>
						</ul>

					</nav>

				</div>

			</div>

		</header>
		<section id="mySlider" class="my-slider-parallax swiper_wrapper main-swiper  clearfix">

			<div  style="height: 70vh">

				<div  style="width: 100%; height: 100%;">
					<div class="swiper-wrapper">

						<div class="swiper-slide dark" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('images/courseLife/third.jpg'); background-position: center top;">
							<div class="container clearfix landing-container" style="height:100%; display:flex; justify-content:center; align-items: center;">
								<div class="slider-caption-center landing-center" >
									<h2 class="landing-header" style="font-style: italic;text-align:center;">ללמוד לתכנת ב12 שבועות</h2>
									<p class="landing-subheader" style="text-align: center; margin-bottom: 0;">כרטיס הכניסה שלך להיי-טק</p>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section>


		<!-- Content
		============================================= -->
		<section id="content">
			<div style="padding: 0 8px" class="center">
				<h2 style="margin-top:30px;">קורס בוטקאמפ אינטנסיבי בהשראת ממר"מ המעובר על ידי בוגרי היחידה</h2>
				<h4 style="margin: 0">
					בואו לערב הפתוח 					
					<?php echo $dates['nextOpenEveningLanding1'];?>
					בו יינתן שיעור לדוגמא
				</h4>
				<h4 style="margin-bottom: 0">
				 הקורס מתחיל
				 <?php echo $dates['nextCourseLanding1'];?>
			</h3>
			</div>

			<div class="content-wrap">
				<!-- צור קשר -->
				<div id="contact" class="promo promo-full">

					<div class="container clearfix">

						<div id="q-contact" class="widget quick-contact-widget clearfix">

							<h2 class="highlight-me center">לרישום ולמידע נוסף נא השאירו פרטים</h4>
								<div class="quick-contact-form-result"></div>
								<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact-subscribe.php" method="post" class="quick-contact-form nobottommargin"
								 onsubmit="ga('send', 'event', 'Contact', 'Send', 'Form');">
									<div class="form-process"></div>

									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name"
									 value="" placeholder="שם מלא" />
									<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email"
									 value="" placeholder='כתובת דוא"ל' />
									<input type="text" class="required sm-form-control phone input-block-level" id="quick-contact-form-phone" name="quick-contact-form-phone"
									 value="" placeholder='טלפון' />
									<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message"
									 rows="4" cols="30" placeholder="נשמח לשמוע מכם"></textarea>
									<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<div class="col_full">
										<script src="https://www.google.com/recaptcha/api.js" async defer></script>
										<div class="g-recaptcha" data-sitekey="6Ldm1yIUAAAAAOjrZkc3RZXcZHeAp78tu7ZRrLXr"></div>
									</div>
									<div class="btn-holder">
										<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-xlarge button-rounded nomargin"
										 value="submit"> שלח!</button>
									</div>
								</form>

						</div>

						<!--<div class="center">
							<a 	class="button button-xlarge button-rounded"
								target="_blank" href="#">צור קשר</a>
						</div>-->
					</div>

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

	</footer>
	<!-- #footer end -->

	</div>
	<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->


	<!--build:js js/main.min.js -->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>

	<!-- endbuild -->


	<!-- Footer Scripts
	============================================= -->

	<script>
		$(function () {
			$("#side-navigation").tabs({ show: { effect: "fade", duration: 400 } });
		});
	</script>

	<!-- google adwords script -->
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 1013445257;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "hhk7COyEpHQQieWf4wM";
		var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

	</script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1013445257/?label=hhk7COyEpHQQieWf4wM&amp;guid=ON&amp;script=0"
			/>
		</div>
	</noscript>


</body>

</html>