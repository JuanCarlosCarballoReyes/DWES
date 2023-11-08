@extends('app.base')
@section('title','Argo Create Movie')
@section('content')
<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Director</th>
                <th scope="col">Year</th>
                <th scope="col">Genre</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
           
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>
                        <a href="{{ url('movie/' . $movie->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ url('movie/' . $movie->id . '/edit')}}" class="btn btn-primary">Edit</a>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('movie/create')}}" class="btn btn-info">Create movie</a>
</div>
@endSection