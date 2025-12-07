@extends('dashboard.layout')
@section('content')
<h2>All Posts</h2>
<a href="/dashboard/posts/create">+ Add Post</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Category</th>
        <th>Action</th>
    </tr>

    @foreach($posts as $post)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
            <a href="/dashboard/posts/{{ $post->id }}">View</a> |

            + <a href="/dashboard/posts/{{ $post->id }}/edit">Edit</a>

            <form action="/dashboard/posts/{{ $post->id }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button>Delete</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>

{{ $posts->links() }}
@endsection