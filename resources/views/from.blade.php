@extends('layouts.app')

@section('title', 'form')

@section('contain')
    {{-- <form class="container" action="{{ url('store') }} " method="post">
        @csrf
        <div class="mb-3 mt-5">
            <label for="exampleInputtitle" class="form-label">Blog-Title</label>
            <input type="title" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                aria-describedby="titleHelp">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputdescription" class="form-label">Description</label>
            <input type="description" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}


    <!--Main layout-->
    <main style="min-height: calc(100vh - 58px);">
        <div class="container pt-4">
            <form class="container d-flex flex-column" action="{{ url('store') }} " method="post">
                @csrf
                <table>
                    <tr class="row">
                        <td class="col-9">
                            <div class="mb-3 mt-5">
                                <label for="exampleInputtitle" class="form-label">Blog-Title</label>
                                <input type="title" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" aria-describedby="titleHelp">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-9">
                            <div class="mb-3">
                                <label for="exampleInputdescription" class="form-label">Description</label>
                                <input type="description" class="form-control" id="description" name="description">
                            </div>
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-5">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <!--Main layout-->

@endsection
