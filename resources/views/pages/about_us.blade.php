@extends('layout')

@section('content')
<main>
        <div class="container">
            <div class="row breadcrumbs">
                <div class="col-sm-12">
                    <a href="index.php?page=index">Home</a>
                    <span class="seperator">></span>
                    <a href="index.php?page=articles">Articles</a>
                    <span class="seperator">></span>
                    <span class="current-page">Article</span>
                </div>
            </div> <!-- .breadcrumbs -->
            
            <div class="row">
                <div class="col-sm-12">
                    <h2>About us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="tabs">
                        <ul>
                            <li><a href="#fragment-1">One</a></li>
                            <li><a href="#fragment-2">Two</a></li>
                            <li><a href="#fragment-3">Three</a></li>
                        </ul>
                        <div id="fragment-1">
                            1 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                        <div id="fragment-2">
                            2 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                        <div id="fragment-3">
                            3 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection