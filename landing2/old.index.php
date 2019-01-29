<?php
session_start();
include("captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
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
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

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
                    <li><a class="page-scroll" href="#page-top">
                        <i class="fa fa-home"></i>
                        דף הבית</a>

                        <div></div>
                    </li>
                    <li><a class="page-scroll" href="#you">
                        <i class="fa fa-user"></i>
                        אתה</a>

                        <div></div>
                    </li>
                    <li><a class="page-scroll" href="#nice-to-meet">
                        <i class="fa fa-users"></i>
                        אנחנו</a>

                        <div></div>
                    </li>
                    <li><a class="page-scroll" href="#orbit">
                        <i class="fa fa-graduation-cap"></i>
                        המסלול</a>

                        <div></div>
                    </li>
                    <!--<li>-->
                        <!--<a class="page-scroll" href="mailto:admin@misterbit.co.il?Subject=Coding%20Academy"-->
                           <!--target="_blank">-->
                        <!--<i class="fa fa-phone"></i>-->
                    <!--</a>-->
                    <!--</li>-->
                    <li><a class="page-scroll" href="#contact">
                        <i class="fa fa-phone"></i>
צרו קשר
                        </a>
                        <div></div>
                    </li>
    <li><a class="page-scroll" href="http://coding-academy.org/q&a.html">
                        <i class="fa fa-question-circle"></i>
                        שאלות נפוצות
                    </a>
                        <div></div>
                    </li>
                     <li><a class="page-scroll" href="http://coding-academy.org/for-employers.php">
                                            <i class="fa fa-briefcase"></i>
                    למעסיקים
                                        </a>

                                            <div></div>
                                        </li>

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

                    <div class="mtb-2em">
                        <h3>
                            המחזור הקרוב:
                            <span class="navy">
                             אפריל 2017
                             </span>
                        </h3>
                    </div>
                    <div class="hidden-xs-up">
                        <a class="page-scroll btn btn-primary" href="#orbit">
                            <span>למידע נוסף</span>
                        </a>
                        <a class="page-scroll btn btn-primary" href="#contact">
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

<section class="featured-clients">
    <div class="container">
        <div class="row">
            <div class="navy-line"></div>
            <div class="col-lg-12 text-center">
                <!--<div class="navy-line"></div>-->
                <h1 class="uppercase">Featured <span class="navy">Clients</span></h1>
            </div>
        </div>
        <div class="row companies-logos-container ptb3">
            <div class="col-xs-4 col-lg-2 grayscale">
                <img src="img/clients/at&t.svg" class="img-responsive" alt="at&t logo">
            </div>
            <div class="col-xs-4 col-lg-2 grayscale">
                <img src="img/clients/audioCodes_logo.png" class="img-responsive" alt="reskill logo">
            </div>
            <div class="col-xs-4 col-lg-2 grayscale">
                <img src="img/clients/poalim.png" class="img-responsive" alt="reskill logo">
            </div>
            <div class="col-xs-4 col-lg-2 grayscale">
                <img src="img/clients/vtool-logo.png" class="img-responsive" alt="reskill logo">
            </div>
            <div class="col-xs-4 col-lg-2 grayscale">
                <img src="img/clients/supersonic-logo.png" class="img-responsive" alt="reskill logo">
            </div>
            <div class="col-xs-4 col-lg-2 grayscale">
                <img src="img/clients/jivyGroup.png" class="img-responsive" alt="reskill logo">
            </div>
            <div class="col-xs-4 col-lg-2 grayscale">
                <img src="img/clients/reskill-logo.png" class="img-responsive" alt="reskill logo">
            </div>
        </div>
    </div>
</section>

<section class="gray-section orbit pb-1em" id="orbit">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>
                    המסלול
                </h1>
            </div>
        </div>
        <div class="row features-block text-right pr-1em">
            <div class="col-md-6 col-md-offset-3 ">
                <p>
                    ההכשרה פותחה ע"י ירון ביטון, ממעצבי קורס התכנות של בסמ"ח (ממר"ם) ומתוך ניסיון עצום בהכשרת מפתחים מאז
                    1996
                </p>

                <p>
                   <span class="navy">
                       אנו מתחייבים לייצר עבורך סביבת לימוד אופטימלית, בה תוכל לממש את הפוטנציאל שלך ולהתקדם מהר.
                   </span>
                    <br/>
                    אתה תלמד יותר משחשבת שאתה יכול ותחווה בגוף ראשון מה קורה כשקבוצה של אנשים מוכשרים, מציבה בקו האופק
                    אתגר אמיתי,
                    <br/>
                    ומקבלת את התמיכה המתאימה בדרך. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>
                    <span class="navy">
                        עקרונות המסלול
                    </span>
                </h1>
            </div>
        </div>
        <div class="principles">
            <div class="row">
                <div class="col-sm-4 text-center plr-1em ">
                    <i class="fa fa-group features-icon wow bounceIn animation-duration-2"></i>
                    <h4>למידה קבוצתית</h4>

                    <div>
                        <p>
                            מתברר שרובינו לומדים טוב יותר כשאנחנו בקבוצה קטנה המתמודדת עם אתגר משמעותי!
                    </div>
                </div>
                <div class="col-sm-4 text-center plr-1em">
                    <i class="fa fa-graduation-cap features-icon wow bounceIn animation-duration-2"></i>
                    <h4>יכולת לימוד עצמי</h4>

                    <div>
                        <p>
                            אנו מאמינים בלמידה עצמית וקבוצתית, אנחנו נכוון ונלמד אותך איך ללמוד טכנולוגיה במהירות
                            ובאפקטיביות. זה הכרחי, במקצוע שלנו שלב הלימוד לא מסתיים לעולם </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center plr-1em">
                    <i class="fa fa-code features-icon wow bounceIn animation-duration-2"></i>
                    <h4>תרגול מעשי</h4>

                    <div>
                        <p>
                            פיתוח לומדים דרך האצבעות, אנחנו הולכים לכתוב הרבה קוד - פורטופוליו של פרוייקטים שנבנה ביחד
                            ונפרסם אותם בGIT כ- Open Source.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center plr-1em">
                    <i class="fa fa-paper-plane features-icon wow bounceIn animation-duration-2"></i>
                    <h4>מוכנות לתעסוקה</h4>

                    <div>
                        <p>
                            השוק צמא למפתחי פרונטאנד טובים, ובמלוא הכנות - אנחנו מכשירים כדי להעסיק. נלמד את כלי העבודה
                            ההכרחיים, נכיר תהליכי עבודה נכונים, ונכין אתכם לראיון העבודה במיטב החברות והסטרטאפים</div>
                </div>
                <div class="col-sm-4 text-center plr-1em">
                    <i class="fa fa-laptop features-icon wow bounceIn animation-duration-2"></i>
                    <h4>טכנולוגיה מתקדמת
                    </h4>

                    <div>
                        <p>
                            מטבע הדברים, אנו נתמקד בטכנולוגיות המתקדמות והרלוונטיות ביותר כיום. נעזור לך להבחין בין עיקר
                            לטפל, לסגל לעצמך הרגלים מקצועיים נכונים ונדאג לחלץ אותך במהירות מפינות שעשויות לעייף אותך או
                            לגזול ממך זמן מיותר.
                    </div>
                </div>
                <div class="col-sm-4 text-center plr-1em">
                    <i class="fa fa-heart features-icon wow bounceIn animation-duration-2"></i>
                    <h4>ליווי אישי
                    </h4>

                    <div>
                        <p>
                            הצוות שלנו מורכב ממפתחים מוכשרים עם רצון ויכולת לחלוק את הידע שלהם עם מפתחים אחרים. אנחנו
                            מבטיחים לקחת אותך יד ביד כשצריך ולדחוף אותך למים בנקודות שנכון. נחלוק עמך את הניסיון הרב
                            שלנו, נעבור על שורות קוד שכתבת ונשפר אותן.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>
                    <span class="navy">
בין הדברים שנלמד
                    </span>
                </h1>
            </div>
        </div>
        <div class="principles">
            <div class="row">
                <div class="col-sm-4 text-center plr-1em pb-1em">
                    <img class="tech-icon" src="img/tech/JavaScript-logo.png" alt="">
                    <h4>JavaScript</h4>


                </div>
                <div class="col-sm-4 text-center plr-1em pb-1em">
                    <img class="tech-icon" src="img/tech/html.png" alt="">
                    <h4>HTML</h4>


                </div>
                <div class="col-sm-4 text-center plr-1em pb-1em">
                    <img class="tech-icon" src="img/tech/css.png" alt="">
                    <h4>CSS</h4>


                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center plr-1em pb-1em">
                    <img class="tech-icon" src="img/tech/vuejs-angular.png" alt="">
                    <h4>Vue.js, Angular</h4>


                </div>

                <div class="col-sm-4 text-center plr-1em pb-1em">
                    <img class="tech-icon" src="img/tech/nodejs.png" alt="">
                    <h4>Node.js</h4>


                </div>
                <div class=" tech-desc col-sm-4 text-center plr-1em pb-1em">
                    <i class="fa fa-check-square-o features-icon wow bounceIn animation-duration-2"></i>
                    <h4>And also:</h4>

                    <div>
                        <p>
                            SASS, jQuery, mongoDB, object oriented programing, git, algorithmic thinking, AJAX, working
                            with APIs, REST server, responsiveness, PhotoShop for developers, and more
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class=" text-center mtb-2em">
                <a target="_blank" href="syllabus/coding-academy-syllabus.pdf" class="btn btn-primary ">להורדת הסילבוס
                    המלא</a>
            </div>
        </div>
    </div>


</section>

<section id="team" class=" team pb-3em">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>הצוות</h1>
            </div>
        </div>
        <div class="col-sm-3 mtb-2em wow fadeInRight">
            <div class="team-member">
                <img src="img/team/zohar.jpg" class="img-responsive img-circle " alt="">
                <h4><span class="navy">זוהר</span> לדרר</h4>

                <p>מנהל המכללה </p>
                <a class="phone-number" href="tel:054-6694775" dir="ltr"><span class="navy"><i
                        class="fa fa-phone small-icon"></i> 054-6694775</span></a>
            </div>
        </div>
        <div class="col-sm-3 mtb-2em">
            <div class="team-member wow zoomIn">
                <img src="img/team/yaron.jpg" class="img-responsive img-circle" alt="">
                <h4><span class="navy">ירון</span> ביטון</h4>

                <p>טכנולוג ראשי </p>
                <a class="phone-number" href="tel:050-7543775" dir="ltr"><span class="navy"><i
                        class="fa fa-phone small-icon"></i> 050-7543775</span></a>
            </div>
        </div>

        <div class="col-sm-3 wow fadeInRight mtb-2em">
            <div class="team-member">
                <img src="img/team/roni.jpg" class="img-responsive img-circle " alt="">
                <h4><span class="navy">רוני </span> קרקובר </h4>

                <p>
                    רכזת קורס
                </p>
                <a class="phone-number" href="tel:054-3163124" dir="ltr"><span class="navy"><i
                        class="fa fa-phone small-icon"></i> 054-3163124</span></a>
            </div>
        </div>

    </div>
    <!--<div class="row">-->
    <!--<div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">-->
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>-->
    <!--</div>-->
    <!--</div>-->
    </div>
</section>

<section id="contact" class="gray-section contact ">
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
                    <input type="text" class="form-control" id="name" placeholder="שם מלא" required>
                </div>
                <div class="form-group">
                    <label for="emai1">אימייל</label>
                    <input type="email" class="form-control" id="emai1" placeholder="אימייל ליצירת קשר" required>
                </div>

                <div class="form-group">
                    <label for="phone">טלפון</label>
                    <input type="tel" class="form-control" id="phone" placeholder="טלפון לחזרה" required>
                </div>
                <div class="form-group">
                    <label for="message">הערות</label>
                    <textarea class="form-control" rows="5" id="message" placeholder="נשמח לשמוע ממך" required></textarea>
                </div>
				
				<div class="form-group">
                    <label for="captcha">אנושי?</label></br>
                    <img src="<?php echo $_SESSION['captcha']['image_src'] ?>" />
                    <input type="text" class="form-control" id="captcha" placeholder="הקלידו את התווים מהתמונה. שימו לב לאותיות גדולות וקטנות!">
                </div>

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
                    <div class="col-xs-9 ">
                        <h4 class="">קודינג אקדמי</h4>

                        <div class="row mt10">
                            <ul class="list-unstyled">
                                <li><a class="page-scroll" href="#page-top">דף הבית</a></li>
                                <li><a class="page-scroll" href="#you">אתה</a></li>
                                <li><a class="page-scroll" href="#nice-to-meet">אנחנו</a></li>
                                <li><a class="page-scroll" href="#orbit">המסלול</a></li>
                                <li><a class="page-scroll" href="#contact">לייעוץ והרשמה</a></li>
                                <li><a class="page-scroll" href="http://misterbit.co.il/" target="_blank">
                                    אתר מיסטרביט
                                </a></li>
                                <li><a class="page-scroll" href="http://angularworkshop.co.il/" target="_blank">
                                    קורס אנגולר 2
                                </a></li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-sm-6">
                <div class="row hide-mobile misterbit-logo-container col-sm-10">
                    <span class="logo-bg">
                        <img src="img/academy/logo4.png" class="academy-logo"/>
                    </span>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="m-t-sm">
                            מעוניין לשתף?
                        </h4>
                        <ul class="list-inline social-icon">
                            <li><a target="_blank"
                                   href="https://plus.google.com/share?url=http://coding-academy.org/"><i
                                    class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a target="_blank"
                                   href="https://twitter.com/home?status=http%3A//coding-academy.org/"><i
                                    class="fa fa-twitter"></i></a>
                            </li>
                            <li><a target="_blank"
                                   href="https://www.facebook.com/sharer/sharer.php?u=http%3A//coding-academy.org"><i
                                    class="fa fa-facebook"></i></a>
                            </li>
                            <li><a target="_blank"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//coding-academy.org/&title=Coding%20Academy&summary=&source="><i
                                    class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
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