<?php

namespace App\Http\Controllers;
use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    //validation rules
    protected $validationRules = [
        'title' => 'required | max:100',
        'description' => 'required',
        'thumb' => 'required | url | max:255',
        'price' => 'required',
        'series' => 'required | max: 50',
        'sale_date' => 'required | date',
        'type' => 'required | max: 50',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Comic $comic)
    {
        $request->validate($this->validationRules);
        $data = $request->all();
        $newComic = Comic::create($data);
        
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $request->validate($this->validationRules);
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    public function welcome()
    {
        $comics = Comic::all();
        // dd($comics);
        return view('welcome', compact('comics'));
    }
}
