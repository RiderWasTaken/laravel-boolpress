@extends('layouts.app')

@section('content')

<div class="card-container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form style="color: #FFF;" action="{{route('posts.store')}}" method="POST">
        @csrf

        <input type="text" name="picture" id="picture">
        <label for="picture">Picture</label>

        <input type="text" name="description" id="description">
        <label for="description">Description</label>

        <input type="text" name="accountName" id="accountName">
        <label for="accountName">Author</label>

        <input type="text" name="accountPfp" id="accountPfp">
        <label for="accountPfp">AuthorPFP</label>

        <input type="datetime-local" name="date" id="date">
        <label for="date">Date & Time</label>


        <input type="submit" value="save">

        
        <!-- 1:10:00 92A -->

    </form>

</div>

@endsection

