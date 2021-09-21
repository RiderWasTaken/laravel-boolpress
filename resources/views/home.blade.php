@extends('layouts.app')

@section('content')

<div class="big-container">
    <div class="card-container home-container white justify-content-center align-items-center">
        <h1>Welcome to BoolPress!</h1>
        <div class="home-menu">
            <ul>
                <a href="{{route('posts.index')}}"><li class="text-primary">See other posts</li></a>
                <a href="{{route('posts.create')}}"><li class="text-primary">Create new Post</li></a>
                <li class="text-secondary denied">Workshop</li>
            </ul>
        </div>
    </div>
</div>

@endsection