// resources/views/tools.blade.php

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
 
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New tool Form -->
        <form action="/tool" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- tool Name -->
            <div class="form-group">
                <label for="tool" class="col-sm-3 control-label">tool</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="tool-name" class="form-control">
                </div>
            </div>

            <!-- Add tool Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add tool
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current tools -->
@endsection