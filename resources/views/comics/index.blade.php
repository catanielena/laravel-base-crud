@extends('layout.main')

@section('pageContent')
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td><a href="{{route('comics.show', $comic->id)}}" class="btn">view</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection