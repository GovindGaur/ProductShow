@extends('usershow::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('usershow.name') !!}
    </p>
@endsection
