/**
 * Created by PhpStorm.
 * User: kkham
 * Date: 7/7/2019
 * Time: 3:20 PM
 */

@extends('layouts.default')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, World!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>

        </div>
    </div>
    <div class="container">

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Heading1</h2>
                <p>A joyful heart is good medicine. Its true.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>

            </div>

            <div class="col-md-4">

                <h2>Heading2</h2>

                <p>A joyful heart is good medicine. Yes it is. </p>

                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">

                <h2>Heading3</h2>

                <p>A joyful heart is good medicine. Get one.</p>

                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

@endsection