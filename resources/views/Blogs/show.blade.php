@extends('Templates.App')
@section('content')
<h1>Welcome to my Blogs</h1>
<h2>{{ $score }}</h2>
<ul>
    @forelse ($users as $user)
        <li> {{ $user->username }}</li>
            @empty
            user is empty
            @endforelse
        </ul>
@endsection
    @section('title','blogs')
