@extends('layouts.app')
@section('title', 'edit-data')

@section('contain')

    <!--Main layout-->
    <main style="min-height: calc(100vh - 58px);">
        <div class="container pt-4">
            <form class="container mt-5" action="{{ route('update', $blogs->id) }} " method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputtitle" class="form-label">Blog-Title</label>
                    <input type="title" class="form-control @error('title') is-invalid @enderror"
                        value="{{ $blogs->title }}" id="title" name="title" aria-describedby="titleHelp" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputdescription" class="form-label">Description</label>
                    <input type="description" class="form-control" value="{{ $blogs->description }}" id="description"
                        name="description" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputslug" class="form-label">Slug</label>
                    <input type="slug" class="form-control" value={{ $blogs->slug }} id="slug" name="slug"
                        @disabled(true)>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    <!--Main layout-->

@endsection
