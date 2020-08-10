{{-- extends to App --}}
@extends('Templates.App')
{{-- set content --}}
@section('content')
    <h1>Welcome TO My home</h1>
<a href="{{ route('blogs.show',1) }}">go to link</a>
@endsection
{{-- set title --}}
@section('title','Home')
        