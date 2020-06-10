@extends('layout.main')

@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel Symbol Route
            </div>

            <h2 class="sub-title">
                Page One
            </h2>

            <div class="links">
                <a href="#">Page 1</a>
                <a href="{{'page-two'}}">Page 2</a>
            </div>
        </div>
    </div>

@endsection
