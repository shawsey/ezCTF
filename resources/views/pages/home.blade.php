@extends('layouts.default')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- css files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">


      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">


    <!--<link rel="stylesheet" type="text/css" href="assets/css/styles.css">-->

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <meta name="author" content="Hassan Ali">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body{
            font-size:16px;
            color: #dfdfdf;
            background-color: #FCF6F5FF;
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
            background: #89ABE3FF;
        }
        .section-2 {
            background-color: #847072;
        }
        .section-3 {
            background-color: #00539CFF;
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
        .outerdiv {
          width:100%;
          text-align:center;
        }
        .logo {
          max-height:500px;
          max-width:500px;
          display:inline-block;
          margin:0 auto;

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

<!-- Social -->

    <div class="container"> <div class="outerdiv">
      <div class="logo">
         <a target="_blank" href=""><img class="" src="images/EZ_CTF_Logo.png"></a>
      </div>
    </div></div>


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
            <p>Developed by Nimesh Silva, Nick Shaw, Sean McCarthy</p><br>

        </div>
        
    </div>


<!--Insert Projects here -->


<!-- Social -->
<section id="social" class="section section-3">
    <div class="container">
        <div class="has-text-centered">
            <h3 class="title is-3"><center><b>Select OS</b></center></h3>
        </div>
        <div class="social-container columns">
            <div class="column is-6 has-text-centered">
                <a target="_blank" href="/windows"><img class="" src=https://i.postimg.cc/LsJsHrhV/windows-logo.jpg></a>
            </div>
            <div class="column is-6 has-text-centered">
                <a target="_blank" href="/linux"><img class="" src=https://i.postimg.cc/g012rNZb/linux-image.png></a>
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
<p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p> <br>-->

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

@stop


</html>
