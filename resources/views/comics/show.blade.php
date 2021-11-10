@extends('layout.main')

@section('pageContent')
<h1>{{$comic->title}}</h1>
<p>{{$comic->description}}</p>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}">
<ul>
    <li>{{$comic->price}}</li>
    <li>{{$comic->series}}</li>
    <li>{{$comic->sale_date}}</li>
    <li>{{$comic->type}}</li>
</ul>
@endsection