@extends('layout.main')

@section('pageContent')
<div class="show">   
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <div class="show__info">
        <ul>
            <li>{{$comic->price}}&#x20AC;</li>
            <li>{{$comic->series}}</li>
            <li>{{$comic->sale_date}}</li>
            <li>{{$comic->type}}</li>
        </ul>
        <p>{{$comic->description}}</p>
    </div>
</div>
@endsection