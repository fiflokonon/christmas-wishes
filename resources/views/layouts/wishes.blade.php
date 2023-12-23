<!DOCTYPE html>
<html lang="fr" class="notranslate" translate="no">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Un proche, un ami pense à vous à Noël! Recevez son message et faites-en de même!">
    <meta name="google" content="notranslate"/>
    <!-- Touch icons for android and iOS (Bookmark icons) -->
    <link rel="shortcut icon" sizes="196x196" href="/assets/images/icons/icon-196x196.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/icons/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/icons/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/icons/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/icons/touch-icon-ipad-retina.png">

    <!-- Schema.org markup for Google+ and facebook -->
    <!-- <meta property="og:title" content="Sven">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://your-website-url.com"/>
    <meta property="og:image" content="Use images that are at least 1200 x 630 pixels for the best display on high resolution devices">
    <meta property="og:description" content="Sven - Creative Coming Soon Template"> -->

    <!-- Schema.org markup for twitter cards(summary_large_image) -->
    <!-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@username">
    <meta name="twitter:title" content="Title should be concise and will be truncated at 70 characters.">
    <meta name="twitter:description" content="A description that concisely summarizes the content of the page, as appropriate for presentation within a Tweet. Do not re-use the title text as the description, or use this field to describe the general services provided by the website. Description text will be truncated at the word to 200 characters.">
    <meta name="twitter:image" content="URL to a unique image representing the content of the page. Do not use a generic image such as your website logo, author photo, or other image that spans multiple pages. Images for this Card should be at least 280px in width, and at least 150px in height. Image must be less than 1MB in size."> -->

    <title>Ses Vœux pour vous</title>
    <link href="/assets/css/vendor/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/vendor/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/vendor/jssocials.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/vendor/jssocials-theme-flat.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/combined/sven-essentials.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/combined/page-essentials.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/custom/index-main-3.css" rel="stylesheet" type="text/css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<!-- =================================================================
    Greetmas - Christmas Greeting
================================================================== -->
<div id="greetmas" class="sven-container" data-enable-sound="/assets/music/christmas.mp3" data-static-video="/assets/videos/bg-1-compressed.mp4" data-video-type="html5" data-video-loop="true" data-teaser-auto-start="false">
    <!--<div id="scene-1" class="sven-slide">
        <div class="content-container">
            <h1 class="lt-main" data-sin="animation: fade-in" data-sout="animation: fade-out-mod1">
                Cher <span class="name-holder">James Smith</span>
            </h1>
        </div>
    </div>-->
    @foreach($scenes as $index => $scene)
        <div id="scene-{{ $index + 1 }}" class="sven-slide">
            <div class="content-container">
                <h1 class="lt-main" data-sin="animation: fx{{ $index + 1 }}">
                    {!! $scene !!} {{-- Utilisez {!! !!} pour afficher le HTML généré --}}
                </h1>
            </div>
        </div>
    @endforeach
    <div id="scene-6" class="sven-slide">
        <div class="content-container">
            <h1 class="lt-main big-text" data-sin="animation: fx1-in">
                Joyeux Noël ! <br>
                À votre tour de faire pareil!
            </h1>
            <h1 class="lt-sub" data-sin="animation: fade-in-mod1">
                <a href="//{{ request()->getHttpHost() }}" id="pop-personalize" class="st-btn btn-fill">Cliquez ici pour rédiger votre message</a>
            </h1>
        </div>
    </div>
</div>

<!-- =================================================================
Splash page content (If autostart is set to false)
================================================================== -->
<div class="splash-page abs-fs vflow bg-cover">
    <div class="sven-scene halign-center">
        <div class="centered center-center">
            <p>Aujourd'hui, c'est Noël ! {{ $message->name }} a un message pour vous !</p>
            <p style="margin-bottom: 0"><a class="st-btn btn-fill play-button">Cliquez pour ouvrir</a></p>
        </div>
    </div>
</div>

<!-- =================================================================
Preloader Instance
================================================================== -->
<div class="loader-container">
    <div class="abs-center">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>
    <div class="sound-info text-center">
        <p><img src="/assets/images/sound.png" alt="Enable Sound" width="32" height="32"/><br/>Tap / Click anywhere to preload sound <br/> for an optimum experience</p>
    </div>
</div>

<!-- =================================================================
Player Controls (Footer)
================================================================== -->
<div class="pl-wrapper vflow">
    <div class="pl-controls">
        <ul>
            <!--<li><a class="hashtag" target="_blank" href="https://twitter.com/home?status=Greetmas%20is%20an%20unique,%20christmas%20greeting%20HTML%20template%20with%20minimal%20typographic%20animations%20which%20would%20be%20perfect%20for%20any%20agency%20(or)%20business%20to%20wish%20their%20visitors,%20clients%20and%20business%20partners%20a%20Merry%20Christmas%20and%20Happy%20New%20Year.%20%23christmas%20%23greeting%20%23greetmas%20%23sven%20%23envato">#GREETMAS</a></li>-->
            <li><a class="pl-play">PLAY</a></li>
            <li><a class="pl-sound">SOUND</a></li>
            <!-- <li><a class="pl-skip">SKIP INTRO</a></li> -->
        </ul>
    </div>
</div>

<!-- =================================================================
Company Logo and Link (Uncomment this section if you need)
================================================================== -->
<!-- <div class="pl-wrapper vflow logo-container">
    <div class="pl-controls">
        <ul>
            <li><a href="https://1.envato.market/c/388037/275988/4415?u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fsvencreations%2Fportfolio" class="logo-top"><img src="images/greetmas-logo.png" alt="Greetmas"/></a></li>
        </ul>
    </div>
</div> -->

<a href="https://1.envato.market/c/388037/275988/4415?u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fsvencreations%2Fportfolio" target="_blank">
    <div class="build-details">
        POWERED BY <span>SVENCREATIONS</span>
    </div>
</a>

<!-- =================================================================
Compiled JS plugins
================================================================== -->
<script src="/assets/js/vendor/jquery.min.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="/assets/js/vendor/jssocials.min.js"></script>
<script src="/assets/js/vendor/clipboard.min.js"></script>
<script src="/assets/js/combined/html5-video.min.js"></script>
<script src="/assets/js/combined/sven-essentials.min.js"></script>
<script src="/assets/js/combined/sven-motion.min.js"></script>
<!-- <script src="js/custom-animations.js"></script> -->
<script src="/assets/js/index-main-3.js"></script>

</body>
</html>
