@extends('layout.main')

@section('pageContent')
<h1>{{$comic->title}}</h1>
<p>{{$comic->description}}</p>
<ul>
    <li>{{$comic->thumb}}</li>
    <li>{{$comic->price}}</li>
    <li>{{$comic->series}}</li>
    <li>{{$comic->sale_date}}</li>
    <li>{{$comic->type}}</li>
</ul>
@endsection