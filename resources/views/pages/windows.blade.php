@extends('layouts.default')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Windows</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>




@section('content')
 
<body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
     

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Microsoft Windows</h1>
        <p class="lead">Select your category below:</p>
        <p class="lead">
          <a href="crypto" class="btn btn-lg btn-secondary">Crypto</a>
          <a href="osint" class="btn btn-lg btn-secondary">OSINT</a>
          <a href="forensic" class="btn btn-lg btn-secondary">Forensics</a>
          <a href="re" class="btn btn-lg btn-secondary">Reversing</a>
          <a href="pwn" class="btn btn-lg btn-secondary">Pwning</a>
          <a href="web" class="btn btn-lg btn-secondary">Web</a>

        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
        
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>


@stop

</html>