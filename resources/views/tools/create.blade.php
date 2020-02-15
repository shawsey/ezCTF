

@extends('layouts.default')
 
@section('content')
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pwning</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>


    <div class="container">
        
    <h2>Add a Tool</h2>
    
    <form method="post" action="/tools" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Tool Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="titleid" placeholder="Tool Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Tool Publisher</label>
            <div class="col-sm-9">
                <input name="publisher" type="text" class="form-control" id="publisherid"
                       placeholder="Tool Publisher">
            </div>
        </div>
        <div class="form-group row">
            <label for="descriptionid" class="col-sm-3 col-form-label">Description</label>
            <div class="col-sm-9">
                <input name="description" type="text" class="form-control" id="descriptionid"
                       placeholder="Description">
            </div>
        </div>

        <div class="form-group row">
            <label for="categoryid" class="col-sm=3 col-form-label">Category</label>
            <div class="col-sm-9">
                <select name="category" type="text" class="form-control" id="categoryid">
                    <option value="crypto">Crypto</option>
                    <option value="osint">OSINT</option>
                    <option value="forensic">Forensics</option>
                    <option value="reversing">Reversing</option>
                    <option value="pwning">Pwning</option>
                    <option value="web">web</option>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label for="osid" class="col-sm=3 col-form-label">Operating System</label>
            <div class="col-sm-9">
                <select name="os" type="text" class="form-control" id="osid">
                    <option value="linux">Linux</option>
                    <option value="windows">Windows</option>
                    <option value="both">Both</option>
                </select>
            </div>
        </div>

        
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Tool</button>
            </div>
        </div>
    </form>
</div>
 
@endsection