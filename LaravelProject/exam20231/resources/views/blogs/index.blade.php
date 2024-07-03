@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="row justify-content-between mb-4">
            <div class="col-4 text-center">
                <h2>Blogs</h2>
            </div>
            <div class="col-4 text-center">
                <a href="{{ route('blogs.create') }}" class="btn btn-success">Create new blog</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Blog_id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Author</th>
            
            <th width='280px'>Action</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->Blog_id }}</td>
                <td>{{ $blog->Title }}</td>
                <td>{{ $blog->Content }}</td>
                <td>{{ $blog->Author_id }}</td>
                <td>
                    <form action="{{ route('blogs.destroy', $blog->Blog_id) }}" method="POST">
                        <a href="{{ route('blogs.show', $blog->Blog_id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('blogs.edit', $blog->Blog_id) }}" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {{-- khi có paginate --}}
    {{-- {{ $donors->links() }}  --}}
@endsection
