@extends('layouts.main')

@section('title', 'Newscape | 404')

@section('content')
<header>
    <div class="top-bar">
        <div class="row">
                <div class="top-bar-left">
                    <ul class="menu">
                    <li class="menu-text"><a href="/"><h1>Newscape</h1></a></li>
                </ul>
                </div>
                <div class="top-bar-right">
                <!-- {/* Add github icon here */ } -->
              </div>
        </div>
    </div>
    <div class="row">
        <div class="large-8 large-offset-2 columns text-center">
            <div class="error-page">
                <h1>404 Error</h1>
                <p>The page doesn't exist. To return to Newscape please click <a href="/">here</a>.</p>
            </div>
        </div>
    </div>
</header>

@endsection
