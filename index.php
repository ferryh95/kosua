<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Platinum Kyushu TabiTabi</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&family=Noto+Sans+JP&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/924a4290f9.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="ページ名" class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light nav-head">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="images/top/lg-top.png" alt="プラチナ旅々">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-main-menu">
                                <a class="nav-link" id="homelink" href="../user/companyinfo.php">
                                    <div class="area-menu-image">
                                        <img src="images/top/mi-area.png" alt="area-icon">
                                    </div>
                                    Area
                                </a>
                            </li>
                            <li class="nav-item nav-main-menu">
                                <a class="nav-link" id="jigyoulink" href="#">
                                    <div class="area-menu-image">
                                        <img src="images/top/mi-course.png" alt="area-icon">
                                    </div>
                                    Course</span>
                                </a>
                            </li>
                            <li class="nav-item nav-main-menu">
                                <a class="nav-link" id="worklink" href="#">
                                    <div class="area-menu-image">
                                        <img src="images/top/mi-article.png" alt="area-icon">
                                    </div>
                                    Article</span>
                                </a>
                            </li>
                            <li class="nav-item nav-main-menu">
                                <a class="nav-link" id="memberlink" href="#">
                                    <div class="area-menu-image">
                                        <img src="images/top/mi-event.png" alt="area-icon">
                                    </div>
                                    Event</span>
                                </a>
                            </li>
                            <li class="nav-item nav-main-menu">
                                <a class="nav-link" id="qnalink" href="#">
                                    <div class="area-menu-image">
                                        <img src="images/top/mi-review.png" alt="area-icon">
                                    </div>
                                    Review</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!---->
        <main>
            <div class="container">
                <div class="row">
                    <!--left col-->
                    <div class="col col-1">
                        <div class="col-1-top">
                            TODAY's your spot
                        </div>
                        <div class="datebox">
                            <span class="dates-col-1">
                                <p id="year" class="year"></p><br>
                                <p id="day" class="day"></p>
                            </span>
                            <span class="dates-col-2">
                                <span id="mondate" class="mondate"></span>/
                                <span id="daydate" class="daydate"></span>
                            </span>

                        </div>
                        <div class="weather-container">
                            <div class="weather-box">
                                <h2 id="temperature"></h2>
                                <p id="condition"></p>
                                <p id="location"></p>
                            </div>
                            <hr>
                        </div>
                        <!--event container-->
                        <div class="event-container">
                            <div class="event-box">
                                <div class="event-text">
                                    EVENT
                                </div>
                            </div>
                            <div class="event-image text-center">
                                <img src="images/top/top-event-img.png">
                            </div>
                            <div class="event-bottom-text">
                                <div class="event-date">
                                    2023/09/31
                                </div>
                                <div class="event-text-2">
                                    Kumamoto Castle Tsuboi River Enyukai, Foliage Viewing Part
                                </div>
                                <div class="event-text-3 text-right">
                                    view more Events&nbsp;&nbsp;&nbsp;<img src="images/common/right-awrrow.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <!--right col-->
                    <div class="col col-2">
                        <div class="pick-up">
                            <img src="images/top/top-image.jpg" alt="top image" width="1400" heieght="700">
                        </div>
                        <div class="pick-up-text">
                            Relax at hot springs and shrines in winter!
                        </div>
                        <div class="pickup-check text-right">
                            <div class="pickup-check-text">
                                read this article
                            </div>
                            <div class="button-pickup-check">
                                <button>
                                    <img src="images/common/right-awrrow.png" alt="矢印">
                                </button>
                            </div>

                        </div>
                        <hr>
                        <div class="emergency-alert">
                            There is no emergency disaster alert.
                        </div>
                    </div>
                </div>
            </div>
            <!--introducing kyuushuu-->
            <div class="introducing text-center">
                <div class="intro-top">
                    Introducing Kyushu's high-quality and unknown trips.
                </div>
                <div class="intro-bottom">
                    Nestled in the southernmost part of Japan, Kyushu, the third-largest island, is a treasure trove
                    of<br>
                    breathtaking landscapes, rich history, and vibrant culture waiting to be explored. While the island
                    is<br> renowned for its iconic attractions, there exists a plethora of lesser-known destinations and
                    unique<br> experiences that offer an unmatched adventure for travelers seeking something off the
                    beaten
                    path. In this<br> article, we'll delve into the lesser-explored corners of Kyushu, unveiling
                    high-quality and unknown trips that<br> promise to create unforgettable memories.
                </div>
            </div>
            <!--reviews-->
            <div class="reiviews text-center">
                <div class="review-text">
                    Reviews
                </div>
                <div class="review-text-2">
                    Travel reviews posted on the site
                </div>
                <div class="review-slidder">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/top/review-img.jpg" alt="リビュー">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="post-submit">
                        <div class="post-submit-text">
                            Submit a review! get points
                        </div>
                        <div class="post-submit-button text-center">
                            <button>
                                Post a review
                            </button>
                        </div>
                    </div>
                    <div class="post-submit-pic">
                        <img src="images/top/ill-review.png" alt="リビュー写真">
                    </div>
                    <div class="review-check text-right">
                        <div class="review-check-text">
                            check the reviews
                        </div>
                        <div class="button-review-check">
                            <button>
                                <img src="images/common/right-awrrow.png" alt="矢印">
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <!--trip around kyuushu-->
            <div class="trip-around-kyuushuu text-center">
                <div class="trip-around-kyuushuu-text">
                    Take a trip around Kyushu
                </div>
            </div>
            <!--course-->
            <div class="course text-center">
                <div class="course-text">
                    Course
                </div>
                <div class="course-text-bottom">
                    Meet the course of the season
                </div>
                <div class="course-image">
                    <div class="course-image-inner">
                        <div class="row">
                            <div class="col-sm">
                                <img src="images/top/sp-dammy.jpg" alt="春">
                            </div>
                            <div class="col-sm">
                                <img src="images/top/summ-dammy.jpg" alt="夏">
                            </div>
                            <div class="col-sm">
                                <img src="images/top/fall-dammy.png" alt="秋">
                            </div>
                            <div class="col-sm">
                                <img src="images/top/win-dammy.png" alt="冬">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-check text-right">
                    <div class="course-check-text">
                        View model courses
                    </div>
                    <div class="button-course-check">
                        <button>
                            <img src="images/common/right-awrrow.png" alt="矢印">
                        </button>
                    </div>

                </div>
            </div>
            <!--article-->
            <div class="article text-center">
                <div class="article-text">
                    Article
                </div>
                <div class="article-text-bottom">
                    New feature article
                </div>
                <div class="article-detail">
                    <div class="row">
                        <div class="col text-left">
                            <div class="detail-image">
                                <img src="images/top/dammy.jpg" alt="ダミー">
                            </div>
                            <div class="detail-text text-left">
                                Get out of the city and enjoy luxury during your trip.
                            </div>
                            <div class="detail-date text-left">
                                2023.10.10 up
                            </div>
                            <span class="detail-tag">transport</span>
                            <span class="detail-tag">＃Oita</span>
                        </div>
                        <div class="col text-left">
                            <div class="detail-image">
                                <img src="images/top/dammy.jpg" alt="ダミー">
                            </div>
                            <div class="detail-text text-left">
                                Get out of the city and enjoy luxury during your trip.
                            </div>
                            <div class="detail-date text-left">
                                2023.10.10 up
                            </div>
                            <span class="detail-tag">transport</span>
                            <span class="detail-tag">＃Oita</span>
                        </div>
                        <div class="col text-left">
                            <div class="detail-image">
                                <img src="images/top/dammy.jpg" alt="ダミー">
                            </div>
                            <div class="detail-text text-left">
                                Get out of the city and enjoy luxury during your trip.
                            </div>
                            <div class="detail-date text-left">
                                2023.10.10 up
                            </div>
                            <span class="detail-tag">transport</span>
                            <span class="detail-tag">＃Oita</span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col text-left">
                            <div class="detail-image">
                                <img src="images/top/dammy.jpg" alt="ダミー">
                            </div>
                            <div class="detail-text text-left">
                                Get out of the city and enjoy luxury during your trip.
                            </div>
                            <div class="detail-date text-left">
                                2023.10.10 up
                            </div>
                            <span class="detail-tag">transport</span>
                            <span class="detail-tag">＃Oita</span>
                        </div>
                        <div class="col text-left">
                            <div class="detail-image">
                                <img src="images/top/dammy.jpg" alt="ダミー">
                            </div>
                            <div class="detail-text text-left">
                                Get out of the city and enjoy luxury during your trip.
                            </div>
                            <div class="detail-date text-left">
                                2023.10.10 up
                            </div>
                            <span class="detail-tag">transport</span>
                            <span class="detail-tag">＃Oita</span>
                        </div>
                        <div class="col text-left">
                            <div class="detail-image">
                                <img src="images/top/dammy.jpg" alt="ダミー">
                            </div>
                            <div class="detail-text text-left">
                                Get out of the city and enjoy luxury during your trip.
                            </div>
                            <div class="detail-date text-left">
                                2023.10.10 up
                            </div>
                            <span class="detail-tag">transport</span>
                            <span class="detail-tag">＃Oita</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article-check text-right">
                <div class="article-check-text">
                    View more articles
                </div>
                <div class="button-article-check">
                    <button>
                        <img src="images/common/right-awrrow.png" alt="矢印">
                    </button>
                </div>
            </div>
            <!--Event-->
            <div class="event text-center">
                <div class="event-text">
                    Events
                </div>
                <div class="event-text-bottom">
                    Introducing recommended events
                </div>
                <div class="swiper swiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                        <div class="swiper-slide text-left">
                            <div class="e-swipper-image">
                                <img src="images/top/event-placholder.png" alt="リビュー">
                            </div>
                            <div class="e-swipper-text">
                                Grand Setsubun Festival
                            </div>
                            <div class="e-swipper-loc">
                                <i class="fa-solid fa-location-dot"></i>Kushida Shrine
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="review-check-2 text-right">
                <div class="review-check-2-text">
                    check the review
                </div>
                <div class="button-review-check-2">
                    <button>
                        <img src="images/common/right-awrrow.png" alt="矢印">
                    </button>
                </div>
            </div>
            <!--map-->
            <div class="map text-center">
                <div class="map-text-top">
                    Get to know the region of Kyushu
                </div>
                <div class="map-title">
                    Area
                </div>
                <div class="map-text-bottom">
                    Click the map to see details.
                </div>
                <div class="row">
                    <div class="col map-left-col">
                        <div class="castle-image">
                            <img src="images/top/map-castle.jpg" alt="熊本城" width="300" height="150">
                        </div>
                        <div class="map-image-text-header">
                            Kumamoto
                        </div>
                        <div class="map-image-text">
                            "Nature of fire", "land of water", "nature" and "water"
                            blessed with magnificent nature and clear streams.
                            "Local Cuisine" full of flavors unique to Kumamoto.
                            Straight-forward and stubborn people "Mokkosuna people"
                        </div>
                        <div class="map-image-button text-center">
                            <button>
                                Read More&nbsp;&nbsp;&nbsp;<img src="images/common/right-awrrow.png">
                            </button>
                        </div>
                    </div>
                    <div class="col map-right-col">
                        <img src="images/top/kyuu-map.png" alt="九州マップ">
                    </div>
                </div>
            </div>
            <!--rental car-->
            <div class="rental text-center">
                <div class="rental-text-head">
                    Travel comfortably with a rental car
                </div>
                <div class="row">
                    <div class="col rental-col-left">
                        <div class="rental-image">
                            <img src="images/top/ill-rental.png" alt="レンタルダミー">
                        </div>
                        <div class="rental-text">
                            The driving manual for foreign visitors to Japan provides tourist
                            information, how to use expressways, how to refuel at a self-service gas
                            station, as well as different traffic rules for each country and easy-to-understand diagrams
                            that explain situations that can lead to accidents. . Please take a look.
                        </div>
                        <div class="rental-button">
                            <button>
                                Check the manual&nbsp;&nbsp;&nbsp;<img src="images/common/right-awrrow.png">
                            </button>
                        </div>
                    </div>
                    <div class="col rental-col-right">
                        <div class="col-right-text">
                            The driving manual for foreign visitors to Japan provides tourist information, how to use
                            expressways, how to refuel at a self-service gas station, as well as different traffic rules
                            for each country and easy-to-understand diagrams that explain situations that can lead to
                            accidents. . Please take a look.
                        </div>
                        <div class="sponsor-logo row">
                            <div class="col">
                                <img src="images/top/re-ori.jpg" alt="orix" width="100" height="50">
                            </div>
                            <div class="col">
                                <img src="images/top/re-times.jpg" alt="times" width="100" height="50">
                            </div>
                            <div class="col">
                                <img src="images/top/re-bagdet.jpg" alt="budget" width="100" height="50">
                            </div>
                            <div class="col">
                                <img src="images/top/re-nippon.jpg" alt="nippon" width="100" height="50">
                            </div>
                            <div class="col">
                                <img src="images/top/re-toyota.jpg" alt="toyota" width="100" height="50">
                            </div>
                            <div class="col">
                                <img src="images/top/re-avis.jpg" alt="avis" width="100" height="50">
                            </div>
                        </div>
                        <div id="googleMap" style="width:100%;height:400px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6647.19831934533!2d130.39217144163212!3d33.58975528070461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35419191c6bf9d81%3A0x5999335c14be57dc!2sFukuoka%20City%20Hall!5e0!3m2!1sen!2sjp!4v1695100916351!5m2!1sen!2sjp"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="row footer-1">
                <div class="col col-left-footer-1">
                    <img src="images/top/lg-foot.png" alt="footer-logo" width="300" height="80">
                </div>
                <div class="col col-right-footer-1">
                    Introducing Kyushu's high-quality and unknown trips.
                </div>
            </div>
            <div class="footer-2">
                <nav class="footer-menu">
                    <ul>
                        <li>Area</li>
                        <li>Course</li>
                        <li>Article</li>
                        <li>Event</li>
                        <li>Review</li>
                    </ul>
                </nav>
            </div>
            <div class="footer-3">
                <nav class="footer-side-menu">
                    <ul>
                        <li>About this site</li>
                        <li>Privacy policy</li>
                        <li>Site map</li>
                        <li class="footer-contact">
                            <button>Contact</button>
                        </li>
                        <li class="back-to-top">
                            <button onclick="topFunction()" id="myBtn">
                                <img src="images/top/pagetop.png" alt="backtotops">
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="footer-4 text-center">
                Copyright © All Rights Reserved.
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>

</body>

</html>