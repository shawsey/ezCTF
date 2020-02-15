@extends('layouts.default')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>CTF Tool List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/grid/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">
  </head>

  <body>


@section('content')


 <div class="container">
 	  <hr>
 	  <!--
      <h1>{{ $tool['title'] }}</h1>

      @section('title', $tool->title )


      <p class="lead">{{ $tool['description'] }}</p>
      <p class="lead">{{ $tool['publisher'] }}</p>
	  <p class="lead">{{ $tool['category'] }}</p>
	  <p class="lead">{{ $tool['os'] }}</p>
      <hr>
	-->

       @foreach($tools as $tool)
      <div class="row">
        <div class="col-4"><a href="/tools/{{ $tool->id }}">{{ $tool->title }}</a></div>
      </div>
    @endforeach


  </div> <!-- /container -->

@stop

</body>
</html>