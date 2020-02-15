<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <!-- css files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <!--<link rel="stylesheet" type="text/css" href="assets/css/styles.css">-->

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <meta name="author" content="Hassan Ali">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        html, body{
            font-size:16px;
            color: #dfdfdf;
            background-color: #063647;
        }

        a {
            color: #00d1b2;
        }

        a:hover {
            color: #00d1b2;
        }

        section{
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .section-1 {
            background: #063647;
        }

        .section-2 {
            background-color: #052D3D;
        }

        .section-3 {
            background-color: #0E282E;
        }

        .section-4 {
            background-color: #063647;
            padding: 0.2rem;
        }

        a.nav-item {
            color: #dfdfdf;
        }

        a.nav-item:hover {
            color: #fff;
        }

        .avatar{
            height:200px;
            border-radius: 50%;
        }

        .intro-description{
            padding-top: 1rem;
        }

        .social-container img{
            max-width:100%;
            max-height:175px;
            margin-bottom:15px;
            border-radius: 50%;
        }

        .project-figure {
            margin: 0 auto 1rem auto;
            max-height: 256px;
            max-width: 256px;
        }

        .project-text {
            text-align: justify;
        }

        .box {
            background-color: transparent;
            border: 2px solid rgba(7, 59, 79, 0.5);
        }

        .title {
            color: #fff;
            text-align: left;
            margin-bottom: 2rem;
        }

        .intro {
            text-align: justify;
            width: 80%;
            margin: 0 auto;
        }

        .void-background {
            background-color: transparent;
        }

        @media  screen and (max-width: 768px) {
            .nav-menu {
                background-color: #063647;
            }

            .nav-toggle:hover {
                background-color: transparent;
            }

            .nav-toggle span {
                background-color: #dfdfdf;
            }

            .nav-toggle span:hover {
                background-color: #fff;
            }
            ul.breadcrumb {
                padding: 10px 16px;
                list-style: none;
                background-color: ;
            }
            ul.breadcrumb li {
                display: inline;
                font-size: 18px;
            }
            ul.breadcrumb li+li:before {
                padding: 8px;
                color: gray;
                content: "->\00a0";
            }
            ul.breadcrumb li a {
                color: aqua;
                text-decoration: none;
            }
            ul.breadcrumb li a:hover {
                color: white;
                text-decoration: underline;
            }
            a:hover {
                color: white;
                transition: color 1s ease-in;
            }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="nav container void-background">
    <!-- This "nav-menu" is hidden on mobile -->
    <!-- Add the modifier "is-active" to display it on mobile -->
    <div class="nav-left">
        <!--
        <a href="http://medium.com/@hassanhelfi/" class="nav-item">
            <span class="icon">
                <i class="fa fa-medium"></i>
            </span>
        </a>-->
        <a style="color: aqua" href="https://github.com/shawsey/steelhacks2020---ezCTF" target="_blank" class="nav-item">
					<span class="icon">
						<i class="fa fa-github"></i>
					</span>Our GitHub Repository
        </a><!--
				<a href="https://twitter.com/hassanhelfi" class="nav-item">
					<span class="icon">
						<i class="fa fa-twitter"></i>
					</span>
				</a>
-->
    </div>
    <!--<div class="nav-right nav-menu">
        <a style="color: aqua" target="_blank" class="nav-item" href="https://nimeshsilvameetme.netlify.com/">About Me</a>
        <a class="nav-item" href="#blog">Independent Work Blog</a>
        <a class="nav-item" href="#social">Personal LinkedIn</a>
    </div>-->

    <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
    <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
    <span class="nav-toggle">
				<span></span>
				<span></span>
				<span></span>
			</span>
</nav>

<!-- About Me -->
<section id="about" class="section section-1">
    <div class="container has-text-centered">
        <div class="has-text-centered">
            <h3 class="title is-3"><center>EZCTF</center></h3>
            <p><a href="https://nimeshsilvameetme.netlify.com/">Nimesh Silva, Nick Shaw, Sean McCarthy</a></p><br>

        </div>
        <!-- Source: https://flic.kr/p/pAZBNK -->
        <img class="avatar" src="https://i.postimg.cc/HLMCvHVF/capture-the-flag.png" alt="Image">
    </div>
    <div class="container"></br>
        <p class="intro">
        <center>Do not go where the path may lead, go instead where there is no path and leave a trail - Ralph Waldo Emerson</center>
        </p>
    </div>
</section>


<!--Insert Projects here -->


<!-- Social -->
<section id="social" class="section section-3">
    <div class="container">
        <div class="has-text-centered">
            <h3 class="title is-3">Let's Play our CTF Game!</h3>
        </div>
        <div class="social-container columns">
            <div class="column is-6 has-text-centered">
                <a target="_blank" href=""><img class="" src=https://i.postimg.cc/LsJsHrhV/windows-logo.jpg></a>
            </div>
            <div class="column is-6 has-text-centered">
                <a target="_blank" href="https://www.facebook.com/webPhW/"><img class="" src=https://i.postimg.cc/g012rNZb/linux-image.png></a>
            </div>
        </div>
    </div>
</section>

<!-- Footer --><!--
		<section class="section-4 has-text-centered container">
			<a href="https://nimeshsilvameetme.netlify.com/">Nimesh Silva</a>
		</section>-->
<!--<p> Disclaimer:
            <p> This template was based off of <a href="https://www.quora.com/Should-I-use-Github-as-a-portfolio-or-should-I-build-a-simple-website-to-share-my-programming-projects-instead/answer/Hassan-Ali-418?ch=10&amp;share=35a875f4&amp;srid=EeNe" target="_blank">Hassan Ali's template</a>.</p>
            <p>
<p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>	<br>-->

<center><button onclick="topFunction()" id="myBtn" title="Go to top">Back to the top of the page</button><br></center>


<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<!-- Scripts  -->
<script src="controller.js"></script>
</body>
</html>

<!--<!DOCTYPE html>

<html>

<head>

    <title></title>

</head>

<body>

    <h1>Hello World!</h1>

</body>

</html>
-->
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
-->
