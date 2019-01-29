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
                    <li><a class="page-scroll" href="http://coding-academy.org/#page-top">
                        <i class="fa fa-home"></i>
                        דף הבית</a>

                        <div></div>
                    </li>
                    <li><a class="page-scroll" href="http://coding-academy.org/#you">
                        <i class="fa fa-user"></i>
                        אתה</a>

                        <div></div>
                    </li>
                    <li><a class="page-scroll" href="http://coding-academy.org/#nice-to-meet">
                        <i class="fa fa-users"></i>
                        אנחנו</a>

                        <div></div>
                    </li>
                    <li><a class="page-scroll" href="http://coding-academy.org/#orbit">
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
                    <li><a class="page-scroll" href="http://coding-academy.org/#contact">
                        <i class="fa fa-phone"></i>
                        צור קשר
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
<div id="inSlider" class="carousel carousel-fade q-a" data-ride="carousel">
    <!--<ol class="carousel-indicators">-->
    <!--<li data-target="#inSlider" data-slide-to="0" class="active"></li>-->
    <!--<li data-target="#inSlider" data-slide-to="1"></li>-->
    <!--</ol>-->
    <div class="carousel-inner q-a" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption black text-right pr-1em q-a">
                    <h1 class="text-right">
                        מידע למעסיקים
                        <br>

                    </h1>

                    <!--<p class="text-right bigger-text">-->

                    <!--המסלול נבנה בהשראת קורס התכנות של בסמ"ח (ממר"ם)<br/>-->
                    <!--לימודים אינטנסיביים והתנסות מעשית יומיומית ומהנה, בליווי מומחים מהתעשיה<br/>-->
                    <!--ובסופם אפשרויות תעסוקה באחד התחומים האטרקטיביים ביותר על גבי הפלנטה.-->
                    <!--</p>-->

                    <!--<div class="mtb-2em">-->
                    <!--<h3>-->
                    <!--המחזור הקרוב:-->
                    <!--<span class="navy">01.05.2016</span>-->
                    <!--</h3>-->
                    <!--</div>-->
                    <!--<div>-->
                    <!--<a class="page-scroll btn btn-primary" href="#orbit">-->
                    <!--<span>ספר לי על זה</span>-->
                    <!--</a>-->
                    <!--<a class="page-scroll btn btn-primary" href="#contact">-->
                    <!--<span>-->
                    <!--לייעוץ והרשמה-->
                    <!--</span>-->
                    <!--</a>-->
                    <!--</div>-->
                </div>
                <!--<div class="carousel-image wow zoomIn">-->
                <!--<img src="img/academy/sketch.png" alt="ninja"/>-->
                <!--</div>-->
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one q-a"></div>

        </div>

    </div>

</div>


<section id="you" class=" features mt-2em plr-1em you-section">
    <div class="container">
        <h3>
            <span class="navy">
            במה מדובר?
        </span>
        </h3>

        <p>
            תוכנית ייחודית שפותחה צוות המורכב ממפתחי קורס התכנות של בסמ"ח (ממר"ם) ומתוך ניסיון של יותר מ- 20 שנה בהכשרה
            של מפתחים לתוך מערך הפיתוח בכלל, ועולם האינטרנט בפרט החל מ1996.
            <br>
            <br>
            תהליך הסינון למסלול מורכב מהשתתפות בשיעור מזורז בו אנו בונים ביחד משחק פשוט באמצעות HTML, CSS וJS, הקבלה
            מותנית באתגר פתיחה בלימוד עצמי (השלמת המשחק) ולאחריו ראיון אישי ומקצועי - כך אנו מוודאים שהמועמד פונה למקצוע
            שהוא הולך לאהוב ולהצליח בו.
            <br>
            <br>
            התוכנית כוללת מסלול לימודים האורך 12 שבועות של לימוד יומיומי ואינטנסיבי כאשר לאחר שלושה שבועות מתקיים מבחן
            מעבר לשלב ב'.
            <br>

        </p>

        <h3>
            <span class="navy">
            מיהם הבוגרים שלנו?
        </span>
        </h3>

        <p>
            אנשים שעמדו באתגר לא פשוט בכלל, אינטנסיבי ביותר, והשקיעו בחודשים האחרונים הרבה שעות לתוך הלילה.
            <br>
            <br>
            הבוגרים נחשפו באופן מרוכז ל - Best Practices הכי עדכניים ורלוונטיים בעולם הפיתוח:
        </p>
        <ol>
            <li>
                הם כותבים HTML נקי, סמנטי, מינימלי ונכון
            </li>
            <li>
                הם בונים CSS מודולרי ורספונסיבי באמצעות שימוש מתקדם ב-SASS ,
                וב -FlexBox

            </li>
            <li>
                הם יודעים לפתור בעיות אלגוריתמיות במורכבות בינונית
            </li>
            <li>
                יש להם שליטה חזקה ב JavaScript ו TypeScript
            </li>
            <li>
                הם כותבים אנגולר 2 בצורה נכונה ועדכנית
            </li>
            <li>
                יש להם תיק עבודות שמורכב מפרוייקטים מגוונים וקוד איכותי
            </li>
            <li>
                יש להם ניסיון בעבודה בצוות ו Version Control עם GIT
            </li>
            <li>
                הוכיחו מסוגלות גבוהה ללמוד לבד
            </li>
        </ol>
        <p>
            חברת מיסטרביט
            <a href="http://misterbit.co.il/" target="_blank">
                (misterBIT.co.il)
            </a>
            היא בית תוכנה מקצועי, המעסיק בעצמו גם מפתחים ג'וניורים ותומך בהם בתהליך הפיכתם לסיניורים, הבוגרים שלנו נהנים
            מחיבור לרשת מומחים ובעיקר יודעים ללמוד ולהתקדם בכוחות עצמם.
            <br>
            <br>
            ניתן גם לגייס מאיתנו מפתחים מנוסים ולקחת עובדים זמניים לפרוייקטי outsourcing –
            <a href="http://misterbit.co.il/" target="_blank">
                לפרטים נוספים
            </a>
        </p>

        <h3>
            <span class="navy">
עקרונות
        </span>
        </h3>

        <p>
            שמנו דגש ניכר על בניית מסלול תומך עם דגש על הכשרה לתעסוקה מיידית, תוך מיצוי העקרונות הבאים:
        </p>
        <ul>
            <li>
                התמקדות בעיקר – בניגוד ללימודים אקדמאיים, אנו מתמקדים במיומנות התכנות, ומתרגלים אותה באופן יומיומי,
                בליווי סקרי קוד רבים, עד כדי ליטוש לרמת קוד מקצועית.
            </li>
            <li>
                טכנולוגיה מתקדמת – אנו מלמדים את הטכנולוגיות המתקדמות והרלוונטיות ביותר כיום. כולל עבודה לפי Best
                Practices בכל תחום.
            </li>
            <li>
                פיתוח יכולת לימוד עצמי - במקצוע שלנו שלב הלימוד לא נגמר לעולם.
            </li>
            <li>
                תרגול מעשי – פיתוח לומדים דרך האצבעות.
            </li>
            <li>
                תהליכי עבודה – היכרות עם תהליכי עבודה נכונים
            </li>
        </ul>

        <h3>
            <span class="navy">

הקליקו כאן ל
<a href="http://coding-academy.org/syllabus/coding-academy-syllabus.pdf" target="_blank">
    סילבוס
</a>
                     הקורס המלא

            </span>
        </h3>

        <h3>
            <span class="navy">
        </span>
        </h3>
    </div>
</section>
<section id="contact" class="gray-section contact ">
      <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>
                    צרו קשר ונשמח לסייע
                </h1>

                <h2>
                    <span class="navy">
                    </span>
                </h2>
            </div>
        </div>

        <div class="row m-b-lg plr-2em ">
            <form id="contactForm">
                <input type="hidden" id="emp" value="true" />


                <div class="form-group">
                    <label for="name">שם</label>
                    <input type="text" class="form-control" id="name" placeholder="שם מלא" required>
                </div>
                <div class="form-group">
                    <label for="emai1">אימייל</label>
                    <input type="email" class="form-control" id="emai1" placeholder="אימייל ליצירת קשר"
                           required>
                </div>

                <div class="form-group">
                    <label for="phone">טלפון</label>
                    <input type="tel" class="form-control" id="phone" placeholder="טלפון לחזרה">
                </div>
                <div class="form-group">
                    <label for="message">הערות</label>
                            <textarea class="form-control" rows="5" id="message"
                                      placeholder="נשמח לשמוע ממך" required ></textarea>
                </div>

                <div class="form-group">
                    <label for="captcha">אנושי?</label></br>
                    <img src="<?php echo $_SESSION['captcha']['image_src'] ?>" />
                    <br>
                    <br>
                    <input type="text" class="form-control" id="captcha" placeholder="הקלידו את התווים מהתמונה. שימו לב לאותיות גדולות וקטנות!">
                </div>

                <!--Google Analytics -->
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary" id="contactSubmit"
                            onclick="ga('send', 'event', 'Contact', 'Send', 'Form');">
                        שלח

                        <i class="fa fa-paper-plane"></i>
                    </button>
                </div>
<!--************************************-->

                <div class="contactEmail">
                    <p>
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
                                <li><a class="page-scroll" href="#contact">צור קשר</a></li>
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