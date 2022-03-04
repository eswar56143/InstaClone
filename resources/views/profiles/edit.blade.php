@extends('layouts.app')
    <title>Edit Profile | Insta  </title>
@section('content')
<div class="container px-5">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>edit Profile</h1>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label ">Title</label>
                    <input id="title"
                           type="text"
                           name="title"
                           class="form-control @error('title') is-invalid @enderror" title="title"
                           value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                    @error('title')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>
                    <input id="description"
                           type="text"
                           name="description"
                           class="form-control @error('description') is-invalid @enderror" description="description"
                           value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                    @error('description')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label ">Url</label>
                    <input id="url"
                           type="text"
                           name="url"
                           class="form-control @error('url') is-invalid @enderror" url="url"
                           value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                    @error('url')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                    <input type="file" name="image" id="image" class="form-control">

                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4 w-25">
                    <button type="submit" class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
