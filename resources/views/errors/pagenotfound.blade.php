<!DOCTYPE html>
<html>
<head>
	<title>Page Not Found</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="card-container white justify-content-center align-items-center">
		<div class="nf-container">
			<h1>Looks like what you were looking for is not here :(</h1>
			<h4>But here's a cute cats GIF :D</h4>
			<img src="{{ asset('img/cat-stacked.gif') }}" alt="">
		</div>
    </div>
@endsection

</body>
</html>