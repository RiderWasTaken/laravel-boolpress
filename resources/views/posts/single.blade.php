@extends('layouts.app')

@section('content')
<div class="single-container">
        <img class="single-pic" src="{{$post->picture}}" alt="">
        <div class="single-details white">
            <div class="acocunt-details">
                <div class= "single-pfp">
                    <img src="{{$post->accountPfp}}" alt="">
                </div>
                <h4>Author: {{$post->accountName}}</h4>
            </div>
            <span>Description: {{$post->description}}</span>
            <span>Published: {{$post->date}}</span>
        </div>
        <a href="{{route('posts.index')}}"><button class="back-to">Back To Index</button></a>
    </div>
@endsection

