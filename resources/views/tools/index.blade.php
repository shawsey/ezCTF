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

      <h1>CTF Tool List</h1>
    

      <h3>Tools for any task</h3>
      <p>There are six categories that are covered on ezCTF, you can find different tools for each here. In the future, we would like to implement a filtration and searching system, as well as display attributes of each tool.</p>

      <hr>

    @foreach($tools as $tool)

    <div class="card text-center">
    <div class="card-header">
     <h5 class="card-title">{{ $tool->title }}</h5>
    </div>
      <div class="card-body">
        <p class="card-text">Published by: {{ $tool->publisher }}</p>
        <p class="card-text">{{ $tool->description }}</p>
        <p class="card-text">Category: {{ $tool->category }}</p>
        <p class="card-text">Operating System: {{ $tool->os }}</p>
        <a href="" class="btn btn-primary">Get</a>
      </div>
 
  </div>
    @endforeach

      <hr>


    </div> <!-- /container -->

    @stop


  </body>
</html>
