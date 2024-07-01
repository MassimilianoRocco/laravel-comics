@extends('layouts.app')

@section("styles")
<link rel="stylesheet" href="/singleComic.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

@section("title", "SingleComic")
       
@section('main_content')
    <div class="container">
        <div class="text_box">
            <h1>{{ $comicBook["title"] }}</h1>
        </div>
        <div class="info_container">
            <div class="thumb_box">
                <img src= {{$comicBook["thumb"]}} >
            </div>
            <div class="description_box">
                <p>{{ $comicBook["description"] }}</p>
            </div>
        </div>
    </div>
@endsection