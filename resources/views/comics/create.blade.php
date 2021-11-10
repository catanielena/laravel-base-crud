@extends('layout.main')

@section('pageContent')
<form action="{{route('comics.store')}}" method="post">
    @csrf
    {{-- title --}}
    <div class="form__group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="title">
    </div>
    {{-- /title --}}
    {{-- description --}}
    <div class="form__group">
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="description" rows="5"></textarea>
    </div>
    {{-- /description --}}
    {{-- thumb --}}
    <div class="form__group">
        <label for="thumb">Image</label>
        <input type="text" id="thumb" name="thumb" placeholder="thumb url">
    </div>
    {{-- /thumb --}}
    {{-- price --}}
    <div class="form__group">
        <label for="price">Price</label>
        <input type="text" id="price" name="price" placeholder="es. 21.50">
    </div>
    {{-- /price --}}
    {{-- price --}}
    <div class="form__group">
        <label for="series">Series</label>
        <input type="text" id="series" name="series" placeholder="series">
    </div>
    {{-- /price --}}
    {{-- date --}}
    <div class="form__group">
        <label for="sale_date">Sale Date</label>
        <input type="date" id="sale_date" name="sale_date">
    </div>
    {{-- /date --}}
    {{-- type --}}
    <div class="form__group">
        <label for="date">Type</label>
        <select name="type" id="type">
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
    </div>
    {{-- /type --}}
    <div class="form__btn">
        <button type="submit" class="btn">Add</button>
    </div>
</form>
@endsection