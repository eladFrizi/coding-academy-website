<?php
session_start();
include("captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

$string = file_get_contents("../dates.json");   
$dates = json_decode($string,true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="12 שבועות של לימודים אינטנסיביים והתנסות מעשית יומיומית ומהנה, בליווי מומחים מהתעשיה, בוגרי ממרם, ובסופם אפשרויות תעסוקה באחד התחומים האטרקטיביים ביותר על גבי הפלנטה.">
    <meta name="author" content="misterBIT">
    <!-- Add Your favicon here -->
    <link rel="icon" href="img/academy/favicon.ico">
    <meta property="og:url" content="http://coding-academy.org/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Coding Academy | להתחיל לתכנת עכשיו"/>
    <meta property="og:description"
          content="
שלושה חודשים אינטנסיביים (לימודים יום מלא 5 ימים בשבוע), במתכונת של קורס תכנות של ממרם. מסיימים את הקורס עם תיק עבודות מרשים, למתאימים תוצע עבודה במיסטרביט – חברת פרוייקטים מצליחה

          "/>
    <meta property="og:image" content="http://coding-academy.org/img/academy/coding-bootcamp-israel.png"/>
    <meta property="fb:app_id" content="825313520910716"/>


    <title>Coding Academy | להתחיל לתכנת עכשיו</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
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

    </script>
</head>
<body id="page-top" dir="rtl">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navy-bg" href="#">
                    <img src="img/academy/logo5.png" style="max-width: 75px">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right ">
                    <li><a class="page-scroll" href="http://coding-academy.org">
                        <i class="fa fa-home"></i>
                        לדף הבית</a>

                        <div></div>
                    </li>
                    <li><a class="page-scroll" href="#contact">
                        <i class="fa fa-phone"></i>
להרשמה ופרטים נוספים
                        </a>
                        <div></div>
                    </li>
    <li><a class="page-scroll" href="http://coding-academy.org/q&a.html">
                        <i class="fa fa-question-circle"></i>
                        שאלות נפוצות
                    </a>
                        <div></div>
                    </li>
                     <!-- <li><a class="page-scroll" href="http://coding-academy.org/for-employers.php">
                                            <i class="fa fa-briefcase"></i>
                    למעסיקים
                                        </a>

                                            <div></div>
                                        </li> -->

                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <!--<ol class="carousel-indicators">-->
    <!--<li data-target="#inSlider" data-slide-to="0" class="active"></li>-->
    <!--<li data-target="#inSlider" data-slide-to="1"></li>-->
    <!--</ol>-->
    <div class="carousel-inner " role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption black text-right pr-1em">
                    <h1 class="text-right">להפוך למתכנת ב-12 שבועות <br/>
                    <span class="navy">
                        המסלול לאמיצים
                    </span>
                    </h1>

                    <p class="text-right bigger-text">

                        המסלול נבנה בהשראת קורס התכנות של בסמ"ח (ממר"ם)<br/>
                        לימודים אינטנסיביים והתנסות מעשית יומיומית ומהנה, בליווי מומחים מהתעשיה<br/>
                        ובסופם אפשרויות תעסוקה באחד התחומים האטרקטיביים ביותר על גבי הפלנטה.
                    </p>
                    <div class="mtb-2em important-info" >
                    <p  class="open-evening">
                    ערב היכרות חוויתי:
                    <?php echo $dates['nextOpenEveningLanding234'];?>
                    <h3 style="margin-top:0;" class="next-course-date">
                    <?php echo $dates['nextCourseLanding234'];?>
                            <span class="navy">
אפריל 2019</span>
                        </h3>
                    </div>
                    <div>

                    </div>
                    <div class="hidden-xs-up" style="width:100%; clear: both;">
                        <a class="page-scroll btn btn-primary" href="#orbit" style="display:none;">
                            <span>למידע נוסף</span>
                        </a>
                        <a class="page-scroll btn btn-primary to-register-btn" href="#contact">
                        <span>
                            לייעוץ והרשמה
                        </span>
                        </a>
                    </div>
                </div>
                <!--<div class="carousel-image wow zoomIn">-->
                <!--<img src="img/academy/sketch.png" alt="ninja"/>-->
                <!--</div>-->
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <!--<div class="item">-->
        <!--<div class="container">-->
        <!--<div class="carousel-caption blank">-->
        <!--<h1>We create meaningful <br/> interfaces that inspire.</h1>-->
        <!--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>-->
        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
        <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash; Set background for slide in css &ndash;&gt;-->
        <!--<div class="header-back two"></div>-->
        <!--</div>-->
    </div>
    <!--<a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">-->
    <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
    <!--<span class="sr-only">Previous</span>-->
    <!--</a>-->
    <!--<a class="right carousel-control" href="#inSlider" role="button" data-slide="next">-->
    <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
    <!--<span class="sr-only">Next</span>-->
    <!--</a>-->
</div>


<!--<section id="features" class="container services">-->
<!--<div class="row">-->
<!--<div class="col-sm-3">-->
<!--<h2>Full responsive</h2>-->
<!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>-->
<!--<p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>-->
<!--</div>-->
<!--<div class="col-sm-3">-->
<!--<h2>LESS/SASS Files</h2>-->
<!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>-->
<!--<p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>-->
<!--</div>-->
<!--<div class="col-sm-3">-->
<!--<h2>6 Charts Library</h2>-->
<!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>-->
<!--<p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>-->
<!--</div>-->
<!--<div class="col-sm-3">-->
<!--<h2>Advanced Forms</h2>-->
<!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>-->
<!--<p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->

<!--<section  class="container features" >-->
<!--<div class="row">-->
<!--<div class="col-lg-12 text-center">-->
<!--<div class="navy-line"></div>-->
<!--<h1>להפוך למתכנת ב-9 שבועות <br/>-->
<!--<span class="navy">-->
<!--המסלול לאמיצים-->
<!--</span>-->
<!--</h1>-->
<!--</div>-->
<!--</div>-->
<!--<div class="row" >-->
<!--<div class="col-md-3 wow fadeInRight text-right">-->
<!--<p>-->
<!--המסלול נבנה בהשראת קורס התכנות של בסמ"ח (ממר"ם)-->
<!--וכולל לימודים והתנסות יומיומית על פני 9 שבועות אינטנסיביים ומהנים,-->
<!--ובסופם אפשרויות תעסוקה באחד התחומים האטרקטיביים ביותר על גבי הפלנטה.-->
<!--</p>-->
<!--</div>-->
<!--<div class="col-md-6 text-center wow zoomIn">-->
<!--<img src="img/academy/superman.jpg" alt="dashboard" class="img-responsive">-->
<!--</div>-->
<!--<div class="col-md-3 wow fadeInRight text-right">-->
<!--<div class="row">-->
<!--<div class="mtb-2em">-->
<!--<h3>-->
<!--המחזור הקרוב:-->
<!--<span class="navy">25.10.2015</span>-->
<!--</h3>-->
<!--</div>-->

<!--</div>-->
<!--<div class="row">-->
<!--<div class="col-xs-6">-->
<!--<a href="" class="btn btn-primary">ספר לי על זה</a>-->
<!--</div>-->
<!--<div class="col-xs-6">-->
<!--<a href="" class="btn btn-primary">לייעוץ והרשמה</a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->


<!--</section>-->

<section id="you" class=" features mt-2em plr-1em you-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!--<div class="navy-line"></div>-->
                <h1>
                    אם
                <span class="navy">
                    את
                </span>
                    או
                <span class="navy">
                    אתה
                </span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="text-right bigger-text">
                <p class="flex-p">
                    <i class="fa fa-check small-icon wow fadeIn"></i>
                <span class="pr-1em">
                                    מעוניין להכנס לתחום ההייטק
                </span>
                </p>

                <p class="flex-p">
                    <i class="fa fa-check small-icon wow fadeIn check-anim-2"></i>
                <span class="pr-1em">
                                    בעל סקרנות וזיקה חזקה לעולם התכנות, עם או בלי תואר אקדמאי
                </span>
                </p>

                <p class="flex-p">
                    <i class="fa fa-check small-icon wow fadeIn check-anim-3"></i>
                <span class="pr-1em">
                                    בעל יכולת טובה לקריאה והבנה באנגלית
                </span>
                </p>

                <p class="flex-p">
                    <i class="fa fa-check small-icon wow fadeIn check-anim-4"></i>
                <span class="pr-1em">
                                    יכול להתפנות ל3 חודשים מכל תעסוקה אחרת
                </span>
                </p>

                <p class="flex-p">
                    <i class="fa fa-check small-icon wow fadeIn check-anim-5"></i>
                <span class="pr-1em">
                                    אוהב לבלות שעות ארוכות מול מחשב וליצור
                </span>
                </p>

                <p class="flex-p">
                    <i class="fa fa-check small-icon wow fadeIn check-anim-6"></i>
                <span class="pr-1em">
                                    מעוניין לרכוש מיומנות נפלאה ומקצוע מרתק עם תנאי שכר מצויינים
                </span>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <h1 class="tada wow inside-programmer-anim">
                <span class="navy">
                    <span class="blocked-in-mobile">
                        אנחנו מזמינים אותך לגלות-
                    </span>
                    <!--<br/>-->
את המתכנת שבך                </span>
                </h1>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-md-6 col-md-offset-3 col-sm-offset-2 col-sm-8 ">-->
            <!--<iframe class="video-player" width="100%" height="auto" src="https://www.youtube.com/embed/N4YUPH-IVII"-->
            <!--frameborder="0" allowfullscreen></iframe>-->
            <!--</div>-->
        </div>
    </div>

</section>

<section class="features gray-section nice-to-meet" id="nice-to-meet">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>נעים מאוד, קודינג אקדמי</h1>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-sm-6 text-right m-t-n-lg wow zoomIn">
                <img src="img/lecture.jpg" class="img-responsive mtb-2em" alt="lacture">
            </div>
            <div class="col-sm-6 wow fadeInRight text-right ">
                <p>
                    שלום!<br/>
                    הקמנו את קודינג אקדמי מתוך רצון להעמיד מתכנתים מהשורה הראשונה לעולם ההייטק,
                    ובפרט, לענות על הביקוש ההולך וגובר למתכנתי פרונטאנד טובים.
                </p>

                <p>
                    מדריכי המסלול הם בוגרי ממר"ם ואנשי פיתוח ברמה הגבוהה ביותר,
                    <br/>
                    ותוכנית הלימודים מושתתת על עקרונות עדכניים ופורצי דרך בתחום ההוראה הטכנולוגית.
                </p>

                <p>
                    התחום הטכנולוגי שבו נעסוק - פיתוח בג'אווסקריפט , נבחר בקפידה,
                    <br/>
                    תחום זה נמצא בביקוש גבוה במיוחד בארץ ובעולם, ועל פי התחזיות עוד יגדל משמעותית בעתיד.
                </p>

                <p>
                    מאז השירות בבסמ"ח (ממר"ם) כמדריך ובעשרים שנה שחלפו הכשרתי אלפי מפתחים בטכנולוגיות שונות,                                       ואני גאה לומר שהמסלול שלפניך הוא זיקוק של הניסיון שלי, והמעקב הרציף שלנו אחרי ההתפתחויות בעולם
                    הטכנולוגי.
                </p>
            </div>

        </div>
    </div>

</section>

    

<section id="contact" class="contact ">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>שוקלים אם זה הדבר הנכון עבורכם?</h1>

                <h2>
                    <span class="navy">
                        צרו קשר ונשמח לסייע
                    </span>
                </h2>
            </div>
        </div>
        <div class="row m-b-lg plr-2em ">
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">שם</label>
                    <input type="text" class="form-control" id="name" placeholder="שם מלא" name="name" required>
                </div>
                <div class="form-group">
                    <label for="emai1">אימייל</label>
                    <input type="email" class="form-control" id="email-user" name="email" placeholder="אימייל ליצירת קשר" required>
                </div>

                <div class="form-group">
                    <label for="phone">טלפון</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="טלפון לחזרה" required>
                </div>
                <div class="form-group">
                    <label for="message">הערות</label>
                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="נשמח לשמוע ממך" required></textarea>
                </div>
				
			<!--	<div class="form-group">
                    <label for="captcha">אנושי?</label></br>
                    <img src="<?php echo $_SESSION['captcha']['image_src'] ?>" />
                    <input type="text" class="form-control" id="captcha" placeholder="הקלידו את התווים מהתמונה. שימו לב לאותיות גדולות וקטנות!">
                </div>-->

				<!--Google Analytics -->
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary" id="contactSubmit" onclick="ga('send', 'event', 'Contact', 'Send', 'Form');">
                        שלח

                        <i class="fa fa-paper-plane"></i>
                    </button>
                </div>

                <!--********mailto-->
                <!--<div class="col-lg-12 text-center">-->
                                       <!--<button onclick="location.href='mailto:admin@misterbit.co.il?Subject=Coding%20Academy';" value="Contact coding" class="btn btn-primary" id="contactSubmit">-->
<!--צור קשר-->

                        <!--<i class="fa fa-paper-plane"></i></button>-->

                <!--</div>-->

                <div class="contactEmail">
                    <p>
                        <br>
                        <br>
                או שלחו מייל ל:
                admin@misterbit.co.il
                    </p>
                </div>

            </form>
            <div class="container thank-you" id="thank-you" style="display:none">
                <div class="row m-b-lg text-center middle">
                    <h2>תודה, נהיה בקשר!</h2>
                </div>
            </div>
        </div>
    </div>

</section>


<footer>
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-sm-6 ">
                <div class="row">

                </div>

            </div>
            <div class="col-sm-6">
                <div class="row hide-mobile misterbit-logo-container col-sm-10">
                    <span class="logo-bg">
                        <img src="img/academy/logo4.png" class="academy-logo"/>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
            <p><strong>&copy; 2016 Coding Academy | קודינג אקדמי</strong><br/>
                ללמוד לתכנת במהירות וביעילות</p>
        </div>
    </div>

</footer>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/main.js"></script>


</body>
</html>