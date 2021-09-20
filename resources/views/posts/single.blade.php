@extends('layouts.app')

@section('content')
    <div class="card-container">
        <h1>{{$post->accountName}}</h1>
        <img src="{{$post->picture}}" alt="">
    </div>
@endsection

