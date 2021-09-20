@extends('layouts.app')

@section('content')
    <div class="card-container">
    <table id="db-tracker">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">picture</th>
                <th scope="col">description</th>
                <th scope="col">author</th>
                <th scope="col">date</th>
                <th scope="col">details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allposts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td><img src="{{$post->picture}}"/></td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->accountName}}</td>
                    <td>{{$post->date}}</td>
                    <td><a href="/posts/{{$post->id}}"><div style="background: purple; width: 15px; height: 15px;"></div></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection

