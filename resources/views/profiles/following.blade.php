@extends('layouts.app')
@section('title')
    <title>{{ auth()->user()->name }} (@ {{auth()->user()->username}}) | Insta </title>
@endsection

@section('content')
    @include('layouts.profilesList')
@endsection
