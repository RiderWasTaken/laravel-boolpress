<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<div class="card-container">
    @foreach($allposts as $post)
        <div class="post-card">
            <div class="post-pfp">
                <img src="{{$post->picture}}" alt="">
            </div>
            <div class="post-desc">
                <h1>{{ $post['title']}}</h1>
                <h3>{{ $post['description']}}</h3>
                <span>{{ $post['date']}}</span>
                <span>{{ $post['date']}}</span>
                <span>{{ $post['vote']}}</span>
            </div>
        </div>
    @endforeach
</div> -->