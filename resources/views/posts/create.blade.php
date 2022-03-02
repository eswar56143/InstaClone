@extends('layouts.app')

@section('content')
<div class="container px-5">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>
                    <input id="caption"
                           type="text"
                           name="caption"
                           class="form-control @error('caption') is-invalid @enderror" caption="caption"
                           value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                    <input type="file" name="image" id="image" class="form-control">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4 w-25">
                    <button type="submit" class="btn btn-primary">Add new post</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
