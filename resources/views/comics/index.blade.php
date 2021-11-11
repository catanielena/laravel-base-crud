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
                <th>View</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td >{{$comic->description}}</td>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->price}}&#x20AC;</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td class="td__btn">
                        <a href="{{route('comics.show', $comic->id)}}" class="btn">view</a>
                    </td>
                    <td class="td__btn">
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn">edit</a>
                    </td>
                    <td class="td__btn">
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection