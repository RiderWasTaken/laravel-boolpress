@extends('layouts.app')

@section('content')
    <div class="card-container">
    <table id="db-tracker" class="white">
        <thead>
            <tr>
                <th>#</th>
                <th>picture</th>
                <th>description</th>
                <th>author</th>
                <th>date</th>
                <th>details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allposts as $post)
                <tr>
                    <th  id="index-id" scope="row">{{$post->id}}</th>
                    <td id="index-pic"><img src="{{$post->picture}}"/></td>
                    <td id="index-desc">{{$post->description}}</td>
                    <td id="index-author">{{$post->accountName}}</td>
                    <td id="index-date">{{$post->date}}</td>
                    <td id="index-tools">
                        <a href="{{route('posts.show', $post)}}"><div class="btn btn-primary">Show</div></a>
                        <a href="{{route('posts.edit', $post)}}"><div class="btn btn-primary">Edit</div></a>
                        <form action="{{route('posts.destroy', $post)}}" method="POST">
                            @csrf
                            @method ('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection

