@extends('layouts.app')
@section('title')
    <title>{{ auth()->user()->name }} (@ {{auth()->user()->username}}) | Insta </title>
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3 py-2">
                    <b>followers</b>
            </div>
            @include('layouts.profilesList')
        </div>
    </div>
@endsection
