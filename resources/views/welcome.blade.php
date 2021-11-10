@extends('layout.main')

@section('pageContent')
<ul class="welcome__list">
    @foreach ($comics as $comic)
    <li id="comic-{{$comic->id}}">
        <img src="{{$comic->thumb}}" alt="">
    </li>
    @endforeach
</ul>
    
@endsection