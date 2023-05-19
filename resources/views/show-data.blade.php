@extends('layouts.app')

@section('title', 'show-data')

@section('style')
    tr:nth-child(even) {
    background-color: #f2f2f2;
    }

    tr:hover {
    background-color: #ddd;
    }

    .border{
    border: 1px solid;
    }
@endsection

@section('contain')

    <!--Main layout-->
    <main style="min-height: calc(100vh - 58px); mt-5">
        <div class="container mt-5">
            <table class="table container mt-5">
                <thead>
                    <tr>
                        <td>
                            {{-- <form action="{{ route('form') }}">
                                <button type="submit" class="btn btn-secondary"><i class="fa fa-chevron-left"
                                        aria-hidden="true">
                                        Back</i>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                    <tr class="bg-success border">
                        <th scope="col" class="border">id</th>
                        <th scope="col" class="border">Blog-title</th>
                        <th scope="col" class="border">slug</th>
                        <th scope="col" class="border">description</th>
                        <th scope="col" class="border">Edit</th>
                        <th scope="col" class="border">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td scope="row">{{ $blog->id }}</td>
                            <td scope="row">{{ $blog->title }}</td>
                            <td scope="row">{{ $blog->slug }}</td>
                            <td scope="row">{{ $blog->description }}</td>
                            <td>
                                <form action="{{ route('edit', $blog->id) }}">
                                    <button type="submit" class="btn btn-success btn-sm fa fa-pencil-square-o">
                                        Edit</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" class="deleteRecord" data-route="{{ route('delete', $blog->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm fa fa-trash-o"> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
    <!--Main layout-->
    <script>
        $(document).ready(function() {
            $('.deleteRecord').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: $(this).data('route'),
                    data: {
                        '_method': 'delete'
                    },
                    success: function(response) {
                        alert(response)
                        window.location = '/index'
                    }
                });
            })
        });
    </script>
@endsection
