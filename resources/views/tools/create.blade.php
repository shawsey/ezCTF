

@extends('layouts.default')
 
@section('content')
 
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
 
@endsection