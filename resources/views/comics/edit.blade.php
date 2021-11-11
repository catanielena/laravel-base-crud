@extends('layout.main')

@section('pageContent')
<form action="{{route('comics.update', $comic->id)}}" method="POST" class="form">
    @csrf
    @method("PUT")
    {{-- title --}}
    <div class="form__group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="title" value="{{ old('title') ? old('title') :$comic->title}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    {{-- /title --}}
    {{-- description --}}
    <div class="form__group">
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="description" rows="5" value="{{ old('description') ? old('description') :$comic->description}}"></textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror    
    </div>
    {{-- /description --}}
    {{-- thumb --}}
    <div class="form__group">
        <label for="thumb">Image</label>
        <input type="text" id="thumb" name="thumb" placeholder="thumb url" value="{{ old('thumb') ? old('thumb') :$comic->thumb}}">
        @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
    {{-- /thumb --}}
    {{-- price --}}
    <div class="form__group">
        <label for="price">Price</label>
        <input type="text" id="price" name="price" placeholder="es. 21.50" value="{{ old('price') ? old('price') :$comic->price}}">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
    {{-- /price --}}
    {{-- price --}}
    <div class="form__group">
        <label for="series">Series</label>
        <input type="text" id="series" name="series" placeholder="series" value="{{ old('series') ? old('series') :$comic->series}}">
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
    {{-- /price --}}
    {{-- date --}}
    <div class="form__group">
        <label for="sale_date">Sale Date</label>
        <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') :$comic->sale_date}}">
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
    {{-- /date --}}
    {{-- type --}}
    <div class="form__group">
        <label for="type">Type</label>
        <select name="type" id="type" value="{{ old('type') ? old('type') :$comic->type}}">
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
    {{-- /type --}}
    <div class="form__btn">
        <button type="submit" class="btn">Edit</button>
    </div>
</form>
@endsection