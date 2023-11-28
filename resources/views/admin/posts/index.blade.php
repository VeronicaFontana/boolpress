@extends("layouts.admin")

@section("content")

    <h1>Elenco Post</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data</th>
                <th scope="col">Tempo di lettura</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->date }}</td>
                <td>{{ $post->reading_time }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route("admin.posts.show", $post) }}"><i class="fa-regular fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
