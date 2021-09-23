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

        <div class="form-group">        
            <input type="text" name="picture" id="picture">
            <label for="picture">Picture</label>
        </div>

        <div class="form-group">
            <input type="text" name="description" id="description">
            <label for="description">Description</label>
        </div>
        
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="category_id">
                    <option selected>Choose...</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option> 
                        <!--need to fix this -->
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <input type="text" name="accountName" id="accountName">
            <label for="accountName">Author</label>
        </div>

        <div class="form-group">
            <input type="text" name="accountPfp" id="accountPfp">
            <label for="accountPfp">AuthorPFP</label>
        </div>

        <div class="form-group">
            <input type="datetime-local" name="date" id="date">
            <label for="date">Date & Time</label>
        </div>        

        <h3>Add details</h3>

        <div class="form-group">
            <input type="text" name="location" id="location">
            <label for="location">Location</label>
        </div>

        <input type="submit" value="save">
        
        <!-- 1:10:00 92A -->

    </form>

</div>

@endsection

